@extends('layouts.main')

@section('title', $book->title)

@section('contenido')
<h1 class="mb-3">Detalles</h1>
<x-book-details :book="$book"/>
@endsection
