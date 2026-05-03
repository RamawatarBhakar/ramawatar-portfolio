@extends('Admin_Pages.admin')

@section('title', 'Manage Personal Info Details')

@section('content')

<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Personal Info</h4>

        <a href="/infoForm" class="btn btn-primary">
            + Add New
        </a>
    </div>

    <!-- Success Message -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Table Card -->
    <div class="card shadow-sm">
        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0">

                    <thead class="table-dark text-center">
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>About</th>
                            <th>Links</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($data as $i)
                        <tr>

                            <!-- Profile -->
                            <td class="text-center">
                                @if($i->profile_image)
                                <img src="{{ asset('storage/' . $i->profile_image) }}"
                                    class="rounded-circle"
                                    width="50"
                                    height="50"
                                    style="object-fit: cover;">
                                @else
                                <span class="text-muted">No Image</span>
                                @endif
                            </td>

                            <!-- Name -->
                            <td>
                                <strong>{{ $i->name }}</strong><br>
                                <small class="text-muted">{{ $i->tagline }}</small>
                            </td>

                            <!-- Contact -->
                            <td style="white-space: normal;">
                                <div>{{ $i->email }}</div>
                                <div class="text-muted small">{{ $i->phone }}</div>
                                <div class="text-muted small">{{ $i->location }}</div>
                            </td>

                            <!-- About -->
                            <td style="max-width: 250px; white-space: normal;">
                                {{ Str::limit($i->about_me, 80) }}
                            </td>

                            <!-- Links -->
                            <td style="white-space: normal;">
                                @if($i->github_url)
                                <a href="{{ $i->github_url }}" target="_blank" class="d-block text-decoration-none">
                                    GitHub
                                </a>
                                @endif

                                @if($i->linkedin_url)
                                <a href="{{ $i->linkedin_url }}" target="_blank" class="d-block text-decoration-none">
                                    LinkedIn
                                </a>
                                @endif
                            </td>

                            <!-- Actions -->
                            <td class="text-center">
                                <a href="{{ route('infoEdit', $i->id) }}" class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <a href="{{ route('deleteInfo', $i->id) }}"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">
                                    Delete
                                </a>
                            </td>

                        </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>
    </div>

</div>

@endsection