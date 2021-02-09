    <div class="linkoptions nvis">
        <p>{{$property->name}}</p>
        @foreach($property->categories as $categorie)
            <x-categorycard :category="$categorie"></x-catcard>
        @endforeach
    </div>
