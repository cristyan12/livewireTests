<h2>Listado de posts</h2>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Contenido</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ Str::limit($post->body, 60) }}</td>
        <td>
            <button wire:click="edit({{ $post->id }})" class="btn btn-primary">
                Editar
            </button>
        </td>
        <td>
            <button wire:click="destroy({{ $post }})" class="btn btn-danger">
                Eliminar
            </button>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

{{ $posts->links() }}
