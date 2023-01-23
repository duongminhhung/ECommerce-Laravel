@if ($paginator->hasPages())
<div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-start">
            
            @foreach ($elements as $element)
               

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            
        </ul>
    </nav>
</div>
@endif
