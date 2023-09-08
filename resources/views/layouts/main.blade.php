<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') :: Bookstore</title>
    <!-- Este css esta en la carpeta public -->
    <!-- utilizando la funcion de php url cargamos la ruta para que no importe como este hecho el sistema de rutas-->
    <!-- La funcion URL genera una ruta absoluta del archivo -->
    <link rel="stylesheet" href="<?=url('css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=url('css/estilos.css')?>">
</head>
<body>
<div id="app">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mi Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=url('/')?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=url('/quienes-somos');?>">Quiénes Somos</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link" href="<?=url('/books/listado');?>">Libros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=url('/contacto');?>">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=url('/admin/books');?>">Admin</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <main class="container py-3">
    @yield('contenido')
    </main>
    <footer class="footer bg-primary">
        <p>Abraham Bartoloni | Primera web en laravel</p>
    </footer>
</div>
</body>
</html>
