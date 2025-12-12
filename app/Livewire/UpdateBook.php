<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class UpdateBook extends Component
{
    public Book $book;

    public function mount(Book $book)
    {
        $this->book = $book;
    }

    public function render()
    {
        return view('livewire.update-book', ['book' => $this->book]);
    }
}
