@extends('layouts.app')

@section('content')

<!-- HERO -->
<div class="container text-center py-5">
    <h1 class="display-4 fw-bold">Hi, I'm a Laravel Developer</h1>
    <p class="lead text-secondary">
        I build modern, scalable and secure web applications
    </p>

    <div class="mt-4">
        <a href="/projects" class="btn btn-custom px-4 me-2">View Projects</a>

        @php
            $setting = \App\Models\Setting::first();
        @endphp

        @if($setting && $setting->resume)
            <a href="{{ asset('storage/'.$setting->resume) }}" 
               target="_blank"
               class="btn btn-outline-light px-4">
                Download Resume
            </a>
        @endif
    </div>
</div>

<!-- PROJECTS -->
<div class="container py-5">
    <h2 class="mb-4">Latest Projects</h2>

    <div class="row">
        @foreach(\App\Models\Project::latest()->take(3)->get() as $project)
            <div class="col-md-4 mb-4">
                <div class="glass card-hover">

                    <img src="{{ asset('storage/'.$project->image) }}" 
                         class="img-fluid rounded mb-3">

                    <h5>{{ $project->title }}</h5>
                    <p class="text-secondary">
                        {{ Str::limit($project->description, 80) }}
                    </p>

                    <a href="/projects/{{ $project->slug }}" class="btn btn-sm btn-custom">
                        View
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- EXPERIENCE -->
<div class="container py-5">
    <h2 class="mb-4">Experience</h2>

    @foreach(\App\Models\Experience::latest()->take(2)->get() as $exp)
        <div class="glass mb-3">
            <h5>{{ $exp->role }} @if($exp->type == 'internship') 
                <span class="badge bg-success">Internship</span> 
            @endif</h5>

            <p class="text-secondary">{{ $exp->company }} • {{ $exp->duration }}</p>
        </div>
    @endforeach
</div>

@endsection