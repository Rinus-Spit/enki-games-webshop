<div class="catbar_item">
    <div class="cat_title">
        <h3>{{$slot}}</h3>
    </div>
    <div class="catbottom nvis">
        @foreach ($list as $task)
            <a href={{$task[1]}}> {{$task[0]}} </a>
        @endforeach
    </div>
</div>