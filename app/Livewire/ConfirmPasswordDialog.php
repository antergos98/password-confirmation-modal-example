<?php

namespace App\Livewire;

use Livewire\Component;

class ConfirmPasswordDialog extends Component
{
    public string $password;

    public function render()
    {
        return view('livewire.confirm-password-dialog');
    }

    public function verify(): void
    {
        $this->clearValidation();

        $this->validate(['password' => 'required']);

        if (auth()->guard()->validate(['email' => auth()->user()->email, 'password' => $this->password])) {
            $this->dispatch('password-confirmed');

            session()->put('auth.password_confirmed_at', now()->unix());

            return;
        }

        $this->addError('password', 'Password invalid');
    }
}
