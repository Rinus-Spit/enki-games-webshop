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

    public function ajax(){
        $newProducts = Toplist::where("name","new")->get()[0];
        $payload = $newProducts->products;
        return view('ajaxresp', ["products"=>$payload]);
    }

    // Testfunctions below ,rewrite later 

    public function ajaxB(){
        $myinput = json_decode(file_get_contents("php://input"));
        // Add an increment function and return the total cost
        $myinputJSON = json_encode($myinput);
        
        return response($myinputJSON);
    }
}
