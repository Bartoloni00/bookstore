@extends('layouts.main')

@section('title', $blog->title)

@section('contenido')
<!--Titulo del blog-->
<h1 class="mb-3 text-center">{{$blog->title}}</h1>

<!--Contenido del blog-->
<x-blog-details :blog="$blog"/>
@endsection
