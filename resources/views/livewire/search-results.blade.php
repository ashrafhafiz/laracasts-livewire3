<div class="{{ $show ? 'block' : 'hidden' }}">
    <div class="absolute p-4 mt-4 bg-gray-700 border border-indigo-600 rounded-md">
        {{-- <div class="absolute top-0 right-0 pt-1 pr-1">
            <button wire:click="dispatch('search:clear-results')" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div> --}}
        @if (count($searchResults) === 0)
            <p class="text-center text-white">No results found</p>
        @endif

        @foreach ($searchResults as $result)
            <div class="p-4 my-4 bg-gray-700 rounded-md" wire:key="search-result-{{ $result->id }}">
                <a wire:navigate href="/articles/{{ $result->id }}">
                    {{ $result->title }}
                </a>
            </div>
        @endforeach

    </div>
</div>
