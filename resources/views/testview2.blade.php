@extends('layouts.temp')

@php
  
@endphp

@section('scriptLink')
<script src="/js/priceslider.js" defer></script>
@endsection

@section('content')

<div class="catbar">
    <div class="cattop"></div>
    <div class="catbottom"></div>
 </div>
<div class="midcontent">
    
    <div class="searchsection">
        <div class="filterspace">
            <x-priceinput></x-priceinput>
            <x-choicefilter :test="$landingContent"></x-choicefilter>
            <x-choicefilter :test="$landingContent"></x-choicefilter>
            <button type="button">Filter</button>
        </div>
        <x-resultpage :results="$test"></x-resultpage>
    </div>
</div>

<script>
    var maxValue = 200;
</script>

@endsection