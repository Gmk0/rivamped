<?php

namespace App\Livewire\Web;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

#[Layout('layouts.web-layout')]
class News extends Component
{
    use WithPagination;
    public function mount()
    {
       
    }
    public function render()
    {
       

        return view('livewire.web.news',
        [
        'realisations'=> Post::where('is_publish',true)->paginate(10),
        'categories'=> Category::all(),
        'tags'=> Tag::all(),
        'recents' => Post::where('is_publish', true)->latest()->take(5)->get(),
        ]);
    }
}
