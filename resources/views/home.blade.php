@extends ('layouts.temp')

@section('content')
<div class="midcontent">
    <div class="productbar">
        @foreach($toplists as $toplist)
        <x-barproducts :list="$toplist"> Test 1 </x-barproducts>
        @endforeach
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

    <x-productslider :products="$new_products">Nieuwe producten</x-slider>
    <x-productslider :products="$bestselling_products">Best verkocht</x-slider>

    <div class="searchpathlinks">
        <h1>Assortiment</h1>
        @foreach($properties as $property)
        <x-propertylinktab :property="$property"></x-propertylinktab> <!-- List needs to correspond to the size of the category list (under construction)-->
        <x-propertylinkoptions  :property="$property"></x-propertylinkoptions>
        @endforeach
    </div>
</div>

@endsection
