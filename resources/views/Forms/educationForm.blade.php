@extends('Admin_Pages.admin')

@section('title' , 'Manage Education details')

@section('content')

<form action="{{ route('education.store') }}" method="POST">
    @csrf

    <div>
        <label for="degree">Degree</label>
        <input type="text" name="degree" id="degree" required>
    </div>

    <div>
        <label for="institution">Institution</label>
        <input type="text" name="institution" id="institution" required>
    </div>

    <div>
        <label for="start_year">Start Year</label>
        <input type="text" name="start_year" id="start_year" required>
    </div>

    <div>
        <label for="end_year">End Year</label>
        <input type="text" name="end_year" id="end_year" required>
    </div>

    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>
    </div>

    <button type="submit">Add Education</button>
</form>

@endsection