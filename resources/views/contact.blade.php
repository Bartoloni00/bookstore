@extends('layouts.main')

@section('title', 'Contacto')

@section('contenido')

<!-- Titulo de la vista -->
<h2 class="custom-subtitle text-center my-5">Contacto</h2>

<!-- Formulario contacto -->
<form action="{{ route('contact.result') }}" method="POST" class="mt-5 custom-forms">
    @csrf

    <!-- Email del usuario -->
    <div class="mb-3">
      <label for="email" class="custom-forms-label">Email:</label>
      <input
       type="email" 
       class="form-control" 
       id="email" 
       name="email"
       placeholder="Ingresa tu correo electrónico">
    </div>

    <!-- Titutlo del mensaje -->
    <div class="mb-3">
      <label for="reason" class="custom-forms-label">Motivo:</label>
      <input
       type="text" 
       class="form-control" 
       id="reason" 
       name="reason"
       placeholder="Explícanos brevemente el motivo de tu contacto">
    </div>

    <!-- Mensaje del usuario -->
    <div class="mb-3">
      <label for="message" class="custom-forms-label">Mensaje:</label>
      <textarea 
       class="form-control" 
       id="message" 
       name="message"
       rows="3"
       required
       placeholder="Escribe tu mensaje aquí"></textarea>
    </div>

    <!-- Boton de submit -->
    <div class="d-flex justify-content-center">
      <button type="submit" class="custom-forms-submit">Enviar</button>
    </div>
</form>
@endsection
