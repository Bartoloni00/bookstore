<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') :: Bookstore</title>
    <!-- Este css esta en la carpeta public -->
    <!-- utilizando la funcion de php url cargamos la ruta para que no importe como este hecho el sistema de rutas-->
    <!-- La funcion URL genera una ruta absoluta del archivo -->
    <link rel="stylesheet" href="<?=url('css/estilos.css')?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <script src="https://kit.fontawesome.com/d95904715c.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="app">
    <!-- Menú de navegación -->
    <nav class="navbar navbar-expand-lg" aria-label="Thirteenth navbar example fix-bgcolor">
      <div class="container-fluid fix-bgcolor">
        <!-- Boton Hamburguesa -->
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenedor de items -->
        <div class="navbar-collapse d-lg-flex collapse" id="navbarsExample11" >

          <!-- Nombre del sitio -->
          <a class="navbar-brand col-lg-3 me-0 text-white" href="{{route('home')}}">BookStore</a>

          <!-- Listado de navegación -->
          <ul class="navbar-nav col-lg-6 justify-content-lg-center">

            <!-- Link dashboard -->
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
            </li>

            <!-- Link volver al sitio -->
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}">Volver a la Web</a>
            </li>

          </ul>

          <!-- Boton de cerrar sesión -->
          <div class="d-lg-flex col-lg-3 justify-content-lg-end">
            <form action="<?=route('logout')?>" method="post" class="nav-item">
              @csrf
              <button type="submit" class="btn-custom">Cerrar sesión
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
              </button>
            </form>
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
    <footer class="footer">
        <p class="text-light text-wrap text-center">Jonathan Abraham Bartoloni | Ezequiel Thomas Arevalo</p>
    </footer>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>