<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Traits\SlugCreater;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Sector;
use App\Models\Phase;
use App\Models\Lga;
use Log;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with(['sector', 'phase'])->latest()->paginate(15);
        $sectors = Sector::all();
        $phases = Phase::all();
        $lgas = Lga::all();
        return view('front.project.index', compact(['projects', 'projects', 'sectors', 'phases', 'lgas']));
    }

    public function filterProjects(Request $request)
    {
        // Log::log('Phase IDs:', $request->input('phase'));
        // Log::log('Sector IDs:', $request->input('sector'));
        // Log::log('LGA IDs:', $request->input('lga'));

        $phaseIds = $request->input('level');
        $sectorIds = $request->input('sector');
        $lgaIds = $request->input('lga');

        //return $phaseIds;

        $query = Project::query();

        if ($phaseIds) {
            $query->whereIn('phase_id', $phaseIds);
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

}
