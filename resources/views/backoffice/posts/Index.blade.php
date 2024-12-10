@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de Posts</h1>
    <a href="{{ route('backoffice.posts.create') }}" class="btn btn-primary mb-3">Crear Post</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Autor</th>
                <th>Título</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->author }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->date }}</td>
                <td>

                    <a href="{{ route('backoffice.posts.show', $post) }}" class="btn btn-info">Ver</a>


                    <a href="{{ route('backoffice.posts.edit', $post) }}" class="btn btn-warning">Editar</a>


                    <form action="{{ route('backoffice.posts.destroy', $post) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection