    
<div class="bestof">
    <h2>{{$slot}}</h2>
    <div class="slider">
        <div class="prev_arrow"></div>    
        <div class="slidecontent">
            <ul>
                @foreach($products as $product)
                    <li><x-productsliderfigure :product="$product"></x-sliderfigure></li>
                @endforeach
            </ul>
        </div>
        <div class=next_arrow></div>
    </div>
</div>