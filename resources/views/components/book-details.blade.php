<div class="row">
  
  <!--Imagen de portada del libro-->
  <div class="col-lg-5 col-md-12 col-sm-6">
    <div class="white-box text-center">
      @if ($book->image)
        @if(substr($book->image->name, 0, 8) !== 'https://')
          <img src="{{ asset('storage/' . $book->image->name)}}" alt="{{$book->image->alt}}" loading="lazy">
        @else
          <img src="{{$book->image->name}}" alt="{{$book->image->alt}}" loading="lazy">
        @endif
      @else
        <img src="{{ asset('storage/' .'bookDefault.jpg')}}" alt="{{$book->title}}" loading="lazy">
      @endif
    </div>
  </div>

  <!--Contenido del libro-->
  <div class="col-lg-7 col-md-12 col-sm-6">
    <!--Titulo del libro-->
    <h2 class="box-title mt-5">{{$book->title}}</h2>
    <!--Descripción del libro-->
    <p>{{$book->description}}</p>
    <!--Precio del libro-->
    <p class="mt-5"> ${{$book->price}}</p>

    <!--Agregar al carrito-->
    @if($buy)
      @auth
        <form action="{{url('/book/buy/'. $book->id)}}" method="post">
          @csrf
          <button type="submit" class="text-decoration-none btn-custom">Agregar al carrito</button>
        </form>
      @else
        <a href="{{ route('login') }}" class="text-decoration-none btn-custom">Agregar al carrito</a>
      @endauth
    @endif

    <!--Información del libro-->
    <h3 class="box-title mt-5">Información adicional</h3>
    <ul class="list-unstyled">
      <!--Author del libro-->
      <li>
        <p class="card-text">
          <b>Author:</b>
          <small class="text-body-secondary"> {{$book->author->name}} {{$book->author->lastname}}</small>
        </p>
      </li>
      <!--Fecha de lanzamiento del libro-->
      <li>
        <p class="card-text">
          <b>Fecha de lanzamiento:</b>
          <small class="text-body-secondary">{{$book->release_date}}</small>
        </p>
      </li>
      <!--Categoria del libro-->
      <li>
        <p class="card-text">
          <b>Category:</b>
          <small class="text-body-secondary"> {{$book->category->name}}</small>
        </p>
      </li>
    </ul>
  </div>