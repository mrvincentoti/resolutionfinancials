<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AnnouncementRequest;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\AnnouncementType;
use App\Traits\SlugCreater;

class AnnouncementController extends Controller
{
    use SlugCreater;

    public function __construct()
    {
        $this->authorizeResource(Announcement::class, 'announcement');
    }
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

        if ($request->hasFile('document')) {
            // Get the file from the request
            $file = $request->file('document');
            // Generate a unique filename with extension
            $filename = time() . '-' . $file->getClientOriginalName();
            // Define the path to store the file
            $destinationPath = public_path('images/announcement');
            // Move the file to the public/images/announcement directory
            $file->move($destinationPath, $filename);
            // Store the filename in the announcement data
            $announcement_data['document'] = 'images/announcement/' . $filename;
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

        if ($request->hasFile('document')) {
            // Delete the old document if it exists
            if ($announcement->document) {
                $oldFilePath = public_path($announcement->document);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            // Get the new file from the request
            $file = $request->file('document');
            // Generate a unique filename with extension
            $filename = time() . '-' . $file->getClientOriginalName();
            // Define the path to store the file
            $destinationPath = public_path('images/announcement');
            // Move the file to the public/images/announcement directory
            $file->move($destinationPath, $filename);
            // Store the filename in the announcement data
            $announcement_data['document'] = 'images/announcement/' . $filename;
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

    public function getSlug(Request $request)
    {
        $slug = $this->createAnnouncementSlug($request, Announcement::class);

        return response()->json(['slug' => $slug]);
    }
}
