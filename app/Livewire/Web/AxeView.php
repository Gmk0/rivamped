<?php

namespace App\Livewire\Web;

use Livewire\Component;
use Livewire\Attributes\Layout;

use App\Models\Axe as ModelAxe;


#[Layout('layouts.web-layout')]
class AxeView extends Component
{
    public $axe;

    public function mount($axe = null)
    {
        $this->axe = ModelAxe::where('slug', '=', $axe)->first();
        if ($this->axe === null) {
            return redirect('/');
        }
    }
    public function render()
    {
        return view('livewire.web.axe-view',['otherAxes' => ModelAxe::where('id', '!=', $this->axe?->id)->where('is_publish', true)->get()]);
    }
}
