@extends('Admin_Pages.admin')

@section('title', 'Manage Projects Details')

@section('content')

{{-- Error Messages --}}
@if ($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="d-flex justify-content-center">

    <div class="card shadow-lg border-0" style="width: 100%; max-width: 700px;">
        <div class="card-body p-4">

            <h3 class="mb-4">Add Project</h3>


            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
                @endforeach
            </div>
            @endif

            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="mb-3">
                    <label class="form-label">Project Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter project title" required>
                </div>


                <div class="mb-3">
                    <label class="form-label">Tech Stack</label>
                    <input type="text" name="tech_stack" class="form-control" placeholder="Laravel, React..." required>
                </div>


                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="4" placeholder="Describe your project..." required></textarea>
                </div>


                <div class="mb-3">
                    <label class="form-label">Project Image</label>
                    <input type="file" name="image_path" class="form-control" accept="image/*">
                </div>


                <div class="mb-3">
                    <label class="form-label">GitHub Link</label>
                    <input type="url" name="github_link" class="form-control" placeholder="https://github.com/...">
                </div>


                <div class="mb-3">
                    <label class="form-label">Live Link</label>
                    <input type="url" name="live_link" class="form-control" placeholder="https://yourproject.com">
                </div>


                <button type="submit" class="btn btn-primary w-100">
                    Create Project
                </button>

            </form>

        </div>
    </div>

</div>

@endsection