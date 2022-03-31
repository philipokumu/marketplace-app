<?php

namespace App\Http\Controllers;

use App\Http\Resources\Category as CategoryResource;
use App\Http\Resources\CategoryCollection;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return new CategoryCollection($categories);
    }

    public function show(Category $category)
    {
        return new CategoryResource($category);
    }
}
