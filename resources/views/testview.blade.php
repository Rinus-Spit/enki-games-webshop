<!-- /*header*/
/*navbar*/
/*body container*/
    /*product bar*/
    /*uitgelicht section*/
    /*best verkocht en nieuw*/
    /*product thema's */ -->
@php
    $list = $landingContent->list;
    $listTwo = $landingContent->listTwo;
    $listThree =$landingContent->listThree;
    $listFour = $landingContent->listFour;
    $listFive = $landingContent->listFive;   
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
        <a href="#nothing" class="featured_window">
            <h1>Kaldheim spoilers</h1>
            <div class="background_filter"></div>
        </a>
        <a href="#nothing" class="featured_options_a"><h1>link1</h1><div class="background_filter"></div></a>
        <a href="#nothing" class="featured_options_b"><h1>link2</h1><div class="background_filter"></div></a>
        <a href="#nothing" class="featured_options_c"><h1>link3</h1><div class="background_filter"></div></a>
    </div>

    <x-slider :list="$listTwo">Nieuwe producten</x-slider>
    <x-slider :list="$test">Best verkocht</x-slider>

    <div class="searchpathlinks">
        <h1>Assortiment</h1>
        <x-linktab :list="$listFour"></x-linktab> <!-- List needs to correspond to the size of the category list (under construction)-->
        <x-linkoptions :list="$listFour" :cards="$listFive"></x-linkoptions>
    </div>
</div>

@endsection
