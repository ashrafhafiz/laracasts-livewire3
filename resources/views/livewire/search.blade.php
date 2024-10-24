<div>
    <form action="">
        <div class="flex gap-2 mt-2">
            <input type="text" class="w-full p-4 text-white bg-gray-700 border rounded-md" name="search" id="search"
                placeholder="{{ $placeholder }}" wire:model.live.debounce="searchText">
            {{-- <button class="w-3/12 p-4 text-white bg-indigo-600 border rounded-md disabled:opacity-50"
                wire:click.prevent="clearSearch()" @if ($searchText == '') disabled @endif>Clear</button> --}}
        </div>
    </form>
    <livewire:search-results :searchResults="$searchResults" :show="!empty($searchText)" />
    {{-- @livewire('search-results', ['searchResults' => $searchResults]) --}}
</div>
