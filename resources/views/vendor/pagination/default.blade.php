@if ($paginator->hasPages())
    <nav>
        <div class="blog">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="pagination justify-content-center">
                            {{-- Previous Page Link --}}
                            @if ($paginator->onFirstPage())
                                <li class="disabled page-item" aria-disabled="true" aria-label="@lang('pagination.previous')">
                                    <span aria-hidden="true">&lsaquo;</span>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $paginator->previousPageUrl() }}" class="page-link" rel="prev"
                                        aria-label="@lang('pagination.previous')">&lsaquo;</a>
                                </li>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($elements as $element)
                                {{-- "Three Dots" Separator --}}
                                @if (is_string($element))
                                    <li class="disabled page-item" aria-disabled="true"><span>{{ $element }}</span>
                                    </li>
                                @endif

                                {{-- Array Of Links --}}
                                @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        @if ($page == $paginator->currentPage())
                                            <li class="active page-item" aria-current="page">
                                                <span>{{ $page }}</span>
                                            </li>
                                        @else
                                            <li><a href="{{ $url }}" class="page-link">{{ $page }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($paginator->hasMorePages())
                                <li>
                                    <a href="{{ $paginator->nextPageUrl() }}" class="page-link" rel="next"
                                        aria-label="@lang('pagination.next')">&rsaquo;</a>
                                </li>
                            @else
                                <li class="disabled page-item" aria-disabled="true" aria-label="@lang('pagination.next')">
                                    <span aria-hidden="true">&rsaquo;</span>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
@endif
<style>
    .blog .pagination .page-link {
        color: #307345;
        border-radius: 5px;
        border-color: #307345;
        margin: 0 2px;
    }

    .blog .pagination .page-link:hover,
    .blog .pagination .page-item.active .page-link {
        color: #ffffff;
        background: #307345;
    }

    .blog .pagination .disabled .page-link {
        color: #999999;
    }

    @media(max-width: 575.98px) {
        .blog .blog-meta p {
            flex: 50%;
            font-size: 13px;
            margin: 0 0 5px 0;
        }
    }
</style>
