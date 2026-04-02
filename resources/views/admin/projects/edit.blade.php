@extends('layouts.admin')

@section('content')

<h1>Edit Project</h1>

<form method="POST" action="{{ route('projects.update', $project->id) }}">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ $project->title }}" class="border p-2 w-full mb-2">
    
    <textarea name="description" class="border p-2 w-full mb-2">{{ $project->description }}</textarea>

    <input type="file" name="image" class="mb-2">

    <input type="text" name="live_link" value="{{ $project->live_link }}" class="border p-2 w-full mb-2">

    <input type="text" name="github_link" value="{{ $project->github_link }}" class="border p-2 w-full mb-2">

    <button class="bg-blue-500 text-white px-4 py-2">Update</button>
</form>

@endsection