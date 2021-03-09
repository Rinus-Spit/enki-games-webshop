@extends('layouts.webshop')

@php
  
@endphp

@section('scriptLink')
<script src="/js/priceslider.js" defer></script>
@endsection

@section('content')
{{$priceMin}}
<div class="catbar">
    <div class="catbar_item">
        <div class="catbottom"></div>
    </div>
 </div>
<div class="midcontent">
    <div class="searchsection">
        <form action="{{route('testing')}}" method="get" class="filterspace">
            @csrf
            <x-priceinput></x-priceinput>
            <x-choicefilter :test="$landingContent"></x-choicefilter>
            
            <button type="submit">Filter</button>
        </form>
        <x-resultpage :results="$test">Kaartspellen</x-resultpage>
    </div>
</div>

<script>
    var maxValue = 200;
</script>

@endsection