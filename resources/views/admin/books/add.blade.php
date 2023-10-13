@extends('layouts.admin')
@section('title', 'Añadir libro')
{{-- @csrf es para protegernos de ataques CSRF si no lo tenemos laravel tira un error 419 --}}
@section('contenido')
    <h1>Agregar Nuevo Libro</h1>

    <form method="POST" action="{{ url('/admin/books/add')}}">
        @csrf 

        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
        </div>

        <div class="form-group">
            <label for="price">Precio</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>

        <div class="form-group">
            <label for="synopsis">Sinopsis</label>
            <textarea class="form-control" id="synopsis" name="synopsis" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="release_date">Fecha de Lanzamiento</label>
            <input type="date" class="form-control" id="release_date" name="release_date" required>
        </div>

        <div class="form-group">
            <label for="categorie_id">Categoría</label>
            <select class="form-control" id="categorie_id" name="categorie_id" required>
                <option value="1">Ficción</option>
                <option value="2">Fantasía</option>
                <!-- Agrega más opciones según tus necesidades -->
            </select>
        </div>

        <div class="form-group">
            <label for="author_id">Autor</label>
            <select class="form-control" id="author_id" name="author_id" required>
                <option value="1">J.R.R. Tolkien</option>
                <option value="2">Otro Autor</option>
                <!-- Agrega más opciones según tus necesidades -->
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Agregar Libro</button>
    </form>
@endsection()