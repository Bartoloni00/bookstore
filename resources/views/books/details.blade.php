@extends('layouts.main')

@section('title', $book->title)

@section('contenido')
<h1 class="mb-3">{{ $book->title }}</h1>
<ul>
    <li><b>Fecha de estreno</b>: {{ $book->release_date }}</li>
    <li><b>Precio</b>: $ {{ $book->price }}</li>
</ul>
<h2>Descripcion</h2>
<p>{{ $book->synopsis }}</p>
@endsection
