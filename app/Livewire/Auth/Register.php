<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Register extends Component
{
    public ?array $user =[
        'name'=>'',
        'password'=>'',
        'phone'=>'',
        'status'=>'',
        'email'=>'',
        'terms'=>false,
        'password_confirmation'=>'',
        ];
    public function render()
    {
        return view('livewire.auth.register');
    }


    public function register()
    {
        dd($this->user);

    }
}
