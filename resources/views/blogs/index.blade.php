<?php

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Paginator\LengthAwarePaginator;

/** @var Blog[]|Collection|LengthAwarePaginator $blogs */
?>

@extends('layouts.main')

@section('title','Nuestros blogs')

@section('contenido')

<!--Titulo de la sección-->
<h2 class="custom-subtitle text-center my-5">Nuestros blogs</h2>

<!--Contenedor de la sección-->
    <div class="container mt-5">
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <a href="{{ url('/blogs/' . $blog->id) }}" class="text-decoration-none">
                        <div class="blog-card">
                            @if ($blog->image)
                                @if(substr($blog->image->name, 0, 8) !== 'https://')
                                    <img src="{{ asset('storage/' . $blog->image->name)}}" class="blog-image" alt="{{$blog->image->alt}}" loading="lazy">
                                @else
                                    <img src="{{$blog->image->name}}" class="blog-image" alt="{{$blog->image->alt}}" loading="lazy">
                                @endif
                            @else
                                <img src="{{ asset('storage/blogDefault.jpg')}}" class="blog-image" alt="{{$blog->title}}" loading="lazy">
                            @endif
                            <div class="blog-body">
                                <h3 class="custom-subtitle-medium">{{ $blog->title }}</h3>
                                <p class="custom-text">{{ $blog->synopsis }}</p>
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="custom-text">
                                        <i class="fas fa-user"></i> 
                                        <span>{{ $blog->user->name }}</span>
                                    </p>
                                    <p class="custom-text">
                                        <i class="fas fa-calendar"></i> 
                                        <span>{{ $blog->release_date }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
