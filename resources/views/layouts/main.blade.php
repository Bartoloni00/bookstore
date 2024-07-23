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
  <link rel="icon" type="image/png" sizes="192x192" href="<?=url('favicon/android-icon-192x192.png')?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?=url('favicon/favicon-32x32.png')?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?=url('favicon/favicon-96x96.png')?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?=url('favicon/favicon-16x16.png')?>">
  <link rel="manifest" href="<?=url('favicon/manifest.json')?>">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="<?=url('css/estilos.css')?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

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
              <!-- Link Home -->
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
  
              <!-- Link Quiénes Somos -->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('about_us') }}">Quiénes Somos</a>
              </li>
  
              <!-- Link Tienda -->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('books') }}">Tienda</a>
              </li>
  
              <!-- Link Blog -->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('blogs') }}">Blog</a>
              </li>
  
              <!-- Link Contacto -->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
              </li>
  
              <!-- Links de administrador, usuario logueado -->
              @auth
                  @if(auth()->user()->rol_id == 1)
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('dashboard') }}">Admin</a>
                    </li>
                  @else
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('book.cart') }}">Carrito</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('purchase.MyPurchases') }}">Mis compras</a>
                    </li>
                  @endif
              @endauth

            <!-- Links de cerrar sesión, registrarse, iniciar sesión -->
              @auth
                <form action="<?=route('logout')?>" method="post" class="nav-item">
                  @csrf
                  <button type="submit" class="nav-link">
                    <span>Cerrar sesión</span>
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                  </button>
                </form>
              @else
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?=route('login')?>">
                      <span>Iniciar sesion</span>
                      <i class="fa-solid fa-arrow-right-to-bracket"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?=route('user.create.view')?>">
                      <span>Registrarse</span>
                      <i class="fa-solid fa-user-plus"></i>
                    </a>
                  </li>
              @endauth
            </ul>

          </div>
        </div>
      </div>
    </nav>
    
    <main>
      <!-- Contenedor de Alerta -->
      @if (\Session::has('status.message'))
        <div class="alert alert-{{\Session::get('status.type','success')}} alert-dismissible fade show d-flex flex-row align-items-center" role="alert">
            @if (\Session::get('status.type','success') === 'success')
              <i class="fa-solid fa-circle-check px-2" aria-label="Success:"></i> <!-- Muestra este ícono si el tipo es success -->
            @else
              <i class="fa-solid fa-circle-exclamation px-2" aria-label="Danger:"></i> <!-- Muestra este ícono si el tipo no es success -->
            @endif
              <p class="pt-3">{!! \Session::get('status.message') !!}</p>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @yield('contenido')
    </main>
    
    <footer class="mt-4 pt-4">
      <p class="custom-text text-center p-2 fix-color">Jonathan Abraham Bartoloni | Ezequiel Thomas Arevalo</p>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?=url('js/eye.js')?>"></script>
  @stack('js')
</body>
</html>