<?php

namespace App\Livewire\Tool;

use Livewire\Component;

class NewsLetter extends Component
{

    public string $email='';
    public function subscrire()
    {


    }
    public function render()
    {
        return view('livewire.tool.news-letter');
    }
}
