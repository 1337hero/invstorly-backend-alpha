<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        return response()->json([
            'listings' => Listing::latest()->get()
        ]);
    }

    public function show(Listing $listing)
    {
        return response()->json([
            'listing' => $listing
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('listings', 'public');
            $validated['image'] = $path;
        }

        $listing = Listing::create($validated);

        return response()->json([
            'message' => 'Listing created successfully',
            'listing' => $listing
        ], 201);
    }
}