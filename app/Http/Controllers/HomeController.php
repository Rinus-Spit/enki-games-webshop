<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Age_category;
use App\Models\Property;
use App\Models\Category;
use App\Models\Toplist;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $properties = Property::get();
        $toplists = Toplist::get();
        $new_products = Product::latest()->take(5)->get();
        $bestselling_products = Product::take(5)->get();
        return view('home',['properties' => $properties, 'toplists' => $toplists, 'new_products' => $new_products, 'bestselling_products' => $bestselling_products]);
    }
    public function about()
    {
        return view('about');
    }

}
