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

@section('title',' Mis libros')

@section('contenido')
<section class="h-100 h-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">

            <div class="row">

              <div class="col-lg-7">
                <span class="mb-3"><a href="{{ route('books') }}" class="text-body"><i
                      class="fas fa-long-arrow-alt-left me-2"></i>Volver a la tienda</a></span>
                <hr>

                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <p class="mb-1">Carrito de compras</p>
                    <p class="mb-0">Tienes {{ $items }} libros en el carrito</p>
                  </div>
                </div>
                @error('amount')
                  <p class="text-danger" id="error-amount">
                    {{$message}}
                  </p>
                @enderror
                @foreach($user->books as $book)
                    <article class="card mb-3 mb-lg-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <div>
                                        @if ($book->image)
                                            @if(substr($book->image->name, 0, 8) !== 'https://')
                                                <img src="{{ asset('storage/' . $book->image->name)}}" alt="{{$book->image->alt}}" loading="lazy" class="card-img-top" style="width: 65px;">
                                            @else
                                                <img src="{{$book->image->name}}" alt="{{$book->image->alt}}" loading="lazy" class="card-img-top" style="width: 65px;">
                                            @endif
                                        @else
                                            <img src="{{ asset('storage/bookDefault.jpg')}}" alt="{{$book->title}}" loading="lazy" class="card-img-top" style="width: 65px;">
                                        @endif
                                    </div>
                                    <div class="ms-3">
                                        <h2><a href="{{ url('books',['id' => $book->id]) }}">{{ $book->title }}</a></h2>
                                        <form action="{{ route('book.update') }}" method="post" class="d-flex flex-row align-items-center">
                                          @csrf   
                                          <input type="hidden" name="book_id" value="{{ $book->id }}">
                                          <div class="form-group mb-3">
                                            <label for="amount">Cantidad:</label>
                                            <input 
                                              type="number" 
                                              name="amount" 
                                              id="amount" 
                                              value="{{ $book->pivot->amount }}"
                                              class="form-control" 
                                              style="width:50px;"
                                              @error('amount')
                                                  aria-describedby="error-amount"
                                              @enderror
                                              >
                                          </div>
                                          <button type="submit" class="btn btn-warning"><i class="bi bi-pencil"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center">
                                        
                                    <div style="width: 80px;">
                                        <span class="mb-0">$ {{ $book->price }}</span>
                                    </div>
                                    <form action="{{ route('book.delete',['id' => $book->id]) }}" method="post">
                                      @csrf   
                                      <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach

              </div>
              <div class="col-lg-5">

                <div class="card bg-primary text-white rounded-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h2 class="mb-0">Detalles de la compra</h2>
                    </div>

                    <p class="small mb-2">Tarjetas aceptadas</p>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-visa fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-amex fa-2x me-2"></i></a>
                    <hr class="my-4">

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Subtotal</p>
                      <p class="mb-2">$ {{ $totalPrice ?? 0}}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Envio</p>
                      <p class="mb-2">Envio gratis</p>
                    </div>

                    <div class="d-flex justify-content-between mb-4">
                      <p class="mb-2">Total (Sin impuestos)</p>
                      <p class="mb-2">$ {{ $totalPrice ?? 0}}</p>
                    </div>

                    @if(!empty($user->books))
                    <button type="button" class="btn btn-info btn-block btn-lg m-auto">
                        <div id="checkout"></div>
                    </button>
                    @endif

                  </div>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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