@extends('layouts.app')

@section('content')

<div class="max-w-4xl mx-auto p-6">

    <h1 class="text-3xl font-bold mb-4">{{ $project->title }}</h1>

    @if($project->image)
        <img src="{{ asset('storage/'.$project->image) }}" class="mb-4 rounded">
    @endif

    <p class="mb-4">{{ $project->description }}</p>

    <div class="space-x-4">
        @if($project->live_link)
            <a href="{{ $project->live_link }}" target="_blank"
               class="bg-green-500 text-white px-4 py-2 rounded">
               Live Demo
            </a>
        @endif

        @if($project->github_link)
            <a href="{{ $project->github_link }}" target="_blank"
               class="bg-gray-800 text-white px-4 py-2 rounded">
               GitHub
            </a>
        @endif
    </div>

</div>

@endsection