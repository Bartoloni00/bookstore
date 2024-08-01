@extends('layouts.main')

@section('title', 'Pagina principal')

@section('contenido')

<!--Primera Sección-->
<section id="section-first">

    <div class="row w-75 mx-auto d-flex flex-col justify-content-center align-items-center py-5">
        <div class="col-md-6 text-left">
            <h2 class="custom-subtitle text-center py-5">¡Bienvenido a BookStore!</h2>
            <p class="custom-text">En nuestro rincón de lectura, los amantes de la literatura podrán explorar nuevos géneros, descubrir fascinantes libros y disfrutar de muchas otras sorpresas en conjunto a nuestras colecciones de las sagas más emocionantes y entretenidas.</p>
        </div>
        <div class="col-md-6">
            <img src="<?=url('img/books.jpg')?>" class="img-fluid text-center" alt="Imagen representativa de bookstore">
        </div>
    </div>

    <div class="first-wave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#F4B892" fill-opacity="1"
                d="M0,224L120,197.3C240,171,480,117,720,96C960,75,1200,85,1320,90.7L1440,96L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z">
            </path>
        </svg>
    </div>

</section>

<!--Tercera Sección-->
<section id="section-three">
    
    <h2 class="custom-subtitle">Características</h2>

    <div class="row p-4 py-2">
        <div class="col-md-6 col-sm-12 mb-3">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="col-2 d-flex justify-content-center align-items-center icon-container">
                        <i class="fa-solid fa-folder-open" style="color: #7B4A36;"></i>
                    </div>
                    <div class="col-10">
                        <h3 class="custom-subtitle-medium">Amplia cantidad de contenido</h3>
                        <p class="custom-text card-text">Explora una vasta colección de libros y blogs para todos los gustos.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="col-2 d-flex justify-content-center align-items-center icon-container">
                        <i class="fa-solid fa-clock" style="color: #7B4A36;"></i>
                    </div>
                    <div class="col-10">
                        <h3 class="custom-subtitle-medium">Soporte las 24hs</h3>
                        <p class="custom-text card-text">Nuestro equipo está disponible para ayudarte en cualquier momento.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-4 py-2">
        <div class="col-md-6 col-sm-12 mb-3">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="col-2 d-flex justify-content-center align-items-center icon-container">
                        <i class="fa-solid fa-truck-fast" style="color: #7B4A36;"></i>
                    </div>
                    <div class="col-10">
                        <h3 class="custom-subtitle-medium">Rápido</h3>
                        <p class="custom-text card-text">Disfruta de una experiencia de compra rápida y eficiente.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="col-2 d-flex justify-content-center align-items-center icon-container">
                        <i class="fa-solid fa-shield" style="color: #7B4A36;"></i>
                    </div>
                    <div class="col-10">
                        <h3 class="custom-subtitle-medium">Seguro</h3>
                        <p class="custom-text card-text">Compra con confianza en nuestra plataforma segura.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-4 py-2">
        <div class="col-md-6 col-sm-12 mb-3">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="col-2 d-flex justify-content-center align-items-center icon-container">
                        <i class="fa-solid fa-hand-holding-dollar" style="color: #7B4A36;"></i>
                    </div>
                    <div class="col-10">
                        <h3 class="custom-subtitle-medium">Descuentos y recompensas</h3>
                        <p class="custom-text card-text">Obtén descuentos y recompensas exclusivas como cliente
                            frecuente.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="col-2 d-flex justify-content-center align-items-center icon-container">
                        <i class="fa-solid fa-users" style="color: #7B4A36;"></i>
                    </div>
                    <div class="col-10">
                        <h3 class="custom-subtitle-medium">Pequeños creadores</h3>
                        <p class="custom-text card-text">Apoya a pequeños creadores con nuestro programa dedicado.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wave wave-header">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#F4B892" fill-opacity="1" d="M0,256L1440,128L1440,320L0,320Z"></path>
        </svg>
    </div>
</section>

<!--Cuarta Sección-->
<section id="section-four">
    <h2 class="custom-subtitle text-center">Colecciones</h2>

    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-4">
            <div class="card">
                <img class="card-img-top" src="<?=url('img/harry-potter.webp')?>" alt="Card image cap">
                <div class="card-body d-flex">
                    <div class="col-10">
                        <h3 class="custom-subtitle-medium">Harry Potter</h3>
                        <p class="custom-text card-text">Acompaña a Harry y sus amigos en una épica aventura mágica en
                            el mundo de Hogwarts, enfrentando desafíos y descubriendo los misterios más oscuros.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-4">
            <div class="card">
                <img class="card-img-top" src="<?=url('img/el-senor-de-los-anillos.webp')?>" alt="Card image cap">
                <div class="card-body d-flex">
                    <div class="col-10">
                        <h3 class="custom-subtitle-medium">El señor de los Anillos</h3>
                        <p class="custom-text card-text">Sumérgete en la Tierra Media y sigue la travesía de Frodo y la
                            Comunidad del Anillo en su misión de destruir el Anillo Único y salvar el mundo del mal.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-4">
            <div class="card">
                <img class="card-img-top" src="<?=url('img/juego-de-tronos.webp')?>" alt="Card image cap">
                <div class="card-body d-flex">
                    <div class="col-10">
                        <h3 class="custom-subtitle-medium">Juego de Tronos</h3>
                        <p class="custom-text card-text">Explora el brutal y complejo mundo de Westeros, donde familias
                            nobles luchan por el Trono de Hierro en una épica saga de poder, traición y guerra.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Quinta Sección-->
<section id="section-five">
    <div class="wave wave-footer">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#F4B892" fill-opacity="1" d="M0,256L1440,128L1440,0L0,0Z"></path>
        </svg>
    </div>

    <!-- Three columns of text below the carousel -->
    <div class="row mx-auto">
        <h2 class="custom-subtitle text-center mb-5">¿No te convencimos?</h2>

        <div class="row" id="reviews">
            <div class="col-12 col-lg-6 my-3">
                <div class="card text-center">
                    <div class="w-full p-4 text-center">
                        <img src="https://i.pinimg.com/736x/8d/16/90/8d16902ae35c1e982c2990ff85fa11fb.jpg" alt="foto de perfil de ezequiel arevalo" class="rounded-circle text-center" width="150" height="150">
                    </div>
                    <h3 class="custom-subtitle-medium">Ana Gómez</h3>
                    <p class="custom-text card-text">Bookstore tiene una increíble selección de libros y colecciones. La navegación es fácil y me encanta el blog con recomendaciones. ¡Definitivamente compraré de nuevo!</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 my-3">
                <div class="card text-center">
                    <div class="w-full p-4 text-center">
                        <img src="https://i.pinimg.com/564x/52/82/51/5282510a67750c2774f8da4c3f6180f3.jpg" alt="foto de perfil de abraham bartoloni" class="rounded-circle text-center" width="150" height="150">
                    </div>
                    <h3 class="custom-subtitle-medium">Carlos Martínez</h3>
                    <p class="custom-text card-text">Me encanta Bookstore, siempre encuentro los libros que busco. Las colecciones están bien organizadas y el blog ofrece artículos muy interesantes. ¡Recomendada al 100%!</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection