@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto p-6">

    <h1 class="text-3xl font-bold mb-6">My Projects</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        @foreach($projects as $project)
        <div class="bg-white shadow rounded-lg overflow-hidden">

            @if($project->image)
                <img src="{{ asset('storage/'.$project->image) }}" class="w-full h-48 object-cover">
            @endif

            <div class="p-4">
                <h2 class="text-xl font-semibold">{{ $project->title }}</h2>
                <p class="text-gray-600 mt-2">
                    {{ Str::limit($project->description, 80) }}
                </p>

                <a href="/projects/{{ $project->slug }}" 
                   class="inline-block mt-3 text-blue-500">
                    View Details →
                </a>
            </div>

        </div>
        @endforeach

    </div>

</div>

@endsection