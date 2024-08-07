<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $announcements = Announcement::with([])->latest()->paginate(15);
        // return view("front.announcement.index", compact("announcements"));

        $general_announcements = Announcement::with([])->where('announcement_type_id', 1)->latest()->paginate(15);
        $project_announcements = Announcement::with([])->where('announcement_type_id', 2)->latest()->paginate(15);

        return view("front.announcement.index", compact(['general_announcements', 'project_announcements']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function show($slug)
    {
        // Fetch announcement by slug with necessary relations
        $announcement = Announcement::where('slug', $slug)->firstOrFail();

        return view('front.announcement.show', compact('announcement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Announcement $announcement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement)
    {
        //
    }
}
