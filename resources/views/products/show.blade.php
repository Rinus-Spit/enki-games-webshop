@extends ('layouts.admin')

@section ('content')

<div class="card" style="margin-top: 55px; margin-bottom: 55px">

    <div class="card-header">
        <h3>{{ $product->name }} </h3>
             </div>
                 <div class="card-body" style="overflow: hidden">

                    @if ( $product->image )
                    <div class="col-md-4 col-sm-4" style="text-center"></div>
                    @endif

                    <img src="{{ $product->image }}" alt="image" class="img-fluid">

                    <br><br>

                    <div class="excerpt"><h4>
                        {{ $product->excerpt }}
                    </h4></div>

                    <div class="description">{{ $product->body }}</div>

                    <div class="description">
                        Min. aantal spelers: {{ $product->min_players }}
                    </div>

                    <div class="description">
                        Max. aantal spelers: {{ $product->max_players }}
                    </div>

                    <div class="price">
                        Prijs: {!! '&euro;&nbsp;'  !!}{{ number_format($product->price,2,",",".") }}
                    </div>
                    <div class="stock">
                        Voorraad: {{ $product->stock }} stuks
                    </div>
                    <br>
                    <form class="inline" method="get" action="{{ route('products.edit',$product->id,false) }}"
                        style="margin-bottom: -60px">
                        <button class="btn btn-secondary" type="submit">Edit  &nbsp;<i class="fas fa-edit"></i></button>
                        </form>

                        <br>

                        <form class="inline" method="post" action="{{ route('products.destroy',$product->id,false) }}"
                            style="margin-left: 85%">
                        @csrf
                        @method('DELETE')
                         <button class="btn btn-danger" type="submit" style="min-width:100px">Delete <i class="fas fa-trash-alt"></i></button>
                        </form>

                    <br><br>
                    <a href="{{ route('products.index') }}" style="text-decoration: none">
                        <i class="fas fa-arrow-left"></i> Terug naar producten
                    </a>
        </div>
@endsection
