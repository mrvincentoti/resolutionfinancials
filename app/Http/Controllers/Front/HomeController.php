<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Announcement;

class HomeController extends Controller
{
    // Home Page
    public function index()
    {
        // Get the active posts with (Category and User) details
        //$posts = Post::published()->with(['category', 'user'])->latest('created_at')->paginate(10);

        // return view('front.index', compact('posts'));
        $project_announcements = Announcement::with([])->where('announcement_type_id', 2)->latest()->paginate(15);
        return view('front.index', compact(['project_announcements']));
    }

}
