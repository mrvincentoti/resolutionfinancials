<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AnnouncementRequest;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\AnnouncementType;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = Announcement::with([])->latest()->paginate(15);
        return view("admin.announcement.index", compact("announcements"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AnnouncementRequest $request)
    {
        $announcement_data = $request->safe()->except('document');

        if ($request->hasfile('document')) {
            $get_file = $request->file('document')->store('images/announcement');
            $announcement_data['document'] = $get_file;
        }
        $announcement = Announcement::create($announcement_data);

        return back()->with('success', 'Your data has been saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Announcement $announcement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $announcement)
    {
        $types = AnnouncementType::all();
        return view('admin.announcement.edit', compact('announcement', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AnnouncementRequest $request, Announcement $announcement)
    {
        $announcement_data = $request->safe()->except('document');

        if ($request->hasfile('document')) {
            // Delete the old image if exists
            if ($announcement->document) {
                Storage::delete($announcement->document);
            }
            // Store the new image and save the path
            $get_file = $request->file('document')->store('images/announcement');
            $announcement_data['document'] = $get_file;
        }

        $announcement->update($announcement_data);

        return redirect()->route('admin.announcement.index')->with('message', 'Announcement Document updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement)
    {
        //
    }
}
