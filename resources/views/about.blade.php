@extends('layouts.main')

@section('title','Quiénes somos')

@section('contenido')

<!-- Primera Sección -->
<section class="mx-auto row container my-5">
    <div class="row mx-auto d-flex flex-col justify-content-center align-items-center py-5">
        <div class="col-md-12 col-lg-6 text-left">
            <h2 class="custom-subtitle">¿Cómo surgió BookStore?</h2>
            <p class="custom-text col-lg-12 my-5">
                Dos apasionados desarrolladores se unieron para llevar a cabo este emocionante emprendimiento. Utilizando PHP y el poderoso framework Laravel, dieron vida a una plataforma robusta y versátil. El diseño moderno y la interfaz de usuario receptiva se construyeron con Bootstrap, lo que garantiza una experiencia atractiva y accesible para los visitantes.
            </p>
            <a href="https://github.com/Bartoloni00/bookstore" target="_blank" class="custom-forms-submit py-2 px-5 mt-4 rounded text-decoration-none" id="about-us-buttom">
                <i class="fa-brands fa-github"></i>
                <span>Ver Proyecto</span>
            </a>
        </div>
        <div class="col-md-12 col-lg-6 text-center py-5" id="about-us-img">
            <img src="<?=url('img/test.png')?>" class="img-fluid" alt="Example Image">
        </div>
    </div>
</section>

<!-- Segunda Sección -->
<section class="row m-auto my-5" id="about-us">

    <!--Inicio de la primera persona-->
    <div class="col-lg-6 text-center my-3">

        <!-- Imagen de Perfil -->
        <div>
            <img src="https://avatars.githubusercontent.com/u/116020038?v=4" alt="foto de perfil de abraham bartoloni" class="rounded-circle" width="150" height="150">
        </div>

        <!-- Nombre del Perfil -->
        <h3 class="custom-subtitle-medium fw-normal mt-2 mb-3">Abraham Bartoloni</h3>

        <!-- Información del Perfil -->
        <p class="custom-text">Desarrollador FullStack</p>

        <!-- Boton de github -->
        <a class="btn btn-secondary" href="https://github.com/Bartoloni00" target="_blank">
            <i class="fa-brands fa-github"></i>
            <span>Visitar</span>
        </a>
    </div>
    <!--Fin de la primera persona-->

    <!--Inicio de la segunda persona-->
    <div class="col-lg-6 text-center my-3">

        <!-- Imagen de Perfil -->
        <div>
            <img src="https://avatars.githubusercontent.com/u/111710833?s=400&u=7f1a1b29bfc2b8678dc5688a4311df4a6ebc4970&v=4" alt="foto de perfil de ezequiel arevalo" class="rounded-circle" width="150" height="150">
        </div>

        <!-- Nombre del Perfil -->
        <h3 class="custom-subtitle-medium fw-normal mt-2 mb-3">Ezequiel Arevalo</h3>

        <!-- Información del Perfil -->
        <p class="custom-text">Desarrollador Front-end</p>

        <!-- Boton de github -->
        <a class="btn btn-secondary" href="https://github.com/Ezearevalodev" target="_blank">
            <i class="fa-brands fa-github"></i>
            <span>Visitar</span>
        </a>
    </div>
    <!--Fin de la segunda persona-->
</section>
@endsection
