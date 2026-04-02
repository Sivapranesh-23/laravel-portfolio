@extends('layouts.app')

@section('content')

<div class="max-w-5xl mx-auto p-6">

    <h1 class="text-3xl font-bold mb-6">Education</h1>

    @forelse($educations as $edu)
        <div class="bg-white shadow-lg rounded-xl p-5 mb-4 hover:scale-105 transition">

            <h2 class="text-xl font-bold">{{ $edu->degree }}</h2>

            <p class="text-gray-600">{{ $edu->institution }}</p>

            <p class="text-gray-500">
                {{ $edu->year }}
                @if($edu->score)
                    • {{ $edu->score }}
                @endif
            </p>

        </div>
    @empty
        <p class="text-gray-500">No education details added yet.</p>
    @endforelse

</div>

@endsection