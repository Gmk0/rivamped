<?php

namespace App\Livewire\Web;

use Livewire\Component;

use Livewire\Attributes\Layout;
use App\Models\Post;
use Livewire\WithPagination;

#[Layout('layouts.web-layout')]
class Blog extends Component
{use WithPagination;
    public function render()
    {
        return view('livewire.web.blog',['blogs'=>Post::paginate(10)]);
    }
}
