@extends('layouts.main')

@section('title', $blog->title)

@section('contenido')
<h1 class="mb-3">Información del Blog:</h1>
<x-blog-details :blog="$blog"/>
@endsection

