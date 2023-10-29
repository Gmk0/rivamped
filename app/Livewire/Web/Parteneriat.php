<?php

namespace App\Livewire\Web;

use Livewire\Component;
use Livewire\Attributes\Layout;



#[Layout('layouts.web-layout')]

class Parteneriat extends Component
{
    public function render()
    {
        return view('livewire.web.parteneriat');
    }
}
