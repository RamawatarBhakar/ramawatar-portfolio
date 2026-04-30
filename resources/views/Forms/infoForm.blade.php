@extends('Admin_Pages.admin')

@section('title' , 'Manage Persional info')

@section('content')

<form action="{{ route('personal_info.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
    </div>

    <div>
        <label for="tagline">Tagline</label>
        <input type="text" name="tagline" id="tagline" required>
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
    </div>

    <div>
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" required>
    </div>

    <div>
        <label for="location">Location</label>
        <input type="text" name="location" id="location">
    </div>

    <div>
        <label for="about_me">About Me</label>
        <textarea name="about_me" id="about_me" required></textarea>
    </div>

    <div>
        <label for="github_url">GitHub URL</label>
        <input type="url" name="github_url" id="github_url">
    </div>

    <div>
        <label for="linkedin_url">LinkedIn URL</label>
        <input type="url" name="linkedin_url" id="linkedin_url">
    </div>

    <div>
        <label for="profile_image">Profile Image</label>
        <input type="file" name="profile_image" id="profile_image" accept="image/*">
    </div>

    <button type="submit">Save Personal Info</button>
</form>

@endsection