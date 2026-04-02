@extends('layouts.admin')

@section('content')

<h2 class="mb-4">Dashboard</h2>

<div class="row">

    <div class="col-md-3">
        <div class="card-custom">
            <h5>Total Projects</h5>
            <h3>{{ \App\Models\Project::count() }}</h3>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card-custom">
            <h5>Education</h5>
            <h3>{{ \App\Models\Education::count() }}</h3>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card-custom">
            <h5>Experience</h5>
            <h3>{{ \App\Models\Experience::count() }}</h3>
        </div>
    </div>

</div>

@endsection