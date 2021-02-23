@foreach($list as $propertyname)
    <div class="linkoptions nvis">
        @foreach($cards[$loop->index] as $card)
            <x-catcard :catcard="$card"></x-catcard>
        @endforeach
    </div>
@endforeach
