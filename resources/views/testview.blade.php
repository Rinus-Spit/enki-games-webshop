<!-- /*header*/
/*navbar*/
/*body container*/
    /*product bar*/
    /*uitgelicht section*/
    /*best verkocht en nieuw*/
    /*product thema's */ -->
@php
    $list = [["hello", "#link1"],["hello 2", "#link2"],["hello 3", "#link3"]];
    $listTwo = [["Game", "55,10", "game_b.jpg"],["Haunted house", "22,99", "game_b.jpg"],["Pandemic", "30", "pandemic.jpg"],["Catan", "40", "game_c.jpg"],["Weird game", "10", "game_d.jpg"],["Title", "price", "game_b.jpg"],["Title", "price", "game_b.jpg"]];
    $listThree =["Pandemic", "30", "pandemic.jpg"];
    $slider = ["slider_a","slider_b","slider_c","slider_d"];
@endphp

@extends('layouts.temp')

@section('content')
<div class="midcontent">
    <div class="productbar">
        <x-barproduct :list="$list"> Test 1 </x-barproduct>
        <x-barproduct :list="$list"> Test 2 </x-barproduct>
        <x-barproduct :list="$list"> Test 3 </x-barproduct>
        <x-barproduct :list="$list"> Test 4 </x-barproduct>
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
                <li><x-sliderfigure :list="$listThree"></x-sliderfigure></li>
                    <li>
                        <figure>
                            <img src="images/pandemic.jpg" alt="Girl in a jacket">
                            <figcaption>
                                <h1>Pandemic Original</h1>
                                <h4>$30,00</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                    <figure>
                            <img src="images/game_b.jpg" alt="Girl in a jacket">
                            <figcaption>
                                <h1>Betrayal of</h1>
                                <h4>$30,00</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                    <figure>
                            <img src="images/game_c.jpg" alt="Girl in a jacket">
                            <figcaption>
                                <h1>A game</h1>
                                <h4>$20,00</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                    <figure>
                            <img src="images/game_d.jpg" alt="Girl in a jacket">
                            <figcaption>
                                <h1>Nog een game</h1>
                                <h4>$10,00</h4>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                    <figure>
                            <img src="images/pandemic.jpg" alt="Girl in a jacket">
                            <figcaption>
                                <h1>Pandemic Original</h1>
                                <h4>$30,00</h4>
                            </figcaption>
                        </figure>
                    </li>
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

    <x-slider :list="$listTwo" :slider="$slider">Test verkocht</x-slider>
    
    <div class="searchpathlinks">

        <h1>Assortiment</h1>
        <div class="linktab">
            <button id="button_a" class="nact" type="button">Uitgever</button>
            <button id="button_b" class="act" type="button">Genre</button>
            <button id="button_c" class="nact" type="button">Spelsoort</button>
            <button id="button_d" class="nact" type="button">category_d</button>
        </div><!-- contains buttons with a function to set the corresponding linkoptions to vis.
                                    Create a table with links. So you can create linkoptions divs coupled to a linktab button with corresponding id's and functionparameters. -->

        <div id="category_a" class="linkoptions nvis">
        <p>Dit is categoryA</p>
        <div><img src="/images/background_dow.png"></div>
        <div><img src="/images/background_999.jpg"></div>
        <div><img src="/images/background_wgg.jpg"></div>
        <div><img src="/images/background_wgg.jpg"></div>
        </div> <!-- nvis: not visible, vis: visible. To create an interactive menu -->
        <div id="category_b" class="linkoptions vis"><p>Dit is categoryB</p></div>
        <div id="category_c" class="linkoptions nvis"><p>Dit is categoryC</p></div>
        <div id="category_d" class="linkoptions nvis"><p>Dit is categoryD</p></div>
    </div>
</div>



<script>

var CategoryArray = document.querySelectorAll(".linkoptions");
var buttonArray = document.querySelectorAll(".linktab button");
// automate the button part.
var buttonA = document.getElementById("button_a");
var buttonB = document.getElementById("button_b");
var buttonC = document.getElementById("button_c");
var buttonD = document.getElementById("button_d");

buttonA.addEventListener("click", function(){showCategories("category_a"); setActive("button_a");});
buttonB.addEventListener("click", function(){showCategories("category_b"); setActive("button_b");});
buttonC.addEventListener("click", function(){showCategories("category_c"); setActive("button_c");});
buttonD.addEventListener("click", function(){showCategories("category_d"); setActive("button_d");});

function showCategories(CategoryID){
    console.log("aangevraagd");
    for(i=0; i<CategoryArray.length; i++){
        CategoryArray[i].classList.replace("vis", "nvis");
    }

    document.getElementById(CategoryID).classList.replace("nvis", "vis");
}

function setActive(CategoryID){
    console.log("aangevraagd");
    for(i=0; i<buttonArray.length; i++){
        buttonArray[i].classList.replace("act", "nact");
    }

    document.getElementById(CategoryID).classList.replace("nact", "act");
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