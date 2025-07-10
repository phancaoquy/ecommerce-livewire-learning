<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Title;
use Livewire\Component;

class RegisterPage extends Component
{
    #[Title("Registration | eCommerce")]
    public function render()
    {
        return view('livewire.auth.register-page');
    }
}
