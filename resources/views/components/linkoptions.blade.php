@foreach($list as $propertyname)
    <div class="linkoptions nvis">
        <p>{{$propertyname}}</p>
        @foreach($cards[$loop->index] as $card)
            <x-catcard :catcard="$card"></x-catcard>
        @endforeach
    </div>
@endforeach
