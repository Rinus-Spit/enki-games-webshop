@foreach($list as $linkoption)
    <div class="linkoptions nvis">
        <p>{{$linkoption}}</p>
        @foreach($cards as $card)
            <x-catcard :catcard="$card"></x-catcard>
        @endforeach
    </div>
@endforeach
