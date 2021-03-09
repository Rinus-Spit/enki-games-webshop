<div class="min_spelerfilter choicefilter">
    <h1>{{$test->inputClass}}</h1>
    @foreach($test->inputOptions as $key=>$inputOption)
        <div> 
            <input type="checkbox" id="{{$inputOption->name}}_input" name="{{$test->inputClass}}[{{$key}}]" value="{{$inputOption->name}}">
            <label for="{{$inputOption->name}}_input">{{$inputOption->name}}</label>
        </div>
    @endforeach
</div>