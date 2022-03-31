<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Listing;
use Carbon\Carbon;
use Livewire\Component;

class CreateListing extends Component
{
    public $title = '';
    public $price = '';
    public $currency = '';
    public $description = '';
    public $category_id = '';

    protected $rules = [
        'title' => '',
        'price' => '',
        'currency' => '',
        'description' => '',
        'category_id' => ''
    ];

    public function create()
    {   
        $this->validate();

        $category = Category::find($this->category_id);

        $category->listings()->create([
            'title'=>$this->title,
            'price'=>$this->price,
            'description'=>$this->description,
            'category_id'=>$this->category_id,
            'currency'=>$this->currency,
            'date_online'=>Carbon::now(),
        ]);

        // redirect(route('patients.edit',$patient));

    }

    public function render()
    {
        return view('livewire.create-listing');
    }
}
