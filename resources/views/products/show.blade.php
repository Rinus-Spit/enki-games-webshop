@extends ('layouts.admin')

@section ('content')

            <ul class="style1">
                <li class="first">
                    <h3>{{ $product->name }} 
                    </h3>
                    <div class="excerpt">
                        {{ $product->excerpt }} 
                    </div>
                    <!-- <div class="image">
                        <img src="{{ $product->image }}" alt="image" class="img-fluid">
                    </div> -->
                    <div class="description">
                        {{ $product->body }}
                    </div>
                    @if ( $product->image )
                    <div class="image">
                        <img src="{{ URL::to('/images/products/'.$product->image) }}" alt="image" class="img-fluid">
                    </div>
                    @endif
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
                </li>
            </ul>

@endsection