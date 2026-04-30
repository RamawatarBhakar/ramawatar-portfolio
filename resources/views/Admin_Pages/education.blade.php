@extends('Admin_Pages.admin')

@section('title', 'Manage Education Details')

@section('content')

<h3>{{ session('success') }}</h3>

<table border="1" cellpadding="10">
    <tr>
        <th>Degree</th>
        <th>Institution</th>
        <th>Start Year</th>
        <th>End Year</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    @foreach($data as $i)
    <tr>
        <td>{{ $i->degree }}</td>
        <td>{{ $i->institution }}</td>
        <td>{{ $i->start_year }}</td>
        <td>{{ $i->end_year }}</td>
        <td>{{ $i->description }}</td>

        <td>
            <a href="{{ route('educationEdit', $i->id) }}">
                Edit
            </a>
        </td>

        <td>
            <a href="{{ route('deleteEduInfo', $i->id) }}">
                Delete
            </a>
        </td>
    </tr>
    @endforeach

</table>

<br><br>

<a href="/educationForm">
    New Education
</a>

@endsection