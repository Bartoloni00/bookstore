@extends('layouts.main')

@section('title','Contacto')

@section('contenido')
<h1 class="text-center mb-3">Contacto</h1>
<form action="#" method="get" class="m-auto mt-5" style="max-width:800px;">
    <div class="row g-3 mb-3">
      <div class="col">
        <input type="text" class="form-control" placeholder="First name" aria-label="First name" required>
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" required>
      </div>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Motivo</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="flexCheckDefault" required>
        <label class="form-check-label" for="flexCheckDefault">
            Acepto las <a href="#">Condiciones del servicio</a> y la <a href="#">Politica de privacidad</a> del sitio
        </label>
    </div>
    <button type="submit" class="btn btn-primary mt-3 d-block m-auto w-25">Enviar</button>
</form>
@endsection
