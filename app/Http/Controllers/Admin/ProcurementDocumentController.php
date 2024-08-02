<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProcurementDocumentRequest;
use App\Models\ProcurementDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProcurementDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $procurements = ProcurementDocument::with([])->latest()->paginate(15);
        return view("admin.procurement.index", compact("procurements"));
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
    public function store(ProcurementDocumentRequest $request)
    {
        $procurement_data = $request->safe()->except('image');

        if ($request->hasfile('image')) {
            $get_file = $request->file('image')->store('images/procurement');
            $procurement_data['image'] = $get_file;
        }
        $procurement = ProcurementDocument::create($procurement_data);

        return back()->with('success', 'Your data has been saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProcurementDocument $procurementDocument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProcurementDocument $procurement)
    {
        return view('admin.procurement.edit', compact('procurement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProcurementDocument $procurementDocument)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProcurementDocument $procurementDocument)
    {
        //
    }
}
