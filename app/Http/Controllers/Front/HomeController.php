<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Project;
use App\Models\Sector;
use App\Models\Phase;
use App\Models\Lga;
use App\Models\Setting;


class HomeController extends Controller
{
    public function s1(){
        return view('front.sample.s1');
    }

    public function s2()
    {
        return view('front.sample.s2');
    }
    // Home Page
    public function index()
    {
        // Get the active posts with (Category and User) details
        //$posts = Post::published()->with(['category', 'user'])->latest('created_at')->paginate(10);

        // return view('front.index', compact('posts'));
        $projects = Project::with(['sector', 'phase'])->get();
        //dd($projects);
        $sectors = Sector::all();
        $phases = Phase::all();
        $lgas = Lga::all();
        $project_announcements = Announcement::with([])->where('announcement_type_id', 2)->latest()->paginate(15);
        $banners = Project::with(['sector', 'phase'])->orderBy('created_at', 'desc')->take(3)->get();

        $pro_projects  = Project::with(['sector', 'phase'])->where('phase_id', 1)->count();
        $dev_projects  = Project::with(['sector', 'phase'])->where('phase_id', 2)->count();
        $imp_projects  = Project::with(['sector', 'phase'])->where('phase_id', 3)->count();
        $prep_projects = Project::with(['sector', 'phase'])->where('phase_id', 4)->count();

        $latest_projects = Project::with(['sector', 'phase'])->orderBy('created_at', 'desc')->take(6)->get();

        $settings = Setting::first();

        return view('front.index', compact(['project_announcements','projects','sectors','phases','lgas', 'banners','pro_projects','dev_projects','imp_projects','prep_projects','latest_projects','settings']));
    }

    public function contact()
    {
        $settings = Setting::first();
        return view('front.contact', compact('settings'));
    }

}
