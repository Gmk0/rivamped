<?php

namespace App\Livewire\Realisation;

use App\Livewire\Web\News;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Realisation;
use Livewire\Component;

use Livewire\WithPagination;
use Livewire\Attributes\Layout;

#[Layout('layouts.web-layout')]
class OneRealisation extends Component
{

    public $post;
    public $otherpost;
    public $select;

    use WithPagination;

    public function mount($slug)
    {
        $this->post=Post::where('slug',$slug)->first();

        if($this->post == null)
        {
            return redirect()->back();
        }


        $this->otherpost=Post::where('id','!=', $this->post->id)->get();
    }
    public function render()
    {

        return view('livewire.realisation.one-realisation',
        ['comments'=>Comment::where('post_id', $this->post->id)->paginate(10)]
        );
    }
}
