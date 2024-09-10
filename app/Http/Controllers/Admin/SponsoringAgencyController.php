<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SponsoringAgencyRequest;
use App\Models\ContractInformation;
use App\Models\SponsoringAgency;
use App\Models\ProcurementDocument;
use App\Models\ProjectMilestone;

class SponsoringAgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get the most recent single record
        $about = SponsoringAgency::with([])->latest()->first();
        $choose = ProcurementDocument::with([])->latest()->first();
        $reason = ProjectMilestone::with([])->latest()->first();
        return view("admin.agency.index", compact(["about","choose","reason"]));
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
        $contract_data = $request->safe()->except([
            'simage',
            'limage'
        ]);

        // List of file fields to check and store
        $fileFields = [
            'title',
            'simage',
            'limage',
            'content',
            'project_id'
        ];

        // Loop through each file field, check for file, store and save path
        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field)->store('images/about');
                $contract_data[$field] = $file;
            }
        }

        // Create the announcement with the collected data
        $contract = ContractInformation::create($contract_data);

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
        // Get the safe request data excluding image fields
        $agency_data = $request->safe()->except(['simage', 'limage']);

        // Define an array of image fields
        $images = ['simage', 'limage'];

        foreach ($images as $image) {
            if ($request->hasFile($image)) {
                // Delete the old image if exists
                if ($agency->$image) {
                    if (file_exists(public_path($agency->$image))) {
                        unlink(public_path($agency->$image));
                    }
                }
                // Store the new image in the public folder
                $imagePath = $request->file($image)->move(public_path('images/about'), $request->file($image)->getClientOriginalName());
                // Save the relative path to the database
                $agency_data[$image] = 'images/about/' . $request->file($image)->getClientOriginalName();
            }
        }

        // Update the agency with the modified data
        $agency->update($agency_data);

        return redirect()->route('admin.agency.index')->with('message', 'Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SponsoringAgency $sponsoringAgency)
    {
        //
    }
}
