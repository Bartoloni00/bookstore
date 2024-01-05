<div class="card m-auto mt-3 mb-4" style="max-width: 800px;">
  <div class="row g-0">
    <div class="col-md-4">
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
    <div class="col-md-8">
      <div class="card-body">
        <h2 class="card-title">{{$book->title}}</h2>
        <p class="card-text">{{$book->description}}</p>
        <p class="card-text"><b>Author:</b><small class="text-body-secondary"> {{$book->author->name}}  {{$book->author->lastname}}</small></p>
        <p class="card-text"><b>Release date:</b><small class="text-body-secondary"> {{$book->release_date}}</small></p>
        <p class="card-text"><b>Price:</b><small class="text-body-secondary"> ${{$book->price}}</small></p>
        <p class="card-text"><b>Category:</b><small class="text-body-secondary"> {{$book->category->name}}</small></p>
        @if($buy)
          @auth
            <form action="{{url('/book/buy/'. $book->id)}}" method="post">
              @csrf
              <button type="submit" class="btn btn-primary">Comprar</button>
            </form>

          @else
            <a href="{{ route('login') }}" class="btn btn-primary">Comprar</a>
          @endauth
        @endif
      </div>
    </div>
  </div>
</div>