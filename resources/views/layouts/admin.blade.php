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

    <script src="https://kit.fontawesome.com/d95904715c.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="app">
    <!-- Menú de navegación -->
    <nav class="navbar navbar-expand-lg" id="custom-navbar">
      <div class="container-fluid">
        <!-- Nombre del sitio -->
        <h1 class="col-lg-3 custom-title">BookStore</h1>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <div class="navbar-text">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <!-- Link dashboard -->
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
              </li>

              <!-- Link volver al sitio -->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Volver a la Web</a>
              </li>
  
              <form action="<?=route('logout')?>" method="post" class="nav-item">
                  @csrf
                  <button type="submit" class="nav-link">
                    <span>Cerrar sesión</span>
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                  </button>
              </form>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <main>
    @if (\Session::has('status.message'))
        <div class="alert alert-{{\Session::get('status.type','success')}}">
          <p class="custom-text">{!! \Session::get('status.message') !!}</p>
        </div>
      @endif
    @yield('contenido')
    </main>

    <footer class="mt-4 pt-4">
      <p class="custom-text text-center p-2 fix-color">Jonathan Abraham Bartoloni | Ezequiel Thomas Arevalo</p>
    </footer>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>