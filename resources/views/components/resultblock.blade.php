<div class="resultblock">
    <img src="{{$result->image}}">
    <div class="resultdescription">
        <h1>{{$result->name}}</h1>
        <h2>{{$result->price}} euro</h2>
        <p>{{$result->excerpt}}</p>
        <x-buybutton :productID="$result->id" :productName="$result->name"></x-buybutton>
    </div>
</div>