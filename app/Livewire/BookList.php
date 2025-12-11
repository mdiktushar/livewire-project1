<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;
use Livewire\Attributes\Title; 

class BookList extends Component
{

    public $name = 'Sanjida';

    public function delete(Book $book)
    {
        $book->delete();
    }

    #[Title('Book list')]
    public function render()
    {
        return view('livewire.book-list', [
            'books' => Book::all(),
        ]);
    }
}
