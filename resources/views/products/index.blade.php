@extends ('layouts.admin')

@section ('content')

<div class="card card-default" id="create">
    <div class="card-body">
        <table class="table table-hover">
            <h1>Producten</h1>
            @if(count($products) > 0)
            @foreach($products as $product)
            <div class="card p-3 mt-3 mb-3">
                <div class="row">
                    <a href="{{ route('products.show', $product) }}" id="link">
                        <div class="col-md-4 col-sm-4">
                        <img src=" {{ $product->image}}" id="image">
                    </a>
                </div>

                <div class="col-md-8 col-sm-8" id="col">

                    <br>

                    <h4> {{ $product->name }} </h4>
                    <p> {{$product->excerpt }} </p>
                    <p>Prijs: € {{$product->price}},- </p>
                    <p>Voorraad: {{$product->stock}} </p>
                    <p>Toegevoegd: {{$product->created_at}} </p>

                    <form class="inline" method="get" action="{{ route('products.edit',$product->id,false) }}">
                        <button class="btn btn-secondary" type="submit">Edit  &nbsp;<i class="fas fa-edit"></i></button>
                    </form>

                    <form class="inline" method="post" id="destroy2" action="{{ route('products.destroy',$product->id,false) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit" id="destroy">Delete <i class="fas fa-trash-alt"></i></button>
                    </form>


                </div>
            </div>
        </div>
    </a>
    @endforeach
    {{$products->links()}}
    @else

    <br>
    <br>

    <div class="text-center">
        <p>Geen producten gevonden.</p>
    </div>
    @endif

    <br>

    <div class="footer">
        <a href="{{ route('admin') }}" id="link">
            <i class="fas fa-arrow-left"></i>
            Terug naar admin</a>
        </div>

        <div class="text-right" id="text">
            <a href="{{ route('products.create') }}" id="link">
                 Producten toevoegen <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </table>
</div>


@endsection
