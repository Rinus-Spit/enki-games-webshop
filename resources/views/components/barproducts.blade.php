<div class="bar_product">
    <div class="bar_product_title">
        <h3>{{$list->name}}</h3>
    </div>
    <div class="drop_menu">
        <h4>{{$list->name}}</h4>
        @foreach ($list->products as $product)
            <a href="/products/{{$product->id}}"> {{$product->name}} </a><br>
        @endforeach
    </div>
</div>