<?php 
/** @var Book[]|Collection $movies */
?>

@extends('layouts.admin')
@section('title', 'Books Dashboard')

@section('contenido')
<h1>Dashboard de libros</h1>
<a href="{{ url('/admin/books/add') }}" class="btn btn-success">Agregar nuevo libro</a>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Author</th>
            <th>Synopsis</th>
            <th>Fecha de estreno</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author->name }} {{ $book->author->lastname }}</td>
            <td>{{ $book->synopsis }}</td>
            <td>{{ $book->release_date }}</td>
            <td>$ {{ $book->price }}</td>
            <td>
                <a href="{{ url('/admin/books/' . $book->id . '/edit') }}" class="btn btn-warning">Editar</a>
                <a href="{{ url('/admin/books/' . $book->id . '/delete') }}" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection()