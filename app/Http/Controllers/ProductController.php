<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Age_category;
use App\Models\Property;
use App\Models\Category;
use App\Models\Toplist;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(8);
        //dd($products);

        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $age_categories = Age_category::all();
        $properties = Property::all();
        $categories = Category::all();
        $toplists = Toplist::all();
        return view('products.create',['age_categories' => $age_categories,'categories' => $categories,'properties' => $properties,'toplists' => $toplists]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create($this->validateProduct());
        $product->categories()->sync((array)$request->input('category'));

        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $age_categories = Age_category::all();
        $properties = Property::all();
        $toplists = Toplist::all();
        //$categories = Category::all();
        return view('products.edit', ['product' => $product, 'age_categories' => $age_categories, 'properties' => $properties, 'toplists' => $toplists]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $update_array = $this->validateProduct();
        $product->categories()->sync((array)$request->input('category'));
        $toplist_order = (array) $request->input('toplist_order');
        $toplist_id = (array) $request->input('toplist_id');
        $toplist = array();
        foreach ($toplist_id as $key => $value) {
            $toplist[$key] = array('order' => $toplist_order[$key]);
        }
        //print_r($toplist);
        //dd($request);
        $product->toplists()->sync($toplist);
        $product->update($update_array);

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete($product);

        return redirect(route('products.index'));
    }

    protected function validateProduct()
    {
        return request()->validate([
            'name' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'price' => 'numeric|required',
            'stock' => 'numeric|required',
            'image' => 'string',
            'min_players' => 'numeric|required',
            'max_players' => 'numeric|required',
            'age_category_id' => ''
        ]);
    }

}
