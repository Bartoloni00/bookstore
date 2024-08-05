<div class="container mt-5">
  <div class="row">
      <div class="col-md-4 d-flex align-items-center">
          @if ($book->image)
              @if(substr($book->image->name, 0, 8) !== 'seedImage')
                  <img src="{{ asset('storage/' . $book->image->name)}}" class="img-fluid book-image" alt="{{$book->image->alt}}" loading="lazy">
              @else
                  <img src="{{ $book->image->name }}" class="img-fluid book-image" alt="{{$book->image->alt}}" loading="lazy">
              @endif
          @else
              <img src="{{ asset('storage/bookDefault.jpg')}}" class="img-fluid book-image" alt="{{$book->title}}" loading="lazy">
          @endif
      </div>
      <div class="col-md-8">
          <p class="custom-text">{{ $book->description }}</p>
          <p class="custom-text"><strong>Autor:</strong> {{ $book->author->name }} {{ $book->author->lastname }}</p>
          <p class="custom-text"><strong>Fecha de Lanzamiento:</strong> {{ $book->release_date }}</p>
          <p class="custom-text"><strong>Categoría:</strong> {{ $book->category->name }}</p>

          <div class="d-flex flex-row align-content-center">
            <span class="custom-btn me-2">Precio: ${{ $book->price }}</span>

            @if($buy)
                @auth
                    <form action="{{url('/book/buy/'. $book->id)}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-success bg-gradient">
                            <i class="fas fa-shopping-cart"></i> 
                            <span>Agregar al carrito</span>
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-success bg-gradient">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Agregar al carrito</span>
                    </a>
                @endauth
            @endif
          </div>
      </div>
  </div>
</div>