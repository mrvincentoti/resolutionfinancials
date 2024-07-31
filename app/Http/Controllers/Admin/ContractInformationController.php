<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContractRequest;
use App\Models\ContractInformation;
use Illuminate\Http\Request;

class ContractInformationController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(ContractInformation::class, 'milestone');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contracts = ContractInformation::with([])->latest()->paginate(15);

        return view('admin.contract.index', compact('contracts'));
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
    public function store(ContractRequest $request)
    {
        // Initialize an array to hold the data for saving to the database
        $contract_data = $request->safe()->except([
            'redacted_ppp_agreement',
            'financial_structure',
            'risk',
            'government_support',
            'tariff',
            'termination_provisions',
            'renegotiations'
        ]);

        // List of file fields to check and store
        $fileFields = [
            'redacted_ppp_agreement',
            'financial_structure',
            'risk',
            'government_support',
            'tariff',
            'termination_provisions',
            'renegotiations'
        ];

        // Loop through each file field, check for file, store and save path
        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field)->store('images/announcement');
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
    public function show(ContractInformation $contractInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContractInformation $contractInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContractInformation $contractInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContractInformation $contractInformation)
    {
        //
    }
}
