<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Sector;
use App\Models\Phase;
use App\Models\Lga;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;
use Illuminate\Support\Facades\Cookie;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with(['sector', 'phase'])->latest()->paginate(15);
        $sectors = Sector::all();
        $phases = Phase::all();
        $lgas = Lga::all();
        $settings = Setting::first();
        return view('front.project.index', compact(['projects', 'projects', 'sectors', 'phases', 'lgas','settings']));
    }

    public function filterProjects(Request $request)
    {
        // Log::log('Phase IDs:', $request->input('phase'));
        // Log::log('Sector IDs:', $request->input('sector'));
        // Log::log('LGA IDs:', $request->input('lga'));

        $stageIds = $request->input('stage');
        $sectorIds = $request->input('sector');
        $lgaIds = $request->input('lga');


        $query = Project::query();

        if ($stageIds) {
            $query->whereIn('phase_id', $stageIds);
        }

        if ($sectorIds) {
            $query->whereIn('sector_id', $sectorIds);
        }

        if ($lgaIds) {
            $query->whereIn('lga_id', $lgaIds);
        }

        $projects = $query->with(['phase', 'sector', 'lga'])->get();

        return response()->json($projects);
    }

    public function getProjectsCountByPhase()
    {
        $projectCounts = DB::table('projects')
            ->join('phases', 'projects.phase_id', '=', 'phases.id')
            ->select('phases.name as phase_name', DB::raw('count(*) as total'))
            ->groupBy('phases.name')
            ->get();

        return response()->json($projectCounts);
    }

    public function getProjectsCountBySector()
    {
        $projectCounts = DB::table('projects')
            ->join('sectors', 'projects.sector_id', '=', 'sectors.id')
            ->select('sectors.name as sector_name', DB::raw('count(*) as total'))
            ->groupBy('sectors.name')
            ->get();

        return response()->json($projectCounts);
    }

    public function getProjectBySlug($slug)
    {
        // I've Pass Slug to Get the Category per it's Slug
        $project = Project::with(['sector', 'phase','milestones'])->whereSlug($slug)->firstOrFail();

        //$comments = $post->comments;
        //$post_title = $post->title;

        //dd($project->milestones);
        return view('front.project.details', compact('project'));
    }
}
