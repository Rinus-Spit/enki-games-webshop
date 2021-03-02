<div class="bar_product">
    <div class="bar_product_title">
        <h3>{{$slot}}</h3>
    </div>
    <div class="fake_border"></div>
<div class="drop_menu" style="--custom-height:{{floor(count($categories)/2)*38+count($categories)%2*38+120}}px;">
        <h4>{{$slot}}</h4>
        @foreach ($categories as $category)
            <a href="/search/{{$category->name}}"> {{$category->name}} </a>
        @endforeach
    </div>
</div>

<!-- For this to work we need to add a category wildcard to the search route. -->