@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Post</h1>

    <div class="mb-3">
        <label for="author" class="form-label">Autor</label>
        <p>{{ $post->author }}</p>
    </div>

    <div class="mb-3">
        <label for="title" class="form-label">Título</label>
        <p>{{ $post->title }}</p>
    </div>

    <div class="mb-3">
        <label for="date" class="form-label">Fecha</label>
        <p>{{ \Carbon\Carbon::parse($post->date)->format('d \d\e F \d\e Y') }}</p>
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">Contenido</label>
        <p>{{ $post->content }}</p>
    </div>

    <a href="{{ route('backoffice.posts.index') }}" class="btn btn-primary">Volver a la lista</a>
</div>
@endsection
