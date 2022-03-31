<?php

namespace App\Http\Livewire;

use App\Models\Listing;
use Livewire\Component;

class AllListings extends Component
{
    public $listings;

    public function mount()
    {
        $this->listings = Listing::orderBy('id','desc')->get();
    }

    public function render()
    {
        return view('livewire.all-listings');
    }
}
