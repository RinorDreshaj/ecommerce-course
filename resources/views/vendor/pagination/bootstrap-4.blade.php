@if ($paginator->hasPages())
    <div class="pagination flex-m flex-w p-t-26">
        @foreach ($elements as $element)

            @if (is_string($element))
                <a href="#" class="item-pagination flex-c-m trans-0-4">{{ $element }}</a>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}" class="item-pagination flex-c-m trans-0-4">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach
    </div>
@endif
