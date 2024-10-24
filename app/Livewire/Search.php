<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Attributes\On;
use Livewire\Component;

class Search extends Component
{
    #[Validate('required|min:2')]
    public $searchText = "";
    public $searchResults = [];
    public $placeholder = "Search for articles";

    public function updatedSearchText()
    {
        $this->reset('searchResults');
        $this->searchResults = Article::where('title', 'like', '%' . $this->searchText . '%')->get();
    }

    #[On('search:clear-results')]
    public function clearSearch()
    {
        $this->reset('searchText', 'searchResults');
    }

    public function render()
    {
        return view('livewire.search');
    }
}
