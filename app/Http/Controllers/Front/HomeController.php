<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Project;
use App\Models\Sector;
use App\Models\Phase;
use App\Models\Lga;
use App\Models\Setting;
use App\Models\Banner;
use App\Models\SponsoringAgency;

class HomeController extends Controller
{
    // Home Page
    public function index()
    {
        $banners = Banner::all();
        $banners->transform(function($banner) {
            $banner->short_description = strip_tags($banner->short_description);
            $banner->long_description = strip_tags($banner->long_description);
            return $banner;
        });
        $about = SponsoringAgency::first();
        return view('front.index', compact('banners', 'about'));
    }

    public function contact()
    {
        $settings = Setting::first();
        return view('front.contact', compact('settings'));
    }

    public function about(){
        $about = SponsoringAgency::first();
        return view('front.about', compact('about'));
    }

    public function calculator(){
        return view('front.calculator');
    }

    public function apply(){
        return view('front.apply');
    }

    public function form(){
        return view('front.form');
    }

    public function details(){
        return view('front.loan-details');
    }

}
