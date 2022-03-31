<?php

namespace App\Http\Controllers;

use App\Http\Resources\Listing as ListingResource;
use App\Http\Resources\ListingCollection;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        $listings = Listing::orderby('id','desc')->get();
        return new ListingCollection($listings);
    }

    public function show(Listing $listing)
    {
        return new ListingResource($listing);
    }
}