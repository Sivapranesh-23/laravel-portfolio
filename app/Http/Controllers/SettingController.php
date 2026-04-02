<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
{
    $setting = Setting::first();
    return view('admin.settings', compact('setting'));
}

public function store(Request $request)
{
    $request->validate([
        'resume' => 'required|file|mimes:pdf'
    ]);

    $path = $request->file('resume')->store('resume', 'public');

    Setting::updateOrCreate(
        ['id' => 1],
        ['resume' => $path]
    );

    return back()->with('success', 'Resume updated!');
    }
}