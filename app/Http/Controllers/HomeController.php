<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Experience;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->take(3)->get();
        $experiences = Experience::latest()->take(2)->get();
        $setting = Setting::first();

        return view('frontend.home', compact('projects', 'experiences', 'setting'));
    }
}