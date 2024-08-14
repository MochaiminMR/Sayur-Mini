@if ($paginator->hasPages())
<nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex lg:flex-row flex-col items-center justify-around mt-12 gap-8">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    <span class="text-gray-3">{{ __('Previous') }}</span>
    @else
    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="bg-green-3 text-white px-4 py-2 rounded-lg hover:bg-green-3 transition">{{ __('Previous') }}</a>
    @endif

    {{-- Pagination Elements --}}
    <div class="flex items-center space-x-2">
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <span class="text-gray-3">{{ $element }}</span>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <span class="bg-green-3 text-white px-3 py-1 rounded-lg">{{ $page }}</span>
        @else
        <a href="{{ $url }}" class="bg-white text-green-3 border border-green-3 px-3 py-1 rounded-lg hover:bg-green-50 transition">{{ $page }}</a>
        @endif
        @endforeach
        @endif
        @endforeach
    </div>

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
    <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="bg-green-3 text-white px-4 py-2 rounded-lg hover:bg-green-3 transition">{{ __('Next') }}</a>
    @else
    <span class="text-gray-3">{{ __('Next') }}</span>
    @endif
</nav>
@endif
