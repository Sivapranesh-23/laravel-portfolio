@extends('layouts.admin')

@section('content')

<h1 class="text-2xl font-bold mb-4">Projects</h1>

<a href="{{ route('projects.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">
    Add Project
</a>

<table class="w-full mt-4 bg-white">
    <tr>
        <th class="p-2">Title</th>
        <th>Actions</th>
    </tr>

    @foreach($projects as $project)
    <tr class="border-t">
        <td class="p-2">{{ $project->title }}</td>
        <td>
            <a href="{{ route('projects.edit', $project->id) }}" class="text-blue-500">Edit</a>

            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button class="text-red-500">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection