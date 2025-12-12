<?php

namespace App\Livewire;

use App\Models\Book;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class UpdateBook extends Component
{
    public Book $book;
    public $isOpen = false;

    public function mount(Book $book)
    {
        $this->book = $book;
    }

    public function update()
    {
        $this->validate([
            'book.title' => 'required|string|max:255',
            'book.author' => 'required|string|max:255',
            'book.rating' => 'required|numeric|min:1|max:5',
        ]);

        $this->book->save();
        $this->reset();
        $this->isOpen = false;
        $this->dispatch('bookUpdated');
    }

    public function render()
    {
        return view('livewire.update-book');
    }
}
