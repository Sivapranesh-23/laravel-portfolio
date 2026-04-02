@extends('layouts.admin')

@section('content')

<h2 class="mb-4">Projects</h2>

<a href="/admin/projects/create" class="btn btn-primary mb-3">Add Project</a>

<table class="table table-dark table-hover">
    <thead>
        <tr>
            <th>Title</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach($projects as $project)
        <tr>
            <td>{{ $project->title }}</td>

            <td>
                <img src="{{ asset('storage/'.$project->image) }}" width="60">
            </td>

            <td>
                <a href="/admin/projects/{{ $project->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

                <form action="/admin/projects/{{ $project->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection