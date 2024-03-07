<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show all listings
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::latest()->filter([
                'search' => request('search'),
                'tag' => request('tag'),
                'schedule' => request('schedule')
            ])->get()
        ]);
    }

    // Show create form
    public function create()
    {
        return view('listings.create');
    }

    // Show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing,
        ]);
    }

    // Store listing data
    public function store(Request $request)
    {
        $formFields = $request->validate(
            [
                'title' => 'required',
                'schedule' => 'required',
                'status' => 'required',
                'salary' => 'required',
                'tags' => 'required',
                'company' => 'required',
                'email' => ['email', 'required'],
                'location' => 'required',
                'website' => 'required',
                'description' => 'required',
            ]
        );
    }
}
