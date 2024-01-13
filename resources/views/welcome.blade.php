@extends('layouts.main')

@section('title','Pagina principal')

@section('contenido')

<!--Primera Sección-->
<section class="p-5 text-center rounded-3" id="section-Welcome">

    <!-- Nombre del sitio -->
    <h1 class="text-body-emphasis py-3">BookStore</h1>

    <!-- Descripción del sitio -->
    <p class="col-lg-8 mx-auto fs-5 text-muted">
        En nuestro rincón de lectura, los amantes de la literatura podrán explorar nuevos géneros, descubrir fascinantes libros y disfrutar de muchas otras sorpresas literarias.
    </p>

    <!-- Links de navegación -->
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center w-75 mx-auto">
        <a href="{{ route('books') }}" class="btn-custom w-100 fw-bol text-decoration-none">Libros</a>
        <a href="{{ route('blogs') }}" class="btn-custom w-100 fw-bol text-decoration-none">Blogs</a>
    </div>
</section>

<!--Segunda Sección-->
<section class="w-100 mx-auto my-5">
    <div class="row featurette mb-5">
        <div class="col-md-7">

            <!-- Titulo de la sección -->
            <h2 class="featurette-heading fw-normal lh-1">¡Contamos con una Gran catalogo de Libros!</h2>

            <!-- descripción de la sección -->
            <p class="lead">
                Explora un mundo de conocimiento, aventuras y emociones. En nuestra librería,
                te <strong> ofrecemos una vasta selección de libros que abarcan una amplia variedad de géneros
                    y temas</strong>. Ya seas un apasionado de la ciencia, un amante de la ficción,
                un buscador de misterios o un devorador de clásicos,
                encontrarás una obra que satisfaga tu sed de lectura. <em>Sumérgete en historias cautivadoras,
                    aprende de los expertos y descubre mundos inexplorados a través de las
                    páginas de nuestros libros.</em> ¡La aventura comienza aquí!
            </p>
        </div>

        <!-- Imagen de libros -->
        <div class="col-md-5 sect-2 text-center">
            <img src="<?=url('img/libros.webp')?>" alt="libros apilados" loading="lazy" class="img-fluid" />
        </div>
    </div>

    <div class="row featurette">
        <div class="col-md-7 order-md-2">

            <!-- Titulo de la sección -->
            <h2 class="featurette-heading fw-normal lh-1">¡Contamos con una gran cantidad de temas en nuestro blog!</h2>

            <!-- descripción de la sección -->
            <p class="lead">
                Descubre un mundo de conocimiento y reflexión en nuestro blog. Exploramos una amplia gama de temas,
                desde la literatura y la ciencia hasta consejos de escritura y reseñas de libros.
                <strong>Nuestros apasionados escritores comparten sus ideas y perspectivas,
                    brindándote una fuente constante de inspiración y entretenimiento.</strong> Sumérgete en nuestras entradas,
                participa en las conversaciones y encuentra tu próxima fuente de información y diversión.
                ¡La exploración comienza aquí!
            </p>
        </div>

        <!-- Imagen de hombre araña -->
        <div class="col-md-5 sect-2 text-center order-md-1">
            <img src="<?=url('img/blogs.webp')?>" alt="el tipico meme de los hombres que arañan señalandose entre si" loading="lazy" class="img-fluid" />
        </div>
    </div>
</section>

<!--Tercera Sección-->
<section class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10 col-xl-7">
                <div class="text-center">

                    <!-- Frase de la sección -->
                    <h2 class="fs-4 mb-4 fst-italic">"Los libros son un refugio, un paraiso en medio del caos"</h2>

                    <!-- Author de la frase -->
                    <p class="d-flex align-items-center justify-content-center fw-bold">
                        Autor anónimo
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Cuarta Sección-->
<section class="rounded-3 p-4 p-sm-5 mt-5" id="section-Welcome">
    <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
        <div class="mb-4 mb-xl-0">

            <!-- Frase de la sección -->
            <h2 class="fs-3 fw-bold">Nuevos libros, nuevos blogs.</h2>

            <!-- texto de la sección -->
            <p>Suscríbase a nuestro boletín para recibir las últimas actualizaciones.</p>
        </div>
        <div class="ms-xl-4">

            <!-- Email del usuario -->
            <div class="input-group mb-2">
                <input class="custom-input w-50" type="text" placeholder="Correo electronico..." aria-label="Correo electronico..." aria-describedby="button-newsletter" />
                <button class="btn-custom" id="button-newsletter" type="button">Subscribirse</button>
            </div>

            <!-- texto de la sección -->
            <p class="small">Nos preocupamos por la privacidad y nunca compartiremos sus datos.</p>
        </div>
    </div>
</section>
@endsection