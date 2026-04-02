<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $projects = Project::latest()->get();
    return view('frontend.projects.index', compact('projects'));
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
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'nullable|image'
    ]);

    $imagePath = null;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('projects', 'public');
    }

    Project::create([
        'title' => $request->title,
        'slug' => Str::slug($request->title),
        'description' => $request->description,
        'image' => $imagePath,
        'live_link' => $request->live_link,
        'github_link' => $request->github_link,
    ]);

    return redirect('/admin/projects');
}

    /**
     * Display the specified resource.
     */
    public function show($slug)
{
    $project = Project::where('slug', $slug)->firstOrFail();
    return view('frontend.projects.show', compact('project'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
{
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('projects', 'public');
        $project->image = $imagePath;
    }

    $project->update($request->only([
        'title', 'description', 'live_link', 'github_link'
    ]));

    return redirect('/admin/projects');
}

public function destroy(Project $project)
{
    $project->delete();
    return redirect('/admin/projects');
}

    public function adminIndex()
{
    $projects = Project::latest()->get();
    return view('admin.projects.index', compact('projects'));
}
}
