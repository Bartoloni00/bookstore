@extends('layouts.main')

@section('title', $blog->title)

@section('contenido')
<!--Titulo del blog-->
<h2 class="custom-subtitle text-center my-4">{{$blog->title}}</h2>

<!--Contenido del blog-->
<x-blog-details :blog="$blog"/>
@endsection
