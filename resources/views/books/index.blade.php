<?php 
/** @var Book[]|Collection $movies */
?>
@extends('layouts.main')

@section('title','Listado de libros')

@section('contenido')

<h1>Listado de libros</h1>
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
        <?php
        // esta es la sintaxis de blade para el foreach
        // podemos utilizar <?=?< paramostrar los elementos
        // pero tambien podemos mostrarlos con {!! $book->book_id !!}
        // esta nos sirve cuando queremos utilizar etiquetas html...
        // en todos los otros casos por temas de seguridad conviene:
        //{{ $book->book_id }}
        ?>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author->name }} {{ $book->author->lastname }}</td>
            <td>{{ $book->synopsis }}</td>
            <td>{{ $book->release_date }}</td>
            <td>$ {{ $book->price }}</td>
            <td>
                {{-- <a href="{{ url('/books/' . $book->id) }}" class="btn btn-primary">Ver detalles</a> --}}
                <a href="{{ url('books',['id' => $book->id]) }}" class="btn btn-primary">Ver detalles</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
