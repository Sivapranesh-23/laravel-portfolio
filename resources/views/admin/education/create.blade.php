@extends('layouts.admin')

@section('content')

<h1 class="text-xl mb-4">Add Education</h1>

<form method="POST" action="{{ route('education.store') }}">
    @csrf

    <input type="text" name="degree" placeholder="Degree" class="border p-2 w-full mb-2">
    <input type="text" name="institution" placeholder="Institution" class="border p-2 w-full mb-2">
    <input type="text" name="year" placeholder="Year" class="border p-2 w-full mb-2">
    <input type="text" name="score" placeholder="Score" class="border p-2 w-full mb-2">

    <button class="bg-green-500 text-white px-4 py-2">Save</button>
</form>

@endsection