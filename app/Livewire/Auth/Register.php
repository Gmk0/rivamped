<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

        $this->validate(
            [
                'user.name'=>'required',
                'user.email'=>'required|unique:users,email',
                'user.phone'=> 'required|numeric|unique:users,phone',
                'user.password'=> 'required|confirmed',
                'user.status'=>'required',
                ]
        );

        $user=User::create($this->user);

        Auth::login($user);
        return redirect('/dashboard');

    }
}
