<?php 
// dd($user);
?>
<div class="row">
    @if(!$user->books->isEmpty())
        @foreach($user->books as $book)
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    @if ($book->image)
                        @if(substr($book->image->name, 0, 8) !== 'https://')
                            <img src="{{ asset('storage/' . $book->image->name)}}" alt="{{$book->image->alt}}" loading="lazy" class="card-img-top">
                        @else
                            <img src="{{$book->image->name}}" alt="{{$book->image->alt}}" loading="lazy" class="card-img-top">
                        @endif
                    @else
                        <img src="{{ asset('storage/bookDefault.jpg')}}" alt="{{$book->title}}" loading="lazy" class="card-img-top">
                    @endif
                    <div class="card-body">
                        <h2 class="custom-subtitle">{{$book->title}}</h2>
                        <a href="{{ url('books',['id' => $book->id]) }}" class="btn btn-primary">Ver el libro</a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <h2 class="custom-subtitle text-center text-info">No posee libros en el carrito</h2>
    @endif
</div>
