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

    public int $post_id = 0;

    public string $view = 'create';
    public string $title = '';
    public string $body = '';

    public function render(): View
    {
        $posts = Post::orderByDesc('id')->paginate(7);

        return view('livewire.post-component', compact('posts'));
    }

    public function store(): void
    {
        $data = $this->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = Post::create($data);

        $this->edit($post->id);
    }

    public function edit(mixed $id): void
    {
        $post = Post::find($id);

        $this->post_id = $post->id;
        $this->title = $post->title;
        $this->body = $post->body;

        $this->view = 'edit';
    }

    public function update()
    {
        $data = $this->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = Post::find($this->post_id);

        $post->update($data);

        $this->default();
    }

    public function destroy(mixed $id): void
    {
        Post::destroy($id);

        $this->default();
    }

    public function default(): void
    {
        $this->title = '';
        $this->body = '';
        $this->view = 'create';
    }
}
