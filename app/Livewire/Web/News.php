<?php

namespace App\Livewire\Web;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Client\Request;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

#[Layout('layouts.web-layout')]
class News extends Component
{
    use WithPagination;
    #[Url(history: false)]
    public $tag_search = '';
    public $tagIds;
    #[Url(history: false)]
    public $search;

    public function mount()
    {

    }

    public function addTag($tag, $id = null)
    {
        if($tag == $this->tag_search)
        {
            $this->tag_search = '';
            $this->tagIds = '';
        }else{
        $this->tag_search = $tag;
        $this->tagIds = $id;
        }
    }
    public function render()
    {


        return view('livewire.web.news',
        [
        'realisations'=> Post::when($this->tag_search, function ($q) {
                    $q->where('tags', 'like', '%' . $this->tagIds . '%');
                })->when($this->search, function ($q) {
                    $q->where('title','like', '%' . $this->search . '%')
                    ->
                    Orwhere('tags', 'like', '%' . $this->search . '%')
                    ->Orwhere('description', 'like', '%' . $this->search . '%');
                })
                ->where('is_publish',true)->paginate(10),
        'categories'=> Category::all(),
        'tags'=> Tag::all(),
        'recents' => Post::where('is_publish', true)->latest()->take(5)->get(),
        ]);
    }
}
