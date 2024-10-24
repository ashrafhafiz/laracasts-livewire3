<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class SearchResults extends Component
{
    #[Reactive]
    public $searchResults = [];

    #[Reactive]
    public $show = [];

    // public function closeSearchResults()
    // {
    //     $this->dispatch('search:clear-results');
    // }

    public function render()
    {
        return view('livewire.search-results');
    }
}