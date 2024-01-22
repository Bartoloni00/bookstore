@extends('layouts.main')

@section('title','Quiénes somos')

@section('contenido')

<!-- Primera Sección -->
<section class="container my-5">
    <div class="p-5 text-center rounded-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
            <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z" />
        </svg>

        <!-- Titulo de la vista -->
        <h1 class="text-body-emphasis">¿Cómo surgió BookStore?</h1>

        <!-- Descripción de la vista -->
        <p class="col-lg-8 mx-auto fs-5 text-muted">
            Dos apasionados desarrolladores se unieron para llevar a cabo este emocionante emprendimiento. Utilizando PHP y el poderoso framework Laravel, dieron vida a una plataforma robusta y versátil. El diseño moderno y la interfaz de usuario receptiva se construyeron con Bootstrap, lo que garantiza una experiencia atractiva y accesible para los visitantes.
        </p>

        <!-- Contenedor de la sección -->
        <div class="d-inline-flex gap-2 mb-5">

            <!-- Boton de ver proyecto -->
            <a href="https://github.com/Bartoloni00/bookstore" target="_blank" class="d-inline-flex align-items-center text-decoration-none btn-custom btn-lg px-4 rounded-pill">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-github px-1" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                </svg>
                Ver Proyecto
            </a>
        </div>
    </div>
</section>

<!-- Segunda Sección -->
<section class="row m-auto">

    <!--Inicio de la primera persona-->
    <div class="col-lg-6 text-center">

        <!-- Imagen de Perfil -->
        <div class="redonditos">
            <img src="https://avatars.githubusercontent.com/u/116020038?v=4" alt="foto de perfil de abraham bartoloni" loading="lazy" >
        </div>

        <!-- Nombre del Perfil -->
        <h2 class="fw-normal mt-2 mb-3">Abraham Bartoloni</h2>

        <!-- Información del Perfil -->
        <p>Desarollador FullStack</p>

        <!-- Boton de github -->
        <p>
            <a class="btn btn-secondary" href="https://github.com/Bartoloni00" target="_blank">
                <i class="bi bi-github"></i> Visitar
            </a>
        </p>
    </div>
    <!--Fin de la primera persona-->

    <!--Inicio de la segunda persona-->
    <div class="col-lg-6 text-center">

        <!-- Imagen de Perfil -->
        <div class="redonditos">
            <img src="https://avatars.githubusercontent.com/u/111710833?s=400&u=7f1a1b29bfc2b8678dc5688a4311df4a6ebc4970&v=4" alt="foto de perfil de ezequiel arevalo" loading="lazy" >
        </div>

        <!-- Nombre del Perfil -->
        <h2 class="fw-normal mt-2 mb-3">Ezequiel Arevalo</h2>

        <!-- Información del Perfil -->
        <p>Desarollador FullStack</p>

        <!-- Boton de github -->
        <p>
            <a class="btn btn-secondary" href="https://github.com/Ezearevalodev" target="_blank">
                <i class="bi bi-github"></i> Visitar
            </a>
        </p>
    </div>
    <!--Fin de la segunda persona-->
</section>
@endsection
