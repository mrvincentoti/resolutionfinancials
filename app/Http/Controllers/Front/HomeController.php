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
    // Home Page
    public function index()
    {
        return view('front.index');
    }

    public function contact()
    {
        $settings = Setting::first();
        return view('front.contact', compact('settings'));
    }

    public function about(){
        return view('front.about');
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

}
