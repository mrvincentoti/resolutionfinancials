<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PerformanceInformationRequest;
use App\Models\PerformanceInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PerformanceInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $performances = PerformanceInformation::with([])->latest()->paginate(15);
        return view("admin.performance.index", compact("performances"));
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
    public function store(PerformanceInformationRequest $request)
    {
        $performance_data = $request->safe()->except('image');

        $performance = PerformanceInformation::create($performance_data);

        return back()->with('success', 'Your data has been saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PerformanceInformation $performanceInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PerformanceInformation $performance)
    {
        return view('admin.performance.edit', compact('performance'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PerformanceInformationRequest $request, PerformanceInformation $performance)
    {
        $performance_data = $request->safe()->except('image');

        $performance->update($performance_data);

        return redirect()->route('admin.performance.index')->with('message', 'Performance Document updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PerformanceInformation $performanceInformation)
    {
        //
    }
}
