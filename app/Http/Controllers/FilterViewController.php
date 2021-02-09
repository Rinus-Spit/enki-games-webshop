<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Property;

class MyInputOption{
    public $name = "";
    function __construct($name){
        $this->name = $name;
    }
}

class PayloadClass
{
    public $inputClass = "Aantal spelers (min)";
    public $inputOptions = array();
    public function __construct(){
        $this->inputA =  new MyInputOption("2");
        $this->inputB =  new MyInputOption("3");
        $this->inputC =  new MyInputOption("5");
        $this->inputD =  new MyInputOption("6");
        $this->inputE =  new MyInputOption("8");

        array_push($this->inputOptions, $this->inputA);
        array_push($this->inputOptions, $this->inputB);
        array_push($this->inputOptions, $this->inputC);
        array_push($this->inputOptions, $this->inputD);
        array_push($this->inputOptions, $this->inputE);
    }
}

class FilterViewController extends Controller{


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
        $test = new PayloadClass();
        $testB = DB::table("Products")->paginate(2);

        return view('testview2', ["landingContent"=>$test, "test"=>$testB]);
    }
}