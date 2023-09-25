@if ($paginator->hasPages())

    <?php 

        $product_id_rate = $_GET['product_id_rate']??'';

    ?>

    <ul class="pagination m-0">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="page-link" aria-hidden="true">«</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                   aria-label="@lang('pagination.previous')">«</a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))

                @if(!empty($product_id_rate))

                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{  str_replace('rate?', 'rate?product_id_rate='.$product_id_rate.'&', $element)   }}</span></li>

                @else

                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{  $element   }}</span></li>

                @endif


            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ !empty($product_id_rate)?str_replace('rate?', 'rate?product_id_rate='.$product_id_rate.'&', $url):$url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"
                   aria-label="@lang('pagination.next')">»</a>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="page-link" aria-hidden="true">»</span>
            </li>
        @endif
    </ul>
@endif
