<div class="bar_product">
    <div class="bar_product_title">
        <h3>{{$slot}}</h3>
    </div>
    <div class="fake_border"></div>
    <div class="drop_menu">
        <h4>{{$slot}}</h4>
        @foreach ($list as $task)
            <a href={{$task[1]}}> {{$task[0]}} </a><br>
        @endforeach
    </div>
</div>