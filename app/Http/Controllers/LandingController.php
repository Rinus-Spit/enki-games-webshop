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
    public function __construct($products){ foreach($products as $product){
        array_push($this->productArrayOne, array($product->name, $product->price, $product->image));
    }}

/* actions: 

    - add a request to get all products
    - the products should have a for each option
        >> 
            $users = DB::table('users')->get();

            foreach ($users as $user) {
                echo $user->name;
            }
        <<   
    - the products should have the standard options:
        + Price
        + Excerpt
        + Image location (should only be edditable by uploading an image. Just as a backend reminder)
        + Name
    - the properties should have the following options:
        + Categories
        + Name
    - the categories should have the following options:
        + property(id?)
        + Name
        + Image location
    
*/

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
        $landingContent = new PayloadClass($productsInput);
        $testB = json_encode(Property::get()[1]->categories[0]);
        $properties = Property::get();
        $propertyCategories = array();
        $propertyNames = array();
        foreach($properties as $property){
            array_push($propertyNames, $property->name);
            foreach($property->categories as $category){
                array_push($propertyCategories, array($category->name, $category->image));
            }
        }
        $test = $landingContent->productArrayOne;
        return view('testview', ["landingContent"=>$landingContent, "test"=>$test, "testB"=>json_encode($propertyCategories)]);
    }
}

// [properties]
// foreach(properties as property)
// property (search database for category as part of property)