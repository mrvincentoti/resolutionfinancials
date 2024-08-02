<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SponsoringAgencyRequest;
use App\Models\SponsoringAgency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SponsoringAgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agencies = SponsoringAgency::with([])->latest()->paginate(15);
        return view("admin.agency.index", compact("agencies"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SponsoringAgencyRequest $request)
    {
        $agency_data = $request->safe()->except('image');

        if ($request->hasfile('image')) {
            $get_file = $request->file('image')->store('images/agency');
            $agency_data['image'] = $get_file;
        }
        $agency = SponsoringAgency::create($agency_data);

        return back()->with('success', 'Your data has been saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(SponsoringAgency $sponsoringAgency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SponsoringAgency $agency)
    {
        return view('admin.agency.edit', compact('agency'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SponsoringAgencyRequest $request, SponsoringAgency $agency)
    {
        $agency_data = $request->safe()->except('image');

        if ($request->hasfile('image')) {
            // Delete the old image if exists
            if ($agency->image) {
                Storage::delete($agency->image);
            }
            // Store the new image and save the path
            $get_file = $request->file('image')->store('images/agency');
            $agency_data['image'] = $get_file;
        }

        $agency->update($agency_data);

        return redirect()->route('admin.agency.index')->with('message', 'Supporting Agency Document updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SponsoringAgency $sponsoringAgency)
    {
        //
    }
}
