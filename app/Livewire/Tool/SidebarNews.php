<?php

namespace App\Livewire\Tool;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Livewire\Component;

class SidebarNews extends Component
{
    public function render()
    {
        return view('livewire.tool.sidebar-news',
        [
                'categories' => Category::all(),
                'tags' => Tag::all(),
                'recents' => Post::where('is_publish', true)->latest()->take(5)->get(),
            ]);
    }
}
