<?php 
use Illuminate\Database\Eloquent\Collection;
use App\Models\Book;
use Illuminate\Paginator\LengthAwarePaginator;

/** @var Blog[]|Collection|LengthAwarePaginator $blogs */
?>

@extends('layouts.main')

@section('title','Nuestros blogs')

@section('contenido')
<h1>Nuestros blogs</h1>
    <div class="row mb-2">
        @foreach ($blogs as $blog)
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary-emphasis">#{{ $blog->id }}</strong>
                    @if ($blog->image)
                        @if(substr($blog->image->name, 0, 8) !== 'https://')
                            <img src="{{ asset('storage/' . $blog->image->name)}}" alt="{{$blog->image->alt}}" loading="lazy">
                        @else
                            <img src="{{$blog->image->name}}" alt="{{$blog->image->alt}}" loading="lazy">
                        @endif
                    @else
                        <img src="{{ asset('storage/' .'blogDefault.jpg')}}" alt="{{$blog->title}}" loading="lazy">
                    @endif
                    <h3 class="mb-0">{{ $blog->title }}</h3>
                    <div class="mb-1 text-body-secondary">{{ $blog->release_date }}</div>
                    <p class="card-text mb-auto">{{ $blog->synopsis }}</p>
                    <a href="{{ url('/blogs/' . $blog->id) }}" class="icon-link gap-1 icon-link-hover stretched-link">
                        Ver mas
                        <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
  </div>

  {{$blogs->links()}}
@endsection
