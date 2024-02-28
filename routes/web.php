<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// All Listing
Route::get('/', function () {
    return view('listings', [
        'heading' => "Laravel Listings",
        'listings' => Listing::all()
    ]);
});

// Single Listing
Route::get('/{id}', function (number $id) {
    return view('listing', [
        'listing' => Listing::find($id),
    ]);
});


