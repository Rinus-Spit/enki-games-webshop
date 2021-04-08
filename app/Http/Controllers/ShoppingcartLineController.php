<?php

namespace App\Http\Controllers;

use App\Models\ShoppingcartLine;
use App\Models\Shoppingcart;
use App\Models\Product;
use Auth;
use Illuminate\Http\Request;

class ShoppingcartLineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShoppingcartLine  $shoppingcartLine
     * @return \Illuminate\Http\Response
     */
    public function show(ShoppingcartLine $shoppingcartLine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShoppingcartLine  $shoppingcartLine
     * @return \Illuminate\Http\Response
     */
    public function edit(ShoppingcartLine $shoppingcartLine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShoppingcartLine  $shoppingcartLine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShoppingcartLine $shoppingcartLine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShoppingcartLine  $shoppingcartLine
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShoppingcartLine $shoppingcartLine)
    {
        //
    }

    /**
     * Create or update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShoppingcartLine  $shoppingcartLine
     * @return \Illuminate\Http\Response
     */
    public function bestel(Request $request, Product $product)
    {
        $shoppingcart = Shoppingcart::firstOrNew(array('user_id' => Auth::user()->id));
        $shoppingcart->save();

        $shoppingcartline = ShoppingcartLine::firstOrNew(
            array(
                'shoppingcart_id' => $shoppingcart->id,
                'user_id' => Auth::user()->id, 
                'product_id' => $product->id,
                'price' => $product->price
            )
        );
        $shoppingcartline->quantity = $shoppingcartline->quantity + 1;
        $shoppingcartline->save();
        return redirect(route('winkelwagen'));
    }

}
