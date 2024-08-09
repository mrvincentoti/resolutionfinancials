<?php

namespace App\Traits;

use App\Models\Post;
use App\Models\Banner;
use App\Models\Project;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

trait SlugCreater
{
    public function createSlug(Request $request, $model)
    {
        $slug = Str::slug($model == Post::class ? $request->title : $request->name);

        if ($model::where('slug', $slug)->exists()) {
            $slug = $slug . '-' . Str::random(2);
        }

        return $slug;
    }

    public function createBannerSlug(Request $request, $model)
    {
        $slug = Str::slug($model == Banner::class ? $request->title : $request->name);

        if ($model::where('slug', $slug)->exists()) {
            $slug = $slug . '-' . Str::random(2);
        }

        return $slug;
    }

    public function createProjectSlug(Request $request, $model)
    {
        $slug = Str::slug($model == Project::class ? $request->project_title : $request->name);

        if ($model::where('slug', $slug)->exists()) {
            $slug = $slug . '-' . Str::random(2);
        }

        return $slug;
    }

    public function createAnnouncementSlug(Request $request, $model)
    {
        $slug = Str::slug($model == Announcement::class ? $request->announcement_title : $request->name);

        if ($model::where('slug', $slug)->exists()) {
            $slug = $slug . '-' . Str::random(2);
        }

        return $slug;
    }
}
