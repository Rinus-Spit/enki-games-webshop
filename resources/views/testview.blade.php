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
        <div class="linktab"></div><!-- contains buttons with a function to set the corresponding linkoptions to vis.
                                    Create a table with links. So you can create linkoptions divs coupled to a linktab button with corresponding id's and functionparameters. -->
        <div class="linkoptions nvis"></div> <!-- nvis: not visible, vis: visible. To create an interactive menu -->
        <div class="linkoptions vis"></div>
        <div class="linkoptions nvis"></div>
    </div>
</div>
<script>

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