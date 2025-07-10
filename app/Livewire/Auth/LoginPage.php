<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Title;
use Livewire\Component;

class LoginPage extends Component
{
    #[Title("Login page | eCommerce")]
    public function render()
    {
        return view('livewire.auth.login-page');
    }
}
