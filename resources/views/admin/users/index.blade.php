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

  <div class="container">
    <div class="row">
    @foreach ($users as $user)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card" style="min-height: 180px;">
              <div class="card-body">
                  <p class="card-title">Username: {{ $user->name }}</p>
                  <p class="card-title">Email: {{ $user->email }}</p>
                  <p class="card-title">Rol: {{ $user->role->name }}</p>
                </div>
                <div class="card-footer d-flex">
                  <a href="{{ url('/admin/users/'. $user->id .'/edit') }}" class="btn btn-warning w-100 mx-2"><i class="bi bi-pencil"></i> Editar</a>
                  <a href="{{ url('/admin/users/'. $user->id .'/delete') }}" class="btn btn-danger w-100 mx-2"><i class="bi bi-trash3"></i> Eliminar</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
  </div>
  {{$users->links()}}
@endsection