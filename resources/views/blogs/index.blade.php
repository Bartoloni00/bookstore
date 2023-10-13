@extends('layouts.main')

@section('title','Nuestros blogs')

@section('contenido')
<h1>Nuestros blogs</h1>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Description</th>
            <th>Synopsis</th>
            <th>Fecha de estreno</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($blogs as $blog)
        <tr>
            <td>{{ $blog->id }}</td>
            <td>{{ $blog->description }}</td>
            <td>{{ $blog->synopsis }}</td>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->release_date }}</td>
            <td>$ {{ $blog->price }}</td>
            <td>
                <a href="{{ url('/blogs/' . $blog->id) }}" class="btn btn-primary">ver</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
