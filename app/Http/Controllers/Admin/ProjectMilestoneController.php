<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MilestoneRequest;
use App\Models\ProjectMilestone;
use Illuminate\Http\Request;

class ProjectMilestoneController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(ProjectMilestone::class, 'milestone');
    }

    public function index()
    {
        $milestones = ProjectMilestone::with([])->latest()->paginate(15);

        return view('admin.milestone.index', compact('milestones'));
    }


    public function create()
    {
        //
    }

    public function store(MilestoneRequest $request)
    {
        $milestone_data = $request->safe()->except('image');

        $milestone = ProjectMilestone::create($milestone_data);

        return back()->with('success', 'Your data has been saved successfully!');
    }


    public function show(ProjectMilestone $projectMilestone)
    {
        //
    }


    public function edit(ProjectMilestone $milestone)
    {
        return view('admin.milestone.edit', compact('milestone'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MilestoneRequest $request, ProjectMilestone $milestone)
    {
        $reason_data = $request->safe()->except(['image']);

        // Define an array of image fields
        $images = ['image'];

        foreach ($images as $image) {
            if ($request->hasFile($image)) {
                // Delete the old image if exists
                if ($milestone->$image) {
                    if (file_exists(public_path($milestone->$image))) {
                        unlink(public_path($milestone->$image));
                    }
                }

                $imagePath = $request->file($image)->move(public_path('images/choose'), $request->file($image)->getClientOriginalName());
                $reason_data[$image] = 'images/choose/' . $request->file($image)->getClientOriginalName();
            }
        }

        $milestone->update($reason_data);

        return redirect()->route('admin.agency.index')->with('message', 'Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectMilestone $projectMilestone)
    {
        //
    }
}
