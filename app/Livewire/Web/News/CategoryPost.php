<?php

namespace App\Livewire\Web\News;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;



#[Layout('layouts.web-layout')]
class CategoryPost extends Component
{
    public Category $category;

    #[Url(except: '')]
    public $tag_search='';
    public $tagIds;

    #[Url(except: '')]
    public $search="";


    public function mount($intitule)
    {
        $this->category = Category::where('intitule','=', $intitule)->first();
        if($this->category ==null)
        {
            return redirect()->back();
        }


    }



    public function addTag($tag,$id = null)
    {
        $this->tag_search=$tag;
        $this->tagIds=$id;
    }
    public function render()
    {
        return view('livewire.web.news.category-post', [
            'realisations' => Post::when($this->tag_search, function ($q) {
                $q->where('tags', 'like', '%' . $this->tagIds . '%');
            })->when($this->search, function ($q) {
                $q->where('title', 'like', '%' . $this->search . '%')
                    ->Orwhere('tags', 'like', '%' . $this->search . '%')
                    ->Orwhere('description', 'like', '%' . $this->search . '%');
            })
                ->where('is_publish', true)
        ->where('category_id',$this->category->id)->paginate(10),
            'categories' => Category::all(),
            'tags' => Tag::all(),
            'recents' => Post::where('is_publish', true)->latest()->take(5)->get(),
        ]);
    }
}
