<?php

namespace App\Livewire;

use App\Models\Book;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class UpdateBook extends Component
{
    public Book $book;
    public $isOpen = false;

    protected $rules = [
        'book.title' => 'required|string|max:255',
        'book.author' => 'required|string|max:255',
        'book.rating' => 'required|numeric|min:1|max:5',
    ];

    public function update()
    {
        $this->validate();
        $this->book->save();
        $this->isOpen = false;
        $this->dispatch('bookUpdated');
    }

    public function render()
    {
        dd($this->book);
        return view('livewire.update-book');
    }
}
