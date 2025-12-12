<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class CreateModal extends Component
{
    public $isOpen = false;
    public $title, $author, $rating;

    protected $rules = [
        "title" => "required|string|min:3|max:50",
        "author" => "required|string|min:3|max:50",
        "rating" => "required|integer|min:1|max:10",
    ];

    public function submit()
    {
        $this->validate();

        Book::create([
            'title'  => $this->title,
            'author' => $this->author,
            'rating' => $this->rating,
        ]);

        $this->reset();
        $this->isOpen = false;

        // creating a event
         $this->dispatch('bookAdded');
    }

    public function render()
    {
        return view('livewire.create-modal');
    }
}
