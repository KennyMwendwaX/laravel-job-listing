<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show all listings
    public function showListings()
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
    public function createListing()
    {
        return view('listings.create');
    }

    // Show single listing
    public function showListing(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing,
        ]);
    }

    // Store listing data
    public function storeListing(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'schedule' => 'required',
            'status' => 'required',
            'salary' => ['numeric', 'required'],
            'tags' => 'required',
            'company' => 'required',
            'email' => ['email', 'required'],
            'location' => 'required',
            'website' => 'required',
            'description' => 'required',
        ]);

        // Store description as Markdown
        Listing::create($formFields);

        return redirect('/')->with('success', 'Listing created successfully!');
    }

    // Show listing application form
    public function showApplicationForm()
    {
        return view('listings.apply');
    }
}
