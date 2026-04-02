@extends('layouts.admin')

@section('content')

<h1 class="text-xl mb-4">Add Project</h1>

<form method="POST" action="{{ route('projects.store') }}">
    @csrf

    <input type="text" name="title" placeholder="Title" class="border p-2 w-full mb-2">
    
    <textarea name="description" placeholder="Description" class="border p-2 w-full mb-2"></textarea>
    <input type="file" name="image" class="mb-2">

    <input type="text" name="live_link" placeholder="Live Link" class="border p-2 w-full mb-2">

    <input type="text" name="github_link" placeholder="GitHub Link" class="border p-2 w-full mb-2">

    <button class="bg-green-500 text-white px-4 py-2">Save</button>
</form>

@endsection