@extends('Admin_Pages.admin')

@section('title' , 'Manage Experince details')

@section('content')
<form action="{{ route('experiences.store') }}" method="POST">
    @csrf

    <div>
        <label for="job_title">Job Title</label>
        <input type="text" name="job_title" id="job_title" required>
    </div>

    <div>
        <label for="company">Company</label>
        <input type="text" name="company" id="company" required>
    </div>

    <div>
        <label for="start_date">Start Date</label>
        <input type="text" name="start_date" id="start_date" required>
    </div>

    <div>
        <label for="end_date">End Date</label>
        <input type="text" name="end_date" id="end_date">
    </div>

    <div>
        <label for="is_current">
            <input type="checkbox" name="is_current" id="is_current" value="1">
            Currently Working Here
        </label>
    </div>

    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" required></textarea>
    </div>

    <button type="submit">Add Experience</button>
</form>

@endsection