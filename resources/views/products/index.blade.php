@extends ('layouts.admin')

@section ('content')

<div class="card card-default"  style="margin-top: 35px; margin-bottom:55px">
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
                    <p> {{$product->excerpt }} </small>
                    <p>Prijs: € {{$product->price}},- </small>
                    <p>Voorraad: {{$product->stock}} </small>
                    <p>Toegevoegd: {{$product->created_at}} </small>

                </div>
            </div>
        </div>
    </a>
        @endforeach
        {{$products->links()}}
        @else
            <p>Geen producten gevonden</p>
        @endif
        <br>
        <div class="footer">
            <a href="{{ route('admin') }}">
                <i class="fas fa-arrow-left"></i>
                Terug naar admin</a>
        </div>
    </div>
</div>

    </table>
    </div>

</div>
</div>
</div>



@endsection
