<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Property;


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
        $popularProducts = DB::table('toplists')->where('name', 'popular')->get();
        $newProducts = DB::table('toplists')->where('name', 'new')->get();
        $properties = Property::get();

        return view('landing', ["popularProducts"=>$popularProducts, "newProducts"=>$newProducts, "properties"=>$properties]);
    }
}
