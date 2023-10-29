<?php

namespace App\Livewire\Blog;

use Livewire\Component;

use Livewire\Attributes\Layout;
use App\Models\Post;
use Livewire\WithPagination;

#[Layout('layouts.web-layout')]
class OneView extends Component
{
public $post;
    public function mount($slug){

        $this->post=Post::where('slug',$slug)->first();




    }
    public function render()
    {
        return view('livewire.blog.one-view');
    }
}
