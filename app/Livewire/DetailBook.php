<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Books;

class DetailBook extends Component
{
    public $book;
    public $books;


    public function mount($bookId)
    {
        $this->book = Books::find($bookId);
        $this->books = Books::inRandomOrder()->take(5)->get();

    }

    public function render()
    {
        return view('livewire.detail-book');
    }
}