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


class Filteroptions{

    public function __construct($attribute, $value){
        $this->searchAttribute = $attribute;
        $this->searchValue = $value;
        $this->searchOperator = "equals";
    }

}

class Filters{
    public $searchoptions = array();

    public function __construct(){
        
    }

    public function addOption($attribute, $value){
        $newOption = new Filteroptions($attribute, $value);
        array_push($this->searchoptions, $newOption);
    }

    public function getWhere(){
        $mysearchoptions = $this->searchoptions;
        $tempArray = array();
        foreach ($mysearchoptions as $searchoption){
            array_push($tempArray, array($searchoption->searchAttribute, "=", $searchoption->searchValue));
        }
        return $tempArray;
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
        $myFilters = new Filters();
        $myFilters->addOption("price", "21");
        $test = new PayloadClass();
        $testB = DB::table("Products")->paginate(2);

        return view('testview2', ["landingContent"=>$test, "test"=>$testB]);
    }

    public function search($inputVariables){
    }
}