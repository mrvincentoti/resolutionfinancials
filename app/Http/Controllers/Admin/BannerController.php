<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BannerRequest;
use App\Models\Banner;
use App\Traits\SlugCreater;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    use SlugCreater;

    public function __construct()
    {
        $this->authorizeResource(Banner::class, 'banner');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::with([])->latest()->paginate(15);

        return view('admin.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $request)
    {
        $banner_data = $request->safe()->except('image');

        if ($request->hasfile('image')) {
            $get_file = $request->file('image')->store('images/banners');
            $banner_data['image'] = $get_file;
        }

        if ($request->hasFile('image')) {
            // Get the file from the request
            $file = $request->file('image');
            // Generate a unique filename with extension
            $filename = time() . '-' . $file->getClientOriginalName();
            // Define the path to store the file
            $destinationPath = public_path('images/banner');
            // Move the file to the public/images/announcement directory
            $file->move($destinationPath, $filename);
            // Store the filename in the announcement data
            $banner_data['image'] = 'images/banner/' . $filename;
        }

        $banner = Banner::create($banner_data);

        return to_route('admin.banner.index')->with('message', trans('admin.banner_created'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('admin.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BannerRequest $request, Banner $banner)
    {
        $banner_data = $request->safe()->except('image');

        if ($request->hasFile('image')) {
            // Delete the old document if it exists
            if ($banner->image) {
                $oldFilePath = public_path($banner->image);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            // Get the new file from the request
            $file = $request->file('image');
            // Generate a unique filename with extension
            $filename = time() . '-' . $file->getClientOriginalName();
            // Define the path to store the file
            $destinationPath = public_path('images/banner');
            // Move the file to the public/images/announcement directory
            $file->move($destinationPath, $filename);
            // Store the filename in the announcement data
            $banner_data['image'] = 'images/banner/' . $filename;
        }

        $banner->update($banner_data);

        return to_route('admin.banner.index')->with('message', trans('admin.banner_updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        if ($banner->image != null) {
            Storage::delete($banner->image);
        }
        $banner->delete();

        return back()->with('message', trans('admin.banner_deleted'));
    }

    public function getSlug(Request $request)
    {
        $slug = $this->createBannerSlug($request, Banner::class);

        return response()->json(['slug' => $slug]);
    }

    public function search(Request $request)
    {
        $searched_text = $request->input('search');

        $banners = Banner::query()->with([])
            ->where('title', 'LIKE', "%{$searched_text}%")
            ->orWhere('short_description', 'LIKE', "%{$searched_text}%")
            ->paginate(10);

        // Return the search view with the resluts
        return view('admin.banner.search', compact('banners'));
    }
}
