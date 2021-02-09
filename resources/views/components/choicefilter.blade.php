<div class="min_spelerfilter choicefilter">
    <h1>{{$test->inputClass}}</h1>
    @foreach($test->inputOptions as $inputOption)
        <div> 
            <input type="checkbox" id="{{$inputOption->name}}_input" name="{{$inputOption->name}}_input">
            <label for="{{$inputOption->name}}_input">{{$inputOption->name}}</label>
        </div>
    @endforeach
</div>