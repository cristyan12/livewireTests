@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-9">
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
                    <td>{{ $post->body }}</td>
                    <td>
                        <button class="btn btn-primary">Editar</button>
                    </td>
                    <td>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection