@extends('Admin_Pages.admin')

@section('title', 'Manage Experience Details')

@section('content')

<h3>{{ session('success') }}</h3>

<table border="1" cellpadding="10">
    <tr>
        <th>Job Title</th>
        <th>Company</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Current Job</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    @foreach($data as $i)
    <tr>
        <td>{{ $i->job_title }}</td>
        <td>{{ $i->company }}</td>
        <td>{{ $i->start_date }}</td>
        <td>{{ $i->end_date }}</td>

        <td>
            {{ $i->is_current ? 'Yes' : 'No' }}
        </td>

        <td>{{ $i->description }}</td>

        <td>
            <a href="{{ route('experienceEdit', $i->id) }}">
                Edit
            </a>
        </td>

        <td>
            <a href="{{ route('deleteExperience', $i->id) }}">
                Delete
            </a>
        </td>
    </tr>
    @endforeach

</table>

<br><br>

<a href="/experinceForm">
    New Experience
</a>

@endsection