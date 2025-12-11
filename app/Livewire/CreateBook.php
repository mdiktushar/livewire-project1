<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreateBook extends Component
{
    #[Rule('required|string|min:3|max:50')]
    public $title;
    #[Rule('required|string|min:3|max:50')]
    public $author;
    #[Rule('required|integer|min:1|max:10')]
    public $rating;


    public function store()
    {
        $this->validate();
        // $this->validate([
        //     "title"  => "required|string|min:3|max:50",
        //     "author" => "required|string|min:3|max:50",
        //     "rating" => "required|integer|min:1|max:10",
        // ]);
        Book::create([
            'title'  => $this->title,
            'author' => $this->author,
            'rating' => $this->rating,
        ]);
        $this->redirect('/');
    }

    // #[Layout('components.layouts.second')]
    public function render()
    {
        return view('livewire.create-book');
    }
}
