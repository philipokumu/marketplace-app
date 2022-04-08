<?php

namespace App\Http\Controllers;

use App\Http\Resources\Listing as ListingResource;
use App\Http\Resources\ListingCollection;
use App\Models\Category;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        $listings = Listing::query();
        
        // Search by listing title
        if (request()->has('search_title')) {
            $search_term = request('search_title');
            $listings->where('title', 'LIKE', "%{$search_term}%");
        }

        // Search by category title
        if (request()->has('category_id')) {
            $search_term = request('category_id');
            $listings->where('category_id', 'LIKE', "%{$search_term}%");
        }

        $listings = $listings->orderby('id','desc')->get();

        return new ListingCollection($listings);
    }

    public function show(Listing $listing)
    {
        return new ListingResource($listing);
    }
}