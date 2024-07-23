<?php
// $subTotal = 0;
$items = 0;
if (!empty($user->books)) {
  foreach ($user->books as $book) {
    $items += $book->pivot->amount;
    // if ($book->pivot->amout == 1) {
    //     $subTotal += $book->price;
    // } else {
    //     $subTotal += $book->price * $book->pivot->amount;
    // }
  }
}

// $envio = $subTotal > 100 ? 'Envio gratis': $subTotal * 0.20;
// $total = $subTotal > 100 ? $subTotal : $subTotal * 1.20;

?>

@extends('layouts.main')

@section('title', ' Mis libros')

@section('contenido')
<div class="container">
  <div class="row p-5 mt-5">
    <div class="col-xl-8 col-md-8">

      <!-- Boton de volver -->
      <div class="d-flex justify-content-between">
        <a class="fix-color-black" href="{{ route('books') }}">
          <i class="fa fa-solid fa-arrow-left"></i>
          <span>Volver a la tienda</span>
        </a>
        <p class="custom-text">Tienes <strong>{{ $items }} libros</strong> en el carrito</p>
      </div>
      @error('amount')
        <p class="custom-text text-danger" id="error-amount">
          {{$message}}
        </p>
      @enderror

    <div class="row mb-4">
      @foreach($user->books as $book)
          <div class="col-12 col-md-4 bg-warning mb-3">
            @if ($book->image)
                @if(substr($book->image->name, 0, 8) !== 'https://')
                    <img src="{{ asset('storage/' . $book->image->name)}}" alt="{{$book->image->alt}}" loading="lazy" class="img-fluid">
                @else
                    <img src="{{$book->image->name}}" alt="{{$book->image->alt}}" loading="lazy" class="img-fluid">
                @endif
            @else
                <img src="{{ asset('storage/bookDefault.jpg')}}" alt="{{$book->title}}" loading="lazy" class="img-fluid">
            @endif
          </div>

          <div class="col-12 col-md-8 p-3 text-start">
            <h3 class="custom-subtitle-medium">
              <a href="{{ url('books',['id' => $book->id]) }}" class="fix-color-black">
                {{ $book->title }}
              </a>
            </h3>

            <span class="d-block">Author: {{ $book->author->name }} {{ $book->author->lastname}}</span>
            <span class="d-block">Precio Unitario: ${{ $book->price }}</span>

            <div class="row mt-3">
              <!-- Form Cantidad -->
              <form action="{{ route('book.update') }}" method="post" class="d-flex align-items-center col-12 col-lg-6 mb-2 mb-lg-0">
                @csrf   
                <input type="hidden" name="book_id" value="{{ $book->id }}">
                <div class="form-group d-flex align-items-center mb-0 me-3">
                  <label for="amount" class="custom-forms me-2 mb-0">Cantidad:</label>
                  <input 
                    type="number" 
                    name="amount" 
                    id="amount" 
                    value="{{ $book->pivot->amount }}"
                    class="form-control me-2" 
                    @error('amount')
                        aria-describedby="error-amount"
                    @enderror
                  >
                </div>

                <!-- Button Actualizar Cantidad -->
                <button type="submit" class="btn btn-warning me-2">
                  <i class="fa-solid fa-arrows-rotate"></i>
                </button>
              </form>

              <!-- Button Remove -->
              <form action="{{ route('book.delete',['id' => $book->id]) }}" method="post" class="col-12 col-lg-6">
                @csrf   
                <button type="submit" class="btn btn-danger">
                  <i class="fa-solid fa-trash"></i>
                </button>
              </form>
            </div>
          </div>
          <hr>
          @endforeach
      </div>
    </div>
    
    <!-- Sidebar-->
    <div class="col-xl-4 col-md-4">

      <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="custom-subtitle-medium mb-0">Detalles de la compra</h3>
      </div>

      <div class="d-flex justify-content-between">
        <p class="custom-text mb-2">Subtotal</p>
        <p class="custom-text mb-2">$ {{ $totalPrice ?? 0}}</p>
      </div>

      <div class="d-flex justify-content-between">
        <p class="custom-text mb-2">Envio</p>
        <p class="custom-text mb-2">Envio gratis</p>
      </div>

      <div class="d-flex justify-content-between mb-4">
        <p class="custom-text mb-2">Total (Sin impuestos)</p>
        <p class="custom-text mb-2">$ {{ $totalPrice ?? 0}}</p>
      </div>

      <hr>

      @if(!empty($user->books))
      <button type="button" class="btn btn-block btn-lg m-auto">
          <div id="checkout"></div>
      </button>
      @endif

    </div>
  </div>
</div>
@endsection

<!-- pusheamos los scrips de js al stack que imprimimos al final del layout -->
@push('js')
  <script src="https://sdk.mercadopago.com/js/v2"></script>
  <script>
    const mp = new MercadoPago('<?= $mpPublicKey ?? null ?>'); //aca estoy utilizando blade para incluir la clave publica
    const bricksBuilder = mp.bricks();// maneja de UI de mercado pago
    mp.bricks().create("wallet", "checkout", {
      initialization: {
          preferenceId: "<?= $preference->id ?? null ?>",
      },
    customization: {
    texts: {
      valueProp: 'smart_option',
    },
    }});
  </script>
@endpush
<?php
/*
Los null en el script de arriba que estan junto al operador nullish coalescing (??)
al lado de $mpPublicKey y $preference->id es para no tener problemas cuando el carrito esta vacio
 */
?>