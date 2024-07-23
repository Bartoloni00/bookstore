@extends('layouts.main')

@section('title', $book->title)

@section('contenido')
<h2 class="custom-subtitle text-center my-5">{{ $book->title }}</h2>
<x-book-details :book="$book" buy="true"/>
@endsection
