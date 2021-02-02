@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="">
        <div class="inline">
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span aria-disabled="true">
                    <span class="pagelink">{{ $element }}</span>
                </span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span aria-current="page">
                            <span class="pagelink">{{ $page }}</span>
                        </span>
                    @else
                        <a href="{{ $url }}" class="pagelink" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach
        </div>
    <div class="resultstab_index">
        <div>
            <p class="">
                {!! __('Showing') !!}
                <span class="">{{ $paginator->firstItem() }}</span>
                {!! __('to') !!}
                <span class="">{{ $paginator->lastItem() }}</span>
                {!! __('of') !!}
                <span class="">{{ $paginator->total() }}</span>
                {!! __('results') !!}
            </p>
        </div>

        @if ($paginator->onFirstPage())
            <span class="prev_arrow"></span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="prev_arrow"></a>
        @endif

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="next_arrow"></a>
        @else
            <span class="next_arrow"></span>
        @endif 
    </div> 
    </nav>
@endif


