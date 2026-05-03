@extends('Admin_Pages.admin')

@section('title', 'Manage Project Details')

@section('content')

<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4>Projects</h4>

        <a href="/projectForm" class="btn btn-primary">
            + Add New
        </a>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Desktop Table -->
    <div class="card shadow-sm d-none d-md-block">
        <div class="table-responsive">

            <table class="table table-hover align-middle mb-0">

                <thead class="table-dark text-center">
                    <tr>
                        <th>Project</th>
                        <th>Tech Stack</th>
                        <th>Description</th>
                        <th>Links</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($data as $i)
                    <tr>

                        <!-- Project -->
                        <td>
                            <div class="d-flex align-items-center gap-3">

                                @if($i->image_path)
                                <img src="{{ asset('storage/' . $i->image_path) }}"
                                    width="60" height="45"
                                    style="object-fit: cover; border-radius: 6px;">
                                @endif

                                <div>
                                    <strong>{{ $i->title }}</strong>
                                </div>

                            </div>
                        </td>

                        <!-- Tech -->
                        <td>{{ $i->tech_stack }}</td>

                        <!-- Description -->
                        <td style="max-width:250px; white-space: normal;">
                            {{ Str::limit($i->description, 80) }}
                        </td>

                        <!-- Links -->
                        <td>
                            @if($i->github_link)
                            <a href="{{ $i->github_link }}" target="_blank" class="d-block">
                                GitHub
                            </a>
                            @endif

                            @if($i->live_link)
                            <a href="{{ $i->live_link }}" target="_blank">
                                Live
                            </a>
                            @endif
                        </td>

                        <!-- Actions -->
                        <td class="text-center">
                            <a href="{{ route('projectEdit', $i->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <a href="{{ route('deleteProject', $i->id) }}"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Delete this project?')">
                                Delete
                            </a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>

    <!-- Mobile Cards -->
    <div class="d-md-none">

        @foreach($data as $i)

        <div class="card mb-3 shadow-sm p-3">

            @if($i->image_path)
            <img src="{{ asset('storage/' . $i->image_path) }}"
                class="w-100 mb-2"
                style="height:150px; object-fit: cover; border-radius:8px;">
            @endif

            <h5>{{ $i->title }}</h5>

            <p class="text-muted mb-1">
                {{ $i->tech_stack }}
            </p>

            <p>
                {{ Str::limit($i->description, 100) }}
            </p>

            <div class="mb-2">
                @if($i->github_link)
                <a href="{{ $i->github_link }}" target="_blank" class="me-2">
                    GitHub
                </a>
                @endif

                @if($i->live_link)
                <a href="{{ $i->live_link }}" target="_blank">
                    Live
                </a>
                @endif
            </div>

            <div class="d-flex gap-2">
                <a href="{{ route('projectEdit', $i->id) }}" class="btn btn-warning btn-sm w-50">
                    Edit
                </a>

                <a href="{{ route('deleteProject', $i->id) }}"
                    class="btn btn-danger btn-sm w-50"
                    onclick="return confirm('Delete this project?')">
                    Delete
                </a>
            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection