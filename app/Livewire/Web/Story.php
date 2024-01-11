<?php

namespace App\Livewire\Web;

use App\Models\Histoire;
use Livewire\Component;

use Livewire\Attributes\Layout;



#[Layout('layouts.web-layout')]
class Story extends Component
{
    public $story;






    public function render()
    {
        return view('livewire.web.story',
        ['stories' => Histoire::paginate('10')]);
    }
}
