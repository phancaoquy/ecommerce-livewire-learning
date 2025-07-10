<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class ProductsPage extends Component
{
    #[Title("Products | eCommerce")]
    public function render()
    {
        return view('livewire.products-page');
    }
}
