<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostComponent extends Component
{
    public function render()
    {
        $posts = Post::all();

        return view('livewire.post-component', compact('posts'));
    }
}
