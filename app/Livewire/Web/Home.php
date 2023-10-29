<?php

namespace App\Livewire\Web;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Axe;
use App\Models\Histoire;

#[Layout('layouts.web-layout')]
class Home extends Component
{

    public function render()
    {
        return view('livewire.web.home',[
            'Axes'=>Axe::where('is_publish', true)->get(),
            'stories'=>Histoire::where('is_publish', true)->latest()->take(6)->get(),
            ]);
    }
}
