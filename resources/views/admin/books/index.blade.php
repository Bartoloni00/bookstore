<?php 
/** @var Book[]|Collection $books */
?>

@extends('layouts.admin')
@section('title', 'Books Dashboard')

@section('contenido')
<h1>Dashboard de libros</h1>
<a href="{{ route('book.create.view') }}" class="btn btn-success mb-3"><i class="bi bi-plus-circle"></i> Agregar nuevo libro</a>

<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Author</th>
                <th scope="col">Categoria</th>
                <th scope="col">Synopsis</th>
                <th scope="col">Fecha de estreno</th>
                <th scope="col">Precio del libro</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author->name }} {{ $book->author->lastname }}</td>
                <td>{{ $book->category->name }}</td>
                <td>{{ $book->synopsis }}</td>
                <td>{{ $book->release_date }}</td>
                <td>$ {{ $book->price }}</td>
                <td>
                    <a href="{{ url('/admin/books/' . $book->id . '/edit') }}" class="btn btn-primary w-100 block mb-2"><i class="bi bi-pencil"></i> Editar</a>
                    <a href="{{ url('/admin/books/' . $book->id . '/delete') }}" class="btn btn-danger w-100 block"><i class="bi bi-trash3"></i> Eliminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{$books->links()}}
@endsection()