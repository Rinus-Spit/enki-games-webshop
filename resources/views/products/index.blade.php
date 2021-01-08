@extends ('layouts.admin')

@section ('content')

        <ul>
        @foreach ($products as $product)
                <li class="">
                    <h3>
                        <a href="{{ route('products.show', $product) }}"> {{ $product->name }} </a>
                        <a href="{{ route('products.edit', $product) }}">
                        <i class="fas fa-edit"></i>
                        </a>
                        <form class="inline" method="post" action="{{ route('products.destroy',$product->id,false) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn" type="submit"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </h3>
                    <div class="body">
                        {{ $product->body }}
                    </div>
                    @if ( $product->image )
                    <div class="image">
                        <img src="{{ $product->image }}" alt="image" class="img-fluid">
                    </div>
                    @endif
                </li>
            @endforeach
        </ul>

@endsection