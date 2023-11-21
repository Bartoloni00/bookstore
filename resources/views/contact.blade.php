@extends('layouts.main')

@section('title', 'Contacto')

@section('contenido')
    <h1 class="text-center mb-3">Contacto</h1>
    <form action="{{ route('contact.result') }}" method="POST" class="m-auto mt-5" style="max-width:800px;">
        @csrf
        <label class="input-group mb-3" for="email">
            <span class="input-group-text" id="inputGroup-sizing-default">Email: </span>
            <input type="email" class="form-control" id="email" name="email" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default" required
                placeholder="Ingresa tu correo electrónico">
        </label>
        <label class="input-group mb-3" for="reason">
            <span class="input-group-text" id="inputGroup-sizing-default">Motivo:</span>
            <input type="text" class="form-control" id="reason" name="reason" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default" required
                placeholder="Explícanos brevemente el motivo de tu contacto">
        </label>
        <label class="mb-3 d-block" for="message">
            <span for="message" class="form-label">Mensaje</span>
            <textarea class="form-control" id="message" name="message" rows="3" required
                placeholder="Escribe tu mensaje aquí"></textarea>
        </label>
        <button type="submit" class="btn btn-primary mt-3 d-block m-auto w-25">Enviar</button>
    </form>
@endsection