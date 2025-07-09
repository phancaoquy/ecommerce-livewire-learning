<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class HomePage extends Component
{
    #[Title('Create Post')]
    public function render()
    {
        return view('livewire.home-page');
    }
}
