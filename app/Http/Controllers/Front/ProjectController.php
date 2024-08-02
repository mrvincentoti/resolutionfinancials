<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Traits\SlugCreater;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Sector;
use App\Models\Phase;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with([])->latest()->paginate(15);

        return view('front.project.index', compact('projects'));
    }
}
