@extends ('layouts.admin')

@section ('content')

<div class="card card-default"  style="margin-top: 35px">
    {{-- <div class="card-header">Products</div> --}}
    <div class="card-body">
        <table class="table table-hover">
        {{-- <ul>
        @foreach ($products as $product)
                <li class="">
                    <h3>
                        <a href="{{ route('products.show', $product) }}"  style="text-decoration:none"> naam product: {{ $product->name }} </a>
                        <a href="{{ route('products.edit', $product) }}"  style="text-decoration:none">
                        <i class="fas fa-edit"></i>
                        </a>
                        <form class="inline" method="post" action="{{ route('products.destroy',$product->id,false) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn" type="submit"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </h3>
                    <div class="body">
                        <h3>
                            {{ $product->name }}
                            <a href="{{ route('products.show', $product) }}"  style="text-decoration:none"> naam product: {{ $product->name }} </a>
                        </h3>
                        </div>
                    @if ( $product->image )
                    <div class="image" style="max-width: 180px; height: auto">
                        <img src="{{ $product->image }}" alt="image" class="img-fluid">
                    </div>
                    @endif
                </li>
            @endforeach
        </ul> --}}


        <h1>Producten</h1>
        @if(count($products) > 0)
        @foreach($products as $product)

        <div class="card p-3 mt-3 mb-3">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img src=" {{ $product->image}}" style="width:100%" >
                </div>
                <div class="col-md-8 col-sm-8" style="margin-top: -25px">
                    {{-- <a href="{{ route('products.show', $product) }}"  style="text-decoration:none"> naam product: {{ $product->name }} --}}

                    {{-- <h3><a href="{{ $product->body}}"> {{ $product->title}}</a></h3> --}}
                    {{-- <small>Naam product: {{$product->name}} </small> --}}
                    <br>
                    <a href="{{ route('products.show', $product) }}"  style="text-decoration:none"> naam product: {{ $product->name }} </a>

                    <br>
                    <small>Toegevoegd op: {{$product->created_at}} </small>
                    <br>
                    <small>Price: € {{$product->price}},- </small>
                    <br>
                    <small>Voorraad: {{$product->stock}} </small>
                    <br>

                    <a href="{{ route('products.edit', $product) }}"  style="text-decoration:none; margin-top:35px">Edit: <i class="fas fa-edit" style="margin-left: 15px"></i></a>
                    <br>
                    <form class="inline" method="post" action="{{ route('products.destroy',$product->id,false) }}">
                    @csrf
                    @method('DELETE')
                     <button class="btn" type="submit" style="margin-left: -15px">Delete: <i class="fas fa-trash-alt"></i></button>
                    </form>
                </h3>
                </div>
            </div>
        </div>
    </a>
        @endforeach
        {{$products->links()}}
        @else
            <p>No produc found</p>
        @endif


@endsection
