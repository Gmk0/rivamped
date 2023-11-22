<?php

namespace App\Livewire\Realisation;

use App\Models\Realisation;
use Livewire\Component;

use Livewire\WithPagination;
use Livewire\Attributes\Layout;

#[Layout('layouts.web-layout')]
class OneRealisation extends Component
{

    public $realisation;
    public $otherRealisation;

    public function mount($slug)
    {
        $this->realisation=Realisation::where('slug',$slug)->first();

        if($this->realisation == null)
        {
            return redirect()->back();
        }

        $this->otherRealisation=Realisation::where('id','!=', $this->realisation->id)->get();
    }
    public function render()
    {
        return view('livewire.realisation.one-realisation');
    }
}
