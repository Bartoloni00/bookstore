<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') :: Bookstore</title>
    <!-- Este css esta en la carpeta public -->
    <!-- utilizando la funcion de php url cargamos la ruta para que no importe como este hecho el sistema de rutas-->
    <!-- La funcion URL genera una ruta absoluta del archivo -->
    <?php //<link rel="stylesheet" href="<?=url('css/bootstrap.min.css')?>
    <link rel="stylesheet" href="<?=url('css/estilos.css')?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
      <div class="container-fluid bg-white">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse d-lg-flex collapse" id="navbarsExample11" style="">
          <a class="navbar-brand col-lg-3 me-0" href="#">BookStore</a>
          <ul class="navbar-nav col-lg-6 justify-content-lg-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url('/admin') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/admin/books') }}">Libros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/admin/blog') }}">Blogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}">Web</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main class="container py-3">
      @if (\Session::has('status.message'))
        <div class="alert alert-success">
          <p>{!! \Session::get('status.message') !!}</p>
        </div>
      @endif
    @yield('contenido')
    </main>
    <footer class="footer bg-primary">
      <p class="text-white text-wrap text-center">Jonathan Abraham Bartoloni | Ezequiel Thomas Arevalo</p>
    </footer>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>