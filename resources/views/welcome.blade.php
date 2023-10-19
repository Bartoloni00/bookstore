@extends('layouts.main')

@section('title','Pagina principal')

@section('contenido')
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">BookStore</h1>
        <p class="lead text-body-secondary">En nuestro rincón de lectura, los amantes de la literatura podrán explorar nuevos géneros, descubrir fascinantes libros y disfrutar de muchas otras sorpresas literarias.</p>
        <p>
          <a href="{{ route('books') }}" class="btn btn-primary my-2">Libros</a>
          <a href="{{ route('blogs') }}" class="btn btn-secondary my-2">Blogs</a>
        </p>
      </div>
    </div>
  </section>
    <!--Fin de la sección de personas-->

    <section>
        <div class="row featurette mb-5">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">¡Contamos con una Gran catalogo de Libros!</h2>
                <p class="lead">Explora un mundo de conocimiento, aventuras y emociones. En nuestra librería, te ofrecemos una vasta selección de libros que abarcan una amplia variedad de géneros y temas. Ya seas un apasionado de la ciencia, un amante de la ficción, un buscador de misterios o un devorador de clásicos, encontrarás una obra que satisfaga tu sed de lectura. Sumérgete en historias cautivadoras, aprende de los expertos y descubre mundos inexplorados a través de las páginas de nuestros libros. ¡La aventura comienza aquí!</p>
            </div>
            <div class="col-md-5 sect-2">
                <img src="<?=url('img/libros.webp')?>" alt="" loading="lazy" class="img-fluid" />
            </div>
        </div>

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">¡Contamos con una gran cantidad de temas en nuestro blog!</h2>
                <p class="lead">Descubre un mundo de conocimiento y reflexión en nuestro blog. Exploramos una amplia gama de temas, desde la literatura y la ciencia hasta consejos de escritura y reseñas de libros. Nuestros apasionados escritores comparten sus ideas y perspectivas, brindándote una fuente constante de inspiración y entretenimiento. Sumérgete en nuestras entradas, participa en las conversaciones y encuentra tu próxima fuente de información y diversión. ¡La exploración comienza aquí!</p>
            </div>
            <div class="col-md-5 sect-2 order-md-1">
                <img src="<?=url('img/blogs.webp')?>" alt="" loading="lazy" class="img-fluid" />
            </div>
        </div>
    </section>

    <section>
        <div class="container my-5">
            <div class="p-5 text-center bg-body-tertiary rounded-3">
                <h3 class="text-body-emphasis">¡Gracias por Visitarnos!</h3>
            </div>
        </div>
    </section>
@endsection