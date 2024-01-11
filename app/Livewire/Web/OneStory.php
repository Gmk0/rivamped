<?php

namespace App\Livewire\Web;

use App\Models\Histoire;
use Livewire\Component;
use Livewire\Attributes\Layout;



#[Layout('layouts.web-layout')]
class OneStory extends Component
{
    public $story;
    public function mount($story = null)
    {
        $this->story = Histoire::where('slug', '=', $story)->first();


        if ($this->story  == null) {
            return redirect('/');
        }
    }
    public function render()
    {
        return view('livewire.web.one-story',['otherStory'=>Histoire::where('id','!=',$this->story->id)->where('is_publish',true)->get()]);
    }
}
