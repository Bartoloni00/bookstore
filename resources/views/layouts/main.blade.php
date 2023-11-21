<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') :: Bookstore</title>
    <!-- Este css esta en la carpeta public -->
    <!-- utilizando la funcion de php url cargamos la ruta para que no importe como este hecho el sistema de rutas-->
    <!-- La funcion URL genera una ruta absoluta del archivo -->
    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="<?=url('favicon/apple-icon-57x57.png')?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=url('favicon/apple-icon-60x60.png')?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=url('favicon/apple-icon-72x72.png')?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=url('favicon/apple-icon-76x76.png')?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=url('favicon/apple-icon-114x114.png')?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=url('favicon/apple-icon-120x120.png')?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=url('favicon/apple-icon-144x144.png')?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=url('favicon/apple-icon-152x152.png')?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=url('favicon/apple-icon-180x180.png')?>">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?=url('favicon/android-icon-192x192.png')?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=url('favicon/favicon-32x32.png')?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=url('favicon/favicon-96x96.png')?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=url('favicon/favicon-16x16.png')?>">
    <link rel="manifest" href="<?=url('favicon/manifest.json')?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="<?=url('css/estilos.css')?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

  <script src="https://kit.fontawesome.com/d95904715c.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
      <div class="container-fluid bg-white">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse d-lg-flex collapse" id="navbarsExample11">
          <a class="navbar-brand col-lg-3 me-0" href="{{route('home')}}">BookStore</a>
          <ul class="navbar-nav col-lg-6 justify-content-lg-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home <i class="fa-solid fa-house-chimney"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about_us') }}">Quiénes Somos <i class="fa-solid fa-users"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('books') }}">Tienda <i class="fa-solid fa-store"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('blogs') }}">Blog  <i class="fa-solid fa-align-justify"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contact') }}">Contacto <i class="fa-solid fa-envelope"></i></a>
            </li>
            @auth
            @if(auth()->user()->rol_id == 1)
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard') }}">Admin <i class="fa-solid fa-screwdriver-wrench"></i></a>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard') }}">Carrito <i class="fa-solid fa-cart-shopping"></i></a>
            </li>
            @endif
            @endauth
          </ul>
          <div class="d-lg-flex col-lg-3 justify-content-lg-end">
            @auth
            <form action="<?= route('logout') ?>" method="post" class="nav-item">
              @csrf
              <button type="submit" class="btn btn-primary">Cerrar sesión <i class="fa-solid fa-arrow-right-from-bracket"></i></button>
            </form>
            @else
            <li class="nav-item list-unstyled m-2">
              <a class="btn btn-outline-primary" aria-current="page" href="<?=route('login')?>">Iniciar sesion <i class="fa-solid fa-arrow-right-to-bracket"></i></a>
            </li>
            <li class="nav-item list-unstyled m-2">
              <a class="btn btn-primary" aria-current="page" href="<?=route('user.create.view')?>">Registrarse <i class="fa-solid fa-user-plus"></i></a>
            </li>
            @endauth
          </div>
        </div>
      </div>
    </nav>
    <main class="container py-3">
      @if (\Session::has('status.message'))
        <div class="alert alert-{{\Session::get('status.type','success')}}">
          <p>{!! \Session::get('status.message') !!}</p>
        </div>
      @endif
    @yield('contenido')
    </main>
    <footer class="footer bg-primary">
        <p class="text-light text-wrap text-center">Jonathan Abraham Bartoloni | Ezequiel Thomas Arevalo</p>
    </footer>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?=url('js/eye.js')?>"></script>
</body>
</html>
