<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Toplist;


class LandingController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $properties = Property::get();
        $newProducts = Toplist::where("name","new")->get()[0];
        $popularProducts = Toplist::where("name","popular")->get()[0];

        return view('landing', ["properties"=>$properties, "popularProducts"=>$popularProducts, "newProducts"=>$newProducts]);
    }
}
