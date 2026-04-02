@extends('layouts.app')

@section('content')

<!-- HERO -->
<div class="hero text-center">
    <div class="container">

        <h1 class="display-4 fw-bold">
            Hi, I'm <span style="color:#d6a77a;">Laravel Developer</span>
        </h1>

        <p class="mt-3 text-muted fs-5">
            I build scalable, secure and modern web applications
        </p>

        <div class="card-custom">

            <img src="{{ asset('storage/'.$project->image) }}" 
                class="img-fluid rounded mb-3">

            <h5 class="fw-semibold">{{ $project->title }}</h5>

            <p class="text-muted small">
                {{ Str::limit($project->description, 90) }}
            </p>

            <a href="/projects/{{ $project->slug }}" 
            class="btn btn-sm btn-custom">
            View Project
            </a>

        </div>

    </div>
</div>

<!-- PROJECTS -->
<div class="section">
    <div class="container">

        <h2 class="mb-4">Latest Projects</h2>

        <div class="row">

            @foreach($projects as $project)

                <div class="col-md-4 mb-4">
                    <div class="card-custom">

                        <img src="{{ asset('storage/'.$project->image) }}" 
                             class="img-fluid rounded mb-3">

                        <h5>{{ $project->title }}</h5>

                        <p class="text-muted">
                            {{ Str::limit($project->description, 80) }}
                        </p>

                        <a href="/projects/{{ $project->slug }}" class="btn btn-sm btn-custom">
                            View Project
                        </a>

                    </div>
                </div>

            @endforeach

        </div>

    </div>
</div>

<!-- EXPERIENCE -->
<div class="section">
    <div class="container">

        <h2 class="mb-4">Experience</h2>

        @foreach(\App\Models\Experience::latest()->take(2)->get() as $exp)

            <div class="card-custom mb-3">

                <h5>
                    {{ $exp->role }}

                    @if($exp->type == 'internship')
                        <span class="badge bg-success">Internship</span>
                    @endif
                </h5>

                <p class="text-muted">
                    {{ $exp->company }} • {{ $exp->duration }}
                </p>

            </div>

        @endforeach

    </div>
</div>

@endsection