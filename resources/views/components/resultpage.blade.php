<div class="searchresultspace">
    {{$results}}
    @foreach($results->items() as $result)
        <x-resultblock :result="$result"></x-resultblock>
    @endforeach
</div>