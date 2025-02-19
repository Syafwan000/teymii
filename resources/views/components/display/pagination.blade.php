@if ($paginator->hasPages())
    <ul
        class="flex items-center justify-center gap-x-1 font-semibold">
        {{-- First Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled opacity-50">
                <div class="bg-gray-300 w-8 aspect-square rounded-lg flex justify-center items-center dark:bg-gray-400">
                    <svg class="dark:invert" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="20" height="20">
                        <path fill="currentColor" d="M8.3 11.74a.75.75 0 1 1-1.1 1.02l-4-4.25a.75.75 0 0 1 0-1.02l4-4.25a.75.75 0 1 1 1.1 1.02L4.773 8zm4 0a.75.75 0 1 1-1.1 1.02l-4-4.25a.75.75 0 0 1 0-1.02l4-4.25a.75.75 0 1 1 1.1 1.02L8.773 8z" />
                    </svg>
                </div>
            </li>
        @else
            <li><a wire:navigate href="{{ $paginator->url(1) }}" rel="prev">
                <div class="transition-all duration-300 ease-in-out bg-gray-300 w-8 aspect-square rounded-lg flex justify-center items-center hover:bg-gray-400 dark:bg-gray-400 dark:hover:bg-gray-500">
                    <svg class="dark:invert" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="20" height="20">
                        <path fill="currentColor" d="M8.3 11.74a.75.75 0 1 1-1.1 1.02l-4-4.25a.75.75 0 0 1 0-1.02l4-4.25a.75.75 0 1 1 1.1 1.02L4.773 8zm4 0a.75.75 0 1 1-1.1 1.02l-4-4.25a.75.75 0 0 1 0-1.02l4-4.25a.75.75 0 1 1 1.1 1.02L8.773 8z" />
                    </svg>
                </div>
            </a></li>
        @endif

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled opacity-50">
                <div class="bg-gray-300 w-8 aspect-square rounded-lg flex justify-center items-center dark:bg-gray-400">
                    <svg class="dark:invert" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="20" height="20">
                        <path fill="currentColor" d="M10.26 3.2a.75.75 0 0 1 .04 1.06L6.773 8l3.527 3.74a.75.75 0 1 1-1.1 1.02l-4-4.25a.75.75 0 0 1 0-1.02l4-4.25a.75.75 0 0 1 1.06-.04" />
                    </svg>
                </div>
            </li>
        @else
            <li>
                <a wire:navigate href="{{ $paginator->previousPageUrl() }}" rel="prev">
                    <div class="transition-all duration-300 ease-in-out bg-gray-300 w-8 aspect-square rounded-lg flex justify-center items-center hover:bg-gray-400 dark:bg-gray-400 dark:hover:bg-gray-500">
                        <svg class="dark:invert" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="20" height="20">
                            <path fill="currentColor" d="M10.26 3.2a.75.75 0 0 1 .04 1.06L6.773 8l3.527 3.74a.75.75 0 1 1-1.1 1.02l-4-4.25a.75.75 0 0 1 0-1.02l4-4.25a.75.75 0 0 1 1.06-.04" />
                        </svg>
                    </div>
                </a>
            </li>
        @endif

        {{-- Middle Page Link --}}
        @foreach (range(1, $paginator->lastPage()) as $i)
            @if ($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
                @if ($i == $paginator->currentPage())
                    <li
                        class="inline-flex w-8 aspect-square items-center justify-center rounded-lg bg-blue-600 text-center text-white">
                        <span>{{ $i }}</span>
                    </li>
                @else
                    <li><a wire:navigate href="{{ $paginator->url($i) }}">
                        <div class="transition-all duration-300 ease-in-out inline-flex w-8 aspect-square items-center justify-center rounded-lg bg-gray-100 text-center hover:bg-gray-200 dark:text-slate-700 dark:bg-gray-200 dark:hover:bg-gray-300">
                            {{ $i }}
                        </div>
                    </a></li>
                @endif
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a wire:navigate href="{{ $paginator->nextPageUrl() }}" rel="next">
                <div class="transition-all duration-300 ease-in-out bg-gray-300 w-8 aspect-square rounded-lg flex justify-center items-center hover:bg-gray-400 dark:bg-gray-400 dark:hover:bg-gray-500">
                    <svg class="dark:invert" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="20" height="20">
                        <path fill="currentColor" d="M5.74 3.2a.75.75 0 0 0-.04 1.06L9.227 8L5.7 11.74a.75.75 0 1 0 1.1 1.02l4-4.25a.75.75 0 0 0 0-1.02l-4-4.25a.75.75 0 0 0-1.06-.04" />
                    </svg>
                </div>
            </a></li>
        @else
            <li class="disabled opacity-50"><span>
                <div class="bg-gray-300 w-8 aspect-square rounded-lg flex justify-center items-center dark:bg-gray-400">
                    <svg class="dark:invert" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="20" height="20">
                        <path fill="currentColor" d="M5.74 3.2a.75.75 0 0 0-.04 1.06L9.227 8L5.7 11.74a.75.75 0 1 0 1.1 1.02l4-4.25a.75.75 0 0 0 0-1.02l-4-4.25a.75.75 0 0 0-1.06-.04" />
                    </svg>
                </div>
            </span></li>
        @endif

        {{-- Last Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a wire:navigate href="{{ $paginator->url($paginator->lastPage()) }}" rel="next">
                    <div class="transition-all duration-300 ease-in-out bg-gray-300 w-8 aspect-square rounded-lg flex justify-center items-center hover:bg-gray-400 dark:bg-gray-400 dark:hover:bg-gray-500">
                        <svg class="dark:invert" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="20" height="20">
                            <path fill="currentColor" d="M7.7 4.26a.75.75 0 1 1 1.1-1.02l4 4.25a.75.75 0 0 1 0 1.02l-4 4.25a.75.75 0 1 1-1.1-1.02L11.226 8zm-4 0a.75.75 0 1 1 1.1-1.02l4 4.25a.75.75 0 0 1 0 1.02l-4 4.25a.75.75 0 1 1-1.1-1.02L7.227 8z" />
                        </svg>
                    </div>
                </a>
            </li>
        @else
            <li class="disabled opacity-50"><span>
                <div class="bg-gray-300 w-8 aspect-square rounded-lg flex justify-center items-center dark:bg-gray-400">
                    <svg class="dark:invert" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="20" height="20">
                        <path fill="currentColor" d="M7.7 4.26a.75.75 0 1 1 1.1-1.02l4 4.25a.75.75 0 0 1 0 1.02l-4 4.25a.75.75 0 1 1-1.1-1.02L11.226 8zm-4 0a.75.75 0 1 1 1.1-1.02l4 4.25a.75.75 0 0 1 0 1.02l-4 4.25a.75.75 0 1 1-1.1-1.02L7.227 8z" />
                    </svg>
                </div>
            </span></li>
        @endif
    </ul>
@endif
