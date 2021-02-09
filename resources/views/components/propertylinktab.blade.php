<div class="linktab">
    @foreach($property->categories as $categorie)
    <button class="nact" type="button">{{$categorie->name}}</button>
    @endforeach
</div>