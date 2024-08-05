<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProjectRequest;
use App\Models\Project;
use App\Traits\SlugCreater;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Sector;
use App\Models\Phase;
use App\Models\Lga;
use App\Models\AnnouncementType;

class ProjectController extends Controller
{
    use SlugCreater;

    public function __construct()
    {
        $this->authorizeResource(Project::class, 'project');
    }

    public function index()
    {
        $projects = Project::with([])->latest()->paginate(15);

        return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sectors = Sector::all();
        $phases = Phase::all();
        $lgas = Lga::all(); 
        return view('admin.project.create', compact('sectors', 'phases','lgas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {
        $project_data = $request->safe()->except('project_image');
        if ($request->hasfile('project_image')) {
            $get_file = $request->file('project_image')->store('images/projects');
            $project_data['project_image'] = $get_file;
        }

        $project = Project::create($project_data);

        return to_route('admin.project.index')->with('message', trans('admin.project_created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $types = AnnouncementType::all();
        $project = Project::with(['sector', 'phase'])->findOrFail($project->id);
        return view('admin.project.show', compact('project','types'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $sectors = Sector::all();
        $phases = Phase::all();
        $lgas = Lga::all();
        return view('admin.project.edit', compact('project','sectors','phases','lgas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectRequest $request, Project $project)
    {
        $project_data = $request->safe()->except('project_image');

        if ($request->hasfile('project_image')) {
            Storage::delete($project->project_image);
            $get_file = $request->file('project_image')->store('images/projects');
            $project_data['project_image'] = $get_file;
        }

        $project->update($project_data);

        return to_route('admin.project.index')->with('message', trans('admin.project_updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        if ($project->image != null) {
            Storage::delete($project->image);
        }
        $project->delete();

        return back()->with('message', trans('admin.project_deleted'));
    }


    public function getSlug(Request $request)
    {
        $slug = $this->createProjectSlug($request, Project::class);

        return response()->json(['slug' => $slug]);
    }
}
