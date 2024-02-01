<?php

namespace App\Livewire;

use App\Models\Books;
use Livewire\Component;

class Beranda extends Component
{

    public $books;

    public function mount()
    {
        $this->books = Books::inRandomOrder()->take(5)->get();
    }
    public function render()
    {
        return view('livewire.beranda');
    }
}
