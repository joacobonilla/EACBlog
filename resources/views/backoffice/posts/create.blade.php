@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nuevo Post</h1>
    <form action="{{ route('backoffice.posts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="author" class="form-label">Autor</label>
            <input type="text" name="author" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Fecha</label>
            <input type="date" name="date" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenido</label>
            <textarea name="content" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Crear</button>
    </form>
</div>
@endsection
