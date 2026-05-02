@extends('Admin_Pages.admin')

@section('title', 'Manage Project Details')

@section('content')
@if(session('success'))
<p class="text-green-400 text-center">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>Title</th>
        <th>Tech Stack</th>
        <th>Description</th>
        <th>Image</th>
        <th>GitHub Link</th>
        <th>Live Link</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    @foreach($data as $i)
    <tr>
        <td>{{ $i->title }}</td>
        <td>{{ $i->tech_stack }}</td>
        <td>{{ $i->description }}</td>

        <td>
            @if($i->image_path)
            <img src="{{ asset('storage/' . $i->image_path) }}"
                width="80"
                height="60">
            @else
            No Image
            @endif
        </td>

        <td>
            @if($i->github_link)
            <a href="{{ $i->github_link }}" target="_blank">
                GitHub
            </a>
            @else
            N/A
            @endif
        </td>

        <td>
            @if($i->live_link)
            <a href="{{ $i->live_link }}" target="_blank">
                Live Demo
            </a>
            @else
            N/A
            @endif
        </td>

        <td>
            <a href="{{ route('projectEdit', $i->id) }}">
                Edit
            </a>
        </td>

        <td>
            <a href="{{ route('deleteProject', $i->id) }}">
                Delete
            </a>
        </td>
    </tr>
    @endforeach

</table>

<br><br>

<a href="/projectForm">
    New Project
</a>

@endsection