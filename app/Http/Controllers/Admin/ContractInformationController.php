<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContractRequest;
use App\Models\ContractInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
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
        // Initialize an array to hold the data for saving to the database, excluding file fields
        $contract_data = $request->safe()->except([
            'account_statement',
            'work_id',
            'application_form',
            'passport',
            'utility_bill',
            'employment_letter'
        ]);

        // List of file fields to check and store
        $fileFields = [
            'account_statement',
            'work_id',
            'application_form',
            'passport',
            'utility_bill',
            'employment_letter'
        ];

        // Loop through each file field, check for file, store and save the path
        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                // Get the file from the request
                $file = $request->file($field);
                // Generate a unique filename with extension
                $filename = time() . '-' . $file->getClientOriginalName();
                // Define the path to store the file (in public folder)
                $destinationPath = public_path('images/documents');
                // Move the file to the public/images/documents directory
                $file->move($destinationPath, $filename);
                // Store the filename in the contract data
                $contract_data[$field] = 'images/documents/' . $filename;
                \Log::info("File {$field} uploaded and saved as {$filename}");
            }
            Log::info('Contract Data: ' . json_encode($contract_data, JSON_PRETTY_PRINT));
        }
        // Create the contract with the collected data
        $contract = ContractInformation::create($contract_data);

        return back()->with('message', 'Your application has been submitted successfully. You will be contacted shortly');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $request = ContractInformation::where('id', $id)->with([])->first();
        return view('admin.contract.show', compact('request'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContractInformation $contract)
    {
        return view('admin.contract.edit', compact('contract'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContractRequest $request, ContractInformation $contract)
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

        $contract->update($contract_data);

        return redirect()->route('admin.contract.index')->with('message', 'Contract Information Document updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContractInformation $contractInformation)
    {
        //
    }
}
