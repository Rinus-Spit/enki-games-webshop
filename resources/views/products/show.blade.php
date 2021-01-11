@extends ('layouts.admin')

@section ('content')

<div class="card" id="card">
    <div class="card-header">
        <h3>{{ $product->name }}</h3>
    </div>
        <div class="card-body" id="card-body">
            @if ( $product->image )
            <div class="col-md-4 col-sm-4"></div>
            @endif
            <img src="{{ $product->image }}" alt="image" class="img-fluid">

            <br>
            <br>

            <div class="excerpt">
                <h4>{{ $product->excerpt }}</h4>
            </div>

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

            <form class="inline" method="get" id="edit" action="{{ route('products.edit',$product->id,false) }}">
                <button class="btn btn-secondary" type="submit">Edit  &nbsp;<i class="fas fa-edit"></i></button>
            </form>

            <br>

            <form class="inline" method="post" id="destroy" action="{{ route('products.destroy',$product->id,false) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit" id="destroy">Delete <i class="fas fa-trash-alt"></i></button>
            </form>

            <br>
            <br>

            <a href="{{ route('products.index') }}" id="link">
                <i class="fas fa-arrow-left"></i> Terug naar producten
            </a>
        </div>

        @endsection
