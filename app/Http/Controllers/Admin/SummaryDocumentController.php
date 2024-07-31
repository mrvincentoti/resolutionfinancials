<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SummaryDocumentRequest;
use App\Models\SummaryDocument;
use Illuminate\Http\Request;

class SummaryDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $summaries = SummaryDocument::with([])->latest()->paginate(15);
        return view("admin.summary.index", compact("summaries"));
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
    public function store(SummaryDocumentRequest $request)
    {
        $summary_data = $request->safe()->except('image');

        if ($request->hasfile('image')) {
            $get_file = $request->file('image')->store('images/agency');
            $summary_data['image'] = $get_file;
        }
        $summary = SummaryDocument::create($summary_data);

        return back()->with('success', 'Your data has been saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(SummaryDocument $summaryDocument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SummaryDocument $summaryDocument)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SummaryDocument $summaryDocument)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SummaryDocument $summaryDocument)
    {
        //
    }
}
