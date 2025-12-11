<?php

namespace App\Livewire;

use Livewire\Component;

class PageHeader extends Component
{
    public $name = 'Sanjida';
    public $subtitle;

    public function mount($subtitle)
    {
        $this->subtitle = $subtitle;
    }
    public function render()
    {
        return view('livewire.page-header');
    }
}
