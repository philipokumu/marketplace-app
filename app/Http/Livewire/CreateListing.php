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
    public $mobile = '';
    public $email = '';

    protected $rules = [
        'title' => 'required|unique:listings,title',
        'price' => 'required|numeric',
        'currency' => 'required',
        'description' => 'required',
        'mobile' => 'required',
        'email' => 'required',
        'category_id' => 'required|numeric'
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
            'mobile'=>$this->mobile,
            'email'=>$this->email,
            'date_online'=>Carbon::now(),
        ]);

        // redirect(route('patients.edit',$patient));

    }

    public function render()
    {
        return view('livewire.create-listing');
    }
}
