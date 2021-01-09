@extends ('layouts.admin')

@section ('content')

<div class="card" style="margin-top: 55px">

    <div class="card-header">
        <h3>{{ $product->name }} </h3>
    </div>
    <div class="card-body">

                    @if ( $product->image )
                    <div class="col-md-4 col-sm-4" style="text-center">
                        <img src=" {{ $product->image}}" style="width:100%" >
                    </div>
                    @endif
                    <br><br>
                    <div class="excerpt">
                        {{ $product->excerpt }}
                    </div>
                    <!-- <div class="image">
                        <img src="{{ $product->image }}" alt="image" class="img-fluid">
                    </div> -->
                    <div class="description">
                        {{ $product->body }}
                    </div>

                    <div class="description">
                        Minimaal aantal spelers: {{ $product->min_players }}
                    </div>
                    <div class="description">
                        Maximaal aantal spelers: {{ $product->max_players }}
                    </div>
                    <div class="price">
                        Prijs: {!! '&euro;' !!}{{ number_format($product->price,2,",",".") }}
                    </div>
                    <div class="stock">
                        Voorraad: {{ $product->stock }} stuks
                    </div>
                    <br>
                    <form class="inline" method="get" action="{{ route('products.edit',$product->id,false) }}">
                        <button class="btn btn-secondary" type="submit">Edit <i class="fas fa-edit"></i></button>
                        </form>

                        <br>
                        <form class="inline" method="post" action="{{ route('products.destroy',$product->id,false) }}">
                        @csrf
                        @method('DELETE')
                         <button class="btn btn-danger" type="submit">Delete <i class="fas fa-trash-alt"></i></button>
                        </form>

                    <br>
                    <a href="{{ route('products.index') }}" style="text-decoration: none">
                        <i class="fas fa-arrow-left"></i> Terug naar producten
                    </a>
        </div>
@endsection
