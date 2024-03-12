@if ($paginator->hasPages())
    <nav class="flex justify-center">
        {{-- Previous Page Link --}}
        <ul class="pagination flex">
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link px-4 py-2 rounded-lg bg-gray-300 text-gray-600">Anterior</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link px-4 py-2 rounded-lg bg-blue-500 hover:bg-blue-600 text-white" href="{{ $paginator->previousPageUrl() }}" rel="prev">Anterior</a>
                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item ml-4">
                    <a class="page-link px-4 py-2 rounded-lg bg-blue-500 hover:bg-blue-600 text-white" href="{{ $paginator->nextPageUrl() }}" rel="next">Próximo</a>
                </li>
            @else
                <li class="page-item disabled ml-4" aria-disabled="true">
                    <span class="page-link px-4 py-2 rounded-lg bg-gray-300 text-gray-600">Próximo</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
