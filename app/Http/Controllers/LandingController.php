<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Property;




class PayloadClass
{
    
    public $list = [["hello", "#link1"],["hello 2", "#link2"],["hello 3", "#link3"]];
    public $listTwo = [["Pandemic", "30", "pandemic.jpg"],["Pandemic", "30", "pandemic.jpg"],["Game", "55,10", "game_b.jpg"],["Haunted house", "22,99", "game_b.jpg"],["Pandemic", "30", "pandemic.jpg"],["Catan", "40", "game_c.jpg"],["Weird game", "10", "game_d.jpg"],["Title", "price", "game_b.jpg"],["Title", "price", "game_b.jpg"]];
    public $listThree =["Pandemic", "30", "pandemic.jpg"];
    public $listFour = ["Uitgever", "Genre", "Spelsoort", "Random"];
    public $listFive = [["Days of wonder","/images/background_dow.png"],["999 Games","/images/background_999.jpg"],["White goblin games","/images/background_wgg.jpg"],["wgg","/images/background_wgg.jpg"]];
    public $productArrayOne = array();
    public $propertyCategories = array();
    public $propertyNames = array();
    public function __construct($products, $properties){ 
        foreach($products as $product){
            array_push($this->productArrayOne, array($product->name, $product->price, $product->image));
        }
        foreach($properties as $key => $property){
            array_push($this->propertyNames, $property->name);
            array_push($this->propertyCategories, array());
            foreach($property->categories as $category){
                array_push($this->propertyCategories[$key], array($category->name, $category->image));
            }
        }
    }
    
}


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
        
        $productsInput = DB::table('products')->get();
        $propertiesInput = Property::get();
        $landingContent = new PayloadClass($productsInput, $propertiesInput);

        return view('landing', ["landingContent"=>$landingContent]);
    }
}
