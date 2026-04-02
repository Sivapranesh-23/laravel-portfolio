@extends('layouts.admin')

@section('content')

<div class="row g-4">

    <div class="col-md-4">
        <div class="card-custom text-center">
            <h6>Total Projects</h6>
            <h2>{{ \App\Models\Project::count() }}</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-custom text-center">
            <h6>Education</h6>
            <h2>{{ \App\Models\Education::count() }}</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-custom text-center">
            <h6>Experience</h6>
            <h2>{{ \App\Models\Experience::count() }}</h2>
        </div>
    </div>

</div>

@endsection