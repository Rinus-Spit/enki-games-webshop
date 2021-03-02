<div class="productbar">
    @foreach($properties as $property)
        <x-barproduct :categories="$property->categories">{{$property->name}}</x-barproduct>
    @endforeach
</div>