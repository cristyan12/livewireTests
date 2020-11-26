<div>
    <h1>Hola, Livewire...</h1>
    <hr>

    @foreach($posts as $post)
        <h2>{{ $post->title }}</h2>

        <b>Excerpt: </b>

        <span class="text-muted">{{ Str::limit($post->body, 80) }}</span>

        <hr>
    @endforeach
</div>
