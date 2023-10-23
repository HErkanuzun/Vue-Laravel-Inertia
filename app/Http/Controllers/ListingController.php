<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Listing;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return Inertia::render(
            'Listing/Index',
            [
                'listings' => Listing::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {  
        return inertia('Listing/Create');
      
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Listing::create([
            $request->all(),
            $request->validate([
                'bed' => 'required|integer|min:0|max:20',
                'bath' => 'required|integer|min:0|max:20',
                'area' => 'required|integer|min:0|max:10000'
            ])
        ]);
        return redirect()->route('listing.index')
        ->with('success',"Success!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
       
        return Inertia::render(
            'Listing/Show',
            [
                'listing' => $listing
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
