<figure>
    <img src="images/{{$list[2]}}" alt="Picture of {{$list[0]}}">
    <!-- @if(str_contains($list[1], ','))
        <h4>${{$list[1]}}</h4>
        @else
        <h4>${{$list[1]}},00</h4>
    @endif -->
    <figcaption>
        <h1>{{$list[0]}}</h1>
        @if(str_contains($list[1], ','))
        <h4>${{$list[1]}}</h4>
        @else
        <h4>${{$list[1]}},00</h4>
    @endif
    </figcaption>
</figure>