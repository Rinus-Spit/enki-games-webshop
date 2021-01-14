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
    $listFour = ["Uitgever", "Genre", "Spelsoort", "Random"];
    $slider = ["slider_a","slider_b","slider_c","slider_d"];
    $indexToID = ["a","b","c","d","e","f","g","h","i","j","k","l"];
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

    <x-slider :list="$listTwo">Nieuwe producten</x-slider>
    <x-slider :list="$listTwo">Best verkocht</x-slider>
    
    <div class="searchpathlinks">

        <h1>Assortiment</h1>
        <x-linktab :list="$listFour"></x-linktab> <!-- List needs to correspond to the size of the category list (under construction)-->
        <x-linkoptions :list="$listFour">
            <!-- Dit slot deel vervangen met info uit database. Deze functionaliteit moet in de linkoptions component komen -->
            <!-- Slot Begin -->
            <div><img src="/images/background_dow.png"></div>
            <div><img src="/images/background_999.jpg"></div>
            <div><img src="/images/background_wgg.jpg"></div>
            <div><img src="/images/background_wgg.jpg"></div>
            <!-- Slot Einde -->
        </x-linkoptions>
    </div>
</div>

@endsection
