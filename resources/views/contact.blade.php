@extends('layouts.main')

@section('title', 'Contacto')

@section('contenido')

<!-- Titulo de la vista -->
<h1 class="text-center mb-3">Contacto</h1>

<!-- Formulario contacto -->
<form action="{{ route('contact.result') }}" method="POST" class="m-auto mt-5" style="max-width:800px;">
    @csrf

    <!-- Email del usuario -->
    <label class="custom-label mb-3" for="email">
        <span class="custom-label-text">Email: </span>
        <input
          type="email"
          class="custom-input"
          id="email"
          name="email"
          required
          placeholder="Ingresa tu correo electrónico">
    </label>

    <!-- Titutlo del mensaje -->
    <label class="custom-label mb-3" for="reason">
        <span class="custom-label-text">Motivo:</span>
        <input
          type="text"
          class="custom-input"
          id="reason"
          name="reason"
          required
          placeholder="Explícanos brevemente el motivo de tu contacto">
    </label>

    <!-- Mensaje del usuario -->
    <label class="mb-3 d-block" for="message">
        <span class="form-label">Mensaje</span>
        <textarea
          class="custom-textarea"
          id="message"
          name="message"
          rows="3"
          required
          placeholder="Escribe tu mensaje aquí">
        </textarea>
    </label>

    <!-- Boton de submit -->
    <button type="submit" class="btn-custom mt-3 d-block m-auto w-25">Enviar</button>
</form>
@endsection
