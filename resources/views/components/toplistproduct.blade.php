<div class="bar_product">
    <div class="bar_product_title">
        <h3>{{$toplist->name}}</h3>
    </div>
    <div class="drop_menu">
        <h4>{{$toplist->name}}</h4>
        @foreach ($toplist->products as $product)
            <a href="/products/{{$product->id}}"> {{$product->name}} </a><br>
        @endforeach
    </div>
</div>