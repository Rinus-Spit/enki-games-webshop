@foreach($properties as $property)
    <div class="linkoptions nvis">
        @foreach($property->categories as $card)
            <x-catcard :catcard="$card"></x-catcard>
        @endforeach
    </div>
@endforeach
