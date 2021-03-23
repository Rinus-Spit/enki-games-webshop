<div class="shoppingcartitem">
    <img src="{{$cartitem->image}}">
    <div class="productinfo">
        <h3>{{$cartitem->name}}<h3>
        <button>Delete item<button>
    </div>
    <h2>$ {{$cartitem->price}}</h2>
        <x-productcounter></x-productcounter>
    <h2>$ {{$cartitem->price * $cartitem->quantity}}<h2>
</div>