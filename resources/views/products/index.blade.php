@extends ('layouts.admin')

@section ('content')

<div class="card card-default"  style="margin-top: 55px; margin-bottom:55px">
    <div class="card-body">
        <table class="table table-hover">
        <h1>Producten</h1>
        @if(count($products) > 0)
        @foreach($products as $product)

        <div class="card p-3 mt-3 mb-3">
            <div class="row">
                <a href="{{ route('products.show', $product) }}"  style="text-decoration:none">

                <div class="col-md-4 col-sm-4">
                    <img src=" {{ $product->image}}" style="width:100%" >
                </a>
                </div>
                <div class="col-md-8 col-sm-8" style="margin-top: -25px">
                    <br>
                    <h4> {{ $product->name }} </h4>
                    <p> {{$product->excerpt }} </p>
                    <p>Prijs: € {{$product->price}},- </p>
                    <p>Voorraad: {{$product->stock}} </p>
                    <p>Toegevoegd: {{$product->created_at}} </p>
                   {{-- <p>Leeftijdscategorie: {{ $product->age_category_id }}</p> --}}

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
            <a href="{{ route('admin') }}" style="text-decoration: none">
                <i class="fas fa-arrow-left"></i>
                Terug naar admin</a>
        </div>
        <div class="text-right" style="margin-top:-22px">
            <a href="{{ route('products.create') }}" style="text-decoration: none">
                 Producten toevoegen <i class="fas fa-arrow-right"></i></a>
                </div>
    </div>
</div>

    </table>
    </div>

</div>
</div>
</div>



@endsection
