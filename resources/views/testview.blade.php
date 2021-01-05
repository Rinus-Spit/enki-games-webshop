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
    <div class="productbar"></div>
    <div class="featured">
        <div class="featured_window"></div>
        <div class="featured_options_a"></div>
        <div class="featured_options_b"></div>
        <div class="featured_options_c"></div>
    </div>
    <div class="bestof">
        <div id="slider_a" class="slider">
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
    <div class="bestof">
    <div id="slider_a" class="slider">
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
var scrollContainerB = document.querySelector("#slider_b .slidecontent");
var scrollposition;

function scrollLeft(myScrollContainer){
    scrollposition = myScrollContainer.scrollLeft;
    if(scrollposition === 0){
        return;
    }
    if(scrollposition % 40 === 0){
        myScrollContainer.scrollLeft -= 40
    }
    else{
        myScrollContainer.scrollLeft -= (scrollposition % 40)
    }
}
</script>
@endsection