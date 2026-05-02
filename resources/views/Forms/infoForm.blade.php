@extends('Admin_Pages.admin')

@section('title', 'Manage Personal Info')

@section('content')

<div class="d-flex justify-content-center">

    <div class="card shadow-lg border-0" style="width: 100%; max-width: 700px;">

        <div class="card-body p-4">

            <h3 class="mb-4">Add Personal Info</h3>


            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
                @endforeach
            </div>
            @endif

            <form action="{{ route('personal_info.store') }}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>


                <div class="mb-3">
                    <label class="form-label">Tagline</label>
                    <input type="text" name="tagline" class="form-control" required>
                </div>


                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>


                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>


                <div class="mb-3">
                    <label class="form-label">Location</label>
                    <input type="text" name="location" class="form-control">
                </div>


                <div class="mb-3">
                    <label class="form-label">About</label>
                    <textarea name="about_me" class="form-control" rows="4"></textarea>
                </div>


                <div class="mb-3">
                    <label class="form-label">GitHub URL</label>
                    <input type="url" name="github_url" class="form-control">
                </div>


                <div class="mb-3">
                    <label class="form-label">LinkedIn URL</label>
                    <input type="url" name="linkedin_url" class="form-control">
                </div>


                <div class="mb-3">
                    <label class="form-label">Profile Image</label>
                    <input type="file" name="profile_image" class="form-control">
                </div>


                <button class="btn btn-primary w-100">
                    Save Personal Info
                </button>

            </form>

        </div>

    </div>

</div>

@endsection