@extends('layouts.webshop')

@section('content')
<div class="midcontent">
    <x-productbar :properties="$properties"></x-productbar>
    <div class="featured">
        <a href="#nothing" class="featured_window">
            <h1>Kaldheim spoilers</h1>
            <div class="background_filter"></div>
        </a>
        <a href="#nothing" class="featured_options_a"><h1>link1</h1><div class="background_filter"></div></a>
        <a href="#nothing" class="featured_options_b"><h1>link2</h1><div class="background_filter"></div></a>
        <a href="#nothing" class="featured_options_c"><h1>link3</h1><div class="background_filter"></div></a>
    </div>
    <x-productCart></x-productCart>
    <div id="targetDiv"></div>
    <x-productslider :list="$newProducts->products">Nieuwe producten</x-productslider>
    <x-productslider :list="$popularProducts->products">Populaire producten</x-productslider>

    <x-category_section :properties="$properties">Assortiment</x-category_section>
</div>

@endsection
