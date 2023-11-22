<?php 
use Illuminate\Database\Eloquent\Collections;
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag; $errors*/
/** @var User; $user*/
?>

@extends('layouts.admin')
@section('title', 'Eliminar usuario')
{{-- @csrf es para protegernos de ataques CSRF si no lo tenemos laravel tira un error 419 --}}
@section('contenido')
<h1>Desea <b>eliminar</b> al usuario: {{$user->name}}?</h1>

    <div class="form-group mb-3">
        <span>Username:</span>
        <p class="form-control bg-body-secondary">{{ $user->name }}</p>
    </div>

    <div class="form-group mb-3">
        <span>Email:</span>
        <p class="form-control bg-body-secondary" >{{ $user->email}}</p>
    </div>

    <div class="form-group mb-3">
        <span>Rol:</span>
        <p class="form-control bg-body-secondary" >{{ $user->role->name }}</p>
    </div>

    @if($user->role->name == 'user')
    <h2>Este usuario a comprado los siguientes libros:</h2>

    <x-books-list :user="$user"/>
    @endif
    <p class="text-danger text-center">¿Estas seguro de querer eliminar al usuario: {{$user->name}}?</p>
    <form method="POST" action="{{ url('/admin/users/'. $user->id .'/delete')}}">
        @csrf 
        <div class="btn-max-width mx-auto mb-3">
            <button type="submit" class="btn btn-danger mt-3 w-100 block m-auto">Si, quiero eliminar al usuario</button>
        </div>
    </form> 

@endsection()