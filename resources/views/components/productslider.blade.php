    
<div class="bestof">
    <h2>{{$slot}}</h2>
    <div class="slider">
        <div class="prev_arrow"></div>    
        <div class="slidecontent">
            <ul>
                @foreach($list as $figure)
                    <li><x-productsliderfigure :product="$figure"></x-productsliderfigure></li>
                @endforeach
            </ul>
        </div>
        <div class=next_arrow></div>
    </div>
</div>