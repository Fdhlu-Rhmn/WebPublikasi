<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Books;
use Carbon\Carbon;

class ListBook extends Component
{
    public $books;
    public $filter;

    public function mount()
    {
        $this->filter = 'all';
        $this->loadBooks();
    }

    public function loadBooks()
    {
        if ($this->filter === 'new') {
            $this->books = Books::where('created_at', '>', Carbon::now()->subYear())
                                ->where('tag', '1')
                                ->get();
        } elseif ($this->filter === 'upcoming') {
            $this->books = Books::where('tag', '2')->get();
        } else {
            $this->books = Books::all();
        }
    }

    public function setFilter($filter)
    {
        $this->filter = $filter;
        $this->loadBooks();
    }

    public function render()
    {
        return view('livewire.list-book');
    }
}
