<?php

namespace App\Livewire;

use Livewire\Component;

class PageHeader extends Component
{
    public $name = 'Sanjida';
    public function render()
    {
        return view('livewire.page-header');
    }
}
