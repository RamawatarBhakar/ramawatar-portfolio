@extends('Admin_Pages.admin')

@section('title' , 'Manage Projects Details')

@section('content')
<form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>
    </div>

    <div>
        <label for="tech_stack">Tech Stack</label>
        <input type="text" name="tech_stack" id="tech_stack" required>
    </div>

    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" required></textarea>
    </div>

    <div>
        <label for="image_path">Image</label>
        <input type="file" name="image_path" id="image_path" accept="image/*">
    </div>

    <div>
        <label for="github_link">GitHub Link</label>
        <input type="url" name="github_link" id="github_link">
    </div>

    <div>
        <label for="live_link">Live Link</label>
        <input type="url" name="live_link" id="live_link">
    </div>

    <button type="submit">Create Project</button>
</form>

@endsection