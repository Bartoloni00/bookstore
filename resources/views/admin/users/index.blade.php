<?php 
use Illuminate\Database\Eloquent\Collections;
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag; $errors*/
/** @var User[]|Collection $users */

?>

@extends('layouts.admin')
@section('title', 'Usuarios')
@section('contenido')
<h1 class="text-center">Usuarios registrados</h1>

<div class="card-group">
    @foreach ($users as $user)
        <div class="card">
            <ul class="card-body">
                <li><b>Username: </b>{{ $user->name }}</li>
                <li><b>Email: </b>{{ $user->email }}</li>
                <li><b>Username: </b>{{ $user->role->name }}</li>
            </ul>
            <div class="card-footer d-flex">
                <a href="{{ url('/admin/users/'. $user->id .'/edit') }}" class="btn btn-warning">Editar</a>
                <a href="{{ url('/admin/users/'. $user->id .'/delete') }}" class="btn btn-danger">Eliminar</a>
              </div>
        </div>
    @endforeach
  </div>   
@endsection