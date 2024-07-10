<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class SearchProducts extends Component
{
    public $searchTerm;
    public $results = [];

    public function updatedSearchTerm()
    {
        if ($this->searchTerm) {
            $this->results = Product::where('title', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('description1', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('description2', 'like', '%' . $this->searchTerm . '%')
                ->get();
        } else {
            $this->results = [];
        }
    }

    public function render()
    {
        return view('livewire.search-products');
    }
}
