<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Books;
use Carbon\Carbon;

class ListBook extends Component
{
    public $books;
    public $filter;
    public $search;

    public function mount()
    {
        $this->filter = 'all';
        $this->loadBooks();
    }

    public function loadBooks()
    {
        $query = Books::query();

        if ($this->filter === 'new') {
            $query->where('created_at', '>', Carbon::now()->subYear())
                ->where('tag', '1');
        } elseif ($this->filter === 'upcoming') {
            $query->where('tag', '2');
        } elseif ($this->filter === 'oldbook') {
            $query->where('tag', '3');
        }

        if (!empty($this->search)) {
            $query->where('title', 'like', '%' . $this->search . '%');
        }

        $this->books = $query->get();
    }

    public function setFilter($filter)
    {
        $this->filter = $filter;
        $this->search = '';
        $this->loadBooks();
    }

    public function render()
    {
        return view('livewire.list-book');
    }
}