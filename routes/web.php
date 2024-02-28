<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('listing', [
        'heading' => "Laravel Listings",
        'listings' => [
            [
                'id' => 1,
                'title' => 'Post 1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus nihil eaque dicta omnis voluptates aliquid, quo unde vitae molestiae rerum.'
            ],
            [
                'id' => 2,
                'title' => 'Post 2',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus nihil eaque dicta omnis voluptates aliquid, quo unde vitae molestiae rerum.'
            ]
        ]
    ]);
});
