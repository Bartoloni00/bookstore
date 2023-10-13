@extends('layouts.main')

@section('title', $blogs->title)

@section('contenido')
<h1 class="mb-3">{{ $blogs->title }}</h1>
<ul>
    <li><b>Title</b>: {{ $blogs->title }}</li>
    <li><b>Description</b>: {{ $blogs->description }}</li>
    <li><b>Synopsis</b>: {{ $blogs->synopsis }}</li>
    <li><b>Fecha de estreno</b>: {{ $blogs->release_date }}</li>
</ul>
<h2>Descripcion</h2>
<p>{{ $blogs->synopsis }}</p>
@endsection
