@extends('layouts.app')

@section('content')

<div class="section">
    <div class="container">

        <h2 class="mb-4">Experience</h2>

        @forelse($experiences as $exp)

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

                <p>
                    {{ $exp->description }}
                </p>

            </div>

        @empty

            <p class="text-muted">No experience added yet.</p>

        @endforelse

    </div>
</div>

@endsection