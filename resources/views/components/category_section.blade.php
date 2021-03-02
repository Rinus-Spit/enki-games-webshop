<div class="searchpathlinks">
    <h1>{{$slot}}</h1>
    <x-property_propertybar :properties="$properties"></x-property_propertybar> <!-- List needs to correspond to the size of the category list (under construction)-->
    <x-property_categorycards :properties="$properties"></x-property_categorycards>
</div>