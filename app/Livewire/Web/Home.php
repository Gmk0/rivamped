<?php

namespace App\Livewire\Web;

use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('layouts.web-layout')]
class Home extends Component
{
    public function render()
    {
        return view('livewire.web.home');
    }
}
