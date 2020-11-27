<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class PostComponent extends Component
{
    use WithPagination;

    protected string $paginationTheme = 'bootstrap';

    public string $view = 'create';
    public string $title = '';
    public string $body = '';

    public function render(): View
    {
        $posts = Post::orderByDesc('id')->paginate(7);

        return view('livewire.post-component', compact('posts'));
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        Post::create([
            'title' => $this->title,
            'body' => $this->body,
        ]);
    }

    public function destroy(mixed $id): void
    {
        Post::destroy($id);
    }
}
