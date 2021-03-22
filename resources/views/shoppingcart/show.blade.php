@extends ('layouts.admin')

@section ('content')

<div class="card" id="card">
    <div class="card-header">
        <h3>Winkelmand</h3>
    </div>
    <div class="card-body" id="card-body">
    <table>
    <tr>
        <th>Product</th>
        <th>Aantal</th>
        <th>Prijs</th>
        <th>BTW</th>
    </tr>

        @foreach($shoppingcart->shoppingcartlines as $shoppingcartline)
        <tr>
            <td>
                {{ $shoppingcartline->product->name }}
            </td>
            <td>
                {{ $shoppingcartline->quantity }}
            </td>
            <td>
                {{ $shoppingcartline->price }}
            </td>
            <td>
                {{ $shoppingcartline->tax_amount }}
            </td>
        </tr>
        @endforeach
    </table>

        <a href="{{ route('home') }}" id="link">
            <i class="fas fa-arrow-left"></i> Terug naar home
        </a>
    </div>

@endsection
