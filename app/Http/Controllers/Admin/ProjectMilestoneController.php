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

        $agency = ProjectMilestone::create($milestone_data);

        return back()->with('success', 'Your data has been saved successfully!');
    }

  
    public function show(ProjectMilestone $projectMilestone)
    {
        //
    }

    
    public function edit(ProjectMilestone $projectMilestone)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectMilestone $projectMilestone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectMilestone $projectMilestone)
    {
        //
    }
}
