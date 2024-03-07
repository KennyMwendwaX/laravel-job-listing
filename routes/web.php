<?php

use App\Http\Controllers\ListingController;
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
Route::get('/', [ListingController::class, 'index']);

// Show create form
Route::get('/create', [ListingController::class, 'create']);

// Store listing data
Route::post('/', [ListingController::class, 'store']);

// Single Listing
Route::get('/{listing}', [ListingController::class, 'show']);
