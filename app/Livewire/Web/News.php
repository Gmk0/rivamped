<?php

namespace App\Livewire\Web;

use App\Models\Realisation;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

#[Layout('layouts.web-layout')]
class News extends Component
{
    use WithPagination;
    public function render()
    {


        return view('livewire.web.news',['realisations'=>Realisation::paginate(10)]);
    }
}
