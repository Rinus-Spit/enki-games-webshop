<!-- /*header*/
/*navbar*/
/*body container*/
    /*product bar*/
    /*uitgelicht section*/
    /*best verkocht en nieuw*/
    /*product thema's */ -->


@extends('layouts.temp')

@section('content')
<div class="midcontent">
    <div class="productbar">
        <div class="bar_product">
            <div class="bar_product_title">
                <h3>Type 1</h3>
            </div>    
            <div class="drop_menu">
                <h4></h4>
                <a></a>
                <a></a>
            </div>
        </div>
        <div class="bar_product">
        <div class="bar_product_title">
                <h3>Type 2</h3>
            </div>    
            <div class="drop_menu">
                <h4></h4>
                <a></a>
                <a></a>
            </div>
        </div>
        <div class="bar_product"><h3>Type 3</h3></div>
        <div class="bar_product"><h3>Type 4</h3></div>
    </div>
    <div class="featured">
        <div class="featured_window"></div>
        <div class="featured_options_a"></div>
        <div class="featured_options_b"></div>
        <div class="featured_options_c"></div>
    </div>
    <div class="bestof">
        <h2>Best verkocht</h2>
        <div id="slider_a" class="slider">
            <div class="prev_arrow"></div>
            <div class="slidecontent">
                <ul>
                    <li>
                        <figure>
                            <img src="images/pandemic.jpg" alt="Girl in a jacket">
                            <figcaption>
                                <h1>Pandemic Original</h1>
                                <h4>$30,00</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <!-- include list of products -->
                    <!-- <li> 
                        <figure>
                            <img>
                            <figcaption></figcaption>
                        </figure> 
                    </li> -->
                </ul>
            </div>
            <div class=next_arrow></div>
        </div>
    </div>
    <div class="bestof">
    <h2>Nieuwe spellen</h2>
        <div id="slider_b" class="slider">
            <div class="prev_arrow"></div>
            <div class="slidecontent">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <!-- include list of products -->
                    <!-- <li> 
                        <figure>
                            <img>
                            <figcaption></figcaption>
                        </figure> 
                    </li> -->
                </ul>
            </div>
            <div class=next_arrow></div>
        </div>
    </div>
    <div class="searchpathlinks">

        <h1>Title</h1>
        <div class="linktab">
            <button id="button_a" type="button">category_a</button>
            <button id="button_b" type="button">category_b</button>
            <button id="button_c" type="button">category_c</button>
            <button id="button_d" type="button">category_d</button>
        </div><!-- contains buttons with a function to set the corresponding linkoptions to vis.
                                    Create a table with links. So you can create linkoptions divs coupled to a linktab button with corresponding id's and functionparameters. -->

        <div id="category_a" class="linkoptions nvis">
        <p>Dit is categoryA</p>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        </div> <!-- nvis: not visible, vis: visible. To create an interactive menu -->
        <div id="category_b" class="linkoptions vis"><p>Dit is categoryB</p></div>
        <div id="category_c" class="linkoptions nvis"><p>Dit is categoryC</p></div>
        <div id="category_d" class="linkoptions nvis"><p>Dit is categoryD</p></div>
    </div>
</div>



<script>

var CategoryArray = document.querySelectorAll(".linkoptions");
// automate the button part.
var buttonA = document.getElementById("button_a");
var buttonB = document.getElementById("button_b");
var buttonC = document.getElementById("button_c");
var buttonD = document.getElementById("button_d");

buttonA.addEventListener("click", function(){showCategories("category_a")});
buttonB.addEventListener("click", function(){showCategories("category_b")});
buttonC.addEventListener("click", function(){showCategories("category_c")});
buttonD.addEventListener("click", function(){showCategories("category_d")});

function showCategories(CategoryID){
    console.log("aangevraagd");
    for(i=0; i<CategoryArray.length; i++){
        CategoryArray[i].classList.replace("vis", "nvis");
    }

    document.getElementById(CategoryID).classList.replace("nvis", "vis");
}



var scrollContainerA = document.getElementById("slider_a");
var scrollContainerB = document.getElementById("slider_b");
var scrollContainerA = document.querySelector("#slider_a .slidecontent");
var nextArrowA = document.querySelector("#slider_a .next_arrow");
var prevArrowA = document.querySelector("#slider_a .prev_arrow");
var scrollContainerB = document.querySelector("#slider_b .slidecontent");
var nextArrowB = document.querySelector("#slider_b .next_arrow");
var prevArrowB = document.querySelector("#slider_b .prev_arrow");
var scrollposition;

prevArrowA.addEventListener("click", function(){scrollLeft(scrollContainerA)});
prevArrowB.addEventListener("click", function(){scrollLeft(scrollContainerB)});
nextArrowA.addEventListener("click", function(){scrollRight(scrollContainerA)});
nextArrowB.addEventListener("click", function(){scrollRight(scrollContainerB)});

function scrollLeft(myScrollContainer){
    scrollposition = myScrollContainer.scrollLeft;
    if(scrollposition === 0){
        return;
    }
    if(scrollposition % 200 === 0){
        myScrollContainer.scrollLeft -= 200
    }
    else{
        myScrollContainer.scrollLeft -= (scrollposition % 200)
    }
}

function scrollRight(myScrollContainer){ // need to fix end behaviour
    scrollposition = myScrollContainer.scrollLeft;
    if(scrollposition % 200 === 0){
        myScrollContainer.scrollLeft += 200
    }
    else{
        myScrollContainer.scrollLeft -= 200 - (scrollposition % 200)
    }
}
</script>
@endsection