<div class="searchresultspace">
    <h1>{{$slot}}</h1>

    {{$results}}
    @foreach($results->items() as $result)
        <x-resultblock :result="$result"></x-resultblock>
    @endforeach
</div>