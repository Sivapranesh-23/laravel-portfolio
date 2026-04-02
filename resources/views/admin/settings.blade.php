@extends('layouts.admin')

@section('content')

<div class="max-w-xl">

    <h1 class="text-2xl font-bold mb-4">Upload Resume</h1>

    {{-- ✅ Success Message --}}
    @if(session('success'))
        <div class="bg-green-500 text-white p-2 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    {{-- ✅ Upload Form --}}
    <form method="POST" action="/admin/settings" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block mb-2 font-semibold">Select Resume (PDF)</label>
            <input type="file" name="resume" class="border p-2 w-full">
        </div>

        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Upload Resume
        </button>
    </form>

    {{-- ✅ Show Existing Resume --}}
    @if(isset($setting) && $setting->resume)
        <div class="mt-6">
            <p class="font-semibold mb-2">Current Resume:</p>

            <a href="{{ asset('storage/'.$setting->resume) }}" 
               target="_blank"
               class="text-blue-500 underline">
               View Resume
            </a>
        </div>
    @endif

</div>

@endsection