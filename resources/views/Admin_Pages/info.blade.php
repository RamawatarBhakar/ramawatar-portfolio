@extends('Admin_Pages.admin')

@section('title', 'Manage Personal Info Details')

@section('content')

<h3>{{ session('success') }}</h3>

<table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Tagline</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Location</th>
        <th>About Me</th>
        <th>GitHub URL</th>
        <th>LinkedIn URL</th>
        <th>Profile Image</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    @foreach($data as $i)
    <tr>
        <td>{{ $i->name }}</td>
        <td>{{ $i->tagline }}</td>
        <td>{{ $i->email }}</td>
        <td>{{ $i->phone }}</td>
        <td>{{ $i->location }}</td>
        <td>{{ $i->about_me }}</td>

        <td>
            @if($i->github_url)
            <a href="{{ $i->github_url }}" target="_blank">
                GitHub
            </a>
            @else
            N/A
            @endif
        </td>

        <td>
            @if($i->linkedin_url)
            <a href="{{ $i->linkedin_url }}" target="_blank">
                LinkedIn
            </a>
            @else
            N/A
            @endif
        </td>

        <td>
            @if($i->profile_image)
            <img src="{{ asset('storage/' . $i->profile_image) }}"
                width="80"
                height="60">
            @else
            No Image
            @endif
        </td>

        <td>
            <a href="{{ route('infoEdit', $i->id) }}">
                Edit
            </a>
        </td>

        <td>
            <a href="{{ route('deleteInfo', $i->id) }}">
                Delete
            </a>
        </td>
    </tr>
    @endforeach

</table>

<br><br>

<a href="/infoForm">
    New Personal Info
</a>

@endsection