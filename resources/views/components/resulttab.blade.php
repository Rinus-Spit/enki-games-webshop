<div class="resulttab">
    <div class="optionsfield"></div>
    <div class="resultpages">
        @foreach($pages as $page)
        <a href="{{$page->pageLink}}">{{$page->name}}</a>
        @endforeach
        <p>Results: {{$firstResult}}-{{$lastResult}} / {{$totalResults}}</p>
    </div>
</div>