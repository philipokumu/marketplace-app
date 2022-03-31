<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('guest:sanctum')->group(function () {
    Route::get('categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories.list');
    Route::get('categories/{category}', [App\Http\Controllers\CategoryController::class, 'show'])->name('categories.show');
    Route::get('listings', [App\Http\Controllers\ListingController::class, 'index'])->name('listings.list');
    // Route::post('listings', [App\Http\Controllers\ListingController::class, 'store'])->name('listings.store');
    Route::get('listings/{listing}', [App\Http\Controllers\ListingController::class, 'show'])->name('listings.show');
});