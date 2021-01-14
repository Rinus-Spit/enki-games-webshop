@foreach($list as $linkoption)
    <div class="linkoptions nvis">
        <p>{{$linkoption}}</p>
        {{$slot}}
    </div>
@endforeach
