<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class CreateBook extends Component
{
    // #[Layout('components.layouts.second')]
    public function render()
    {
        return view('livewire.create-book');
    }
}
