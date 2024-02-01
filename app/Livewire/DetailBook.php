<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Books;

class DetailBook extends Component
{
    public $book;

    public function mount($bookId)
    {
        $this->book = Books::find($bookId);
    }

    public function render()
    {
        return view('livewire.detail-book');
    }
}
