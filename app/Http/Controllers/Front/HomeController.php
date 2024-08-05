<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Announcement;
use App\Models\Project;
use App\Models\Sector;
use App\Models\Phase;
use App\Models\Lga;


class HomeController extends Controller
{
    // Home Page
    public function index()
    {
        // Get the active posts with (Category and User) details
        //$posts = Post::published()->with(['category', 'user'])->latest('created_at')->paginate(10);

        // return view('front.index', compact('posts'));
        $projects = Project::with(['sector', 'phase'])->get();
        $sectors = Sector::all();
        $phases = Phase::all();
        $lgas = Lga::all();
        $project_announcements = Announcement::with([])->where('announcement_type_id', 2)->latest()->paginate(15);
        return view('front.index', compact(['project_announcements','projects','sectors','phases','lgas']));
    }

}
