<figure>
    <img src="{{$product->image}}" alt="Picture of {{$product->name}}">
    <figcaption>
        <h1>{{Str::limit($product->name, 20, '...') }}</h1>
        @if(str_contains($product->price, ','))
        <h4>${{$product->price}}</h4>
        @else
        <h4>${{$product->price}},00</h4>
    @endif
    </figcaption>
</figure>