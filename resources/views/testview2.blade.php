@extends('layouts.temp')

@php
  
@endphp

@section('scriptLink')
<script src="/js/priceslider.js" defer></script>
@endsection

@section('content')
<div class="catbar">
    <div class="catbar_item">
        <div class="catbottom"></div>
    </div>
 </div>
<div class="midcontent">
    
    <div class="searchsection">
        <form action="/search.php" method="get" class="filterspace">

            <x-priceinput></x-priceinput>
            <x-choicefilter :test="$landingContent"></x-choicefilter>
            <x-choicefilter :test="$landingContent"></x-choicefilter>
            <button type="button">Filter</button>
        </form>
        <x-resultpage :results="$test">Kaartspellen</x-resultpage>
    </div>
</div>

<script>
    var maxValue = 200;
</script>

@endsection