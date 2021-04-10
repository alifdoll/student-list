@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if (!($paginator->onFirstPage()))
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
            </li>
            @endif

            @foreach(range(1, $paginator->lastPage()) as $totalPage)
                @if($totalPage >= $paginator->currentPage() && $totalPage <= $paginator->currentPage() + 4)
                    @if ($totalPage == $paginator->currentPage())
                        <li class="page-item active" aria-current="page"><span class="page-link">{{ $totalPage }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $paginator->url($totalPage) }}">{{ $totalPage }}</a></li>
                    @endif
                @endif
            @endforeach



            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @endif
        </ul>
    </nav>
@endif
