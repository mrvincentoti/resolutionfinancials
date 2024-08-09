<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Models\Project;

class AdminController extends Controller
{
    public function index()
    {
        $projects = Project::count();
        $pro_projects = Project::with(['sector', 'phase'])->where('phase_id', 1)->count();
        $dev_projects = Project::with(['sector', 'phase'])->where('phase_id', 2)->count();
        $imp_projects = Project::with(['sector', 'phase'])->where('phase_id', 3)->count();
        $prep_projects = Project::with(['sector', 'phase'])->where('phase_id', 4)->count();

        return view('admin.index', compact('projects','pro_projects','dev_projects','imp_projects','prep_projects'));
    }
}
