@extends('Admin_Pages.admin')

@section('title', 'Manage Experience Details')

@section('content')

<div class="container-fluid">

    {{-- Success Message --}}
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    {{-- Header --}}
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-3">
        <h4 class="mb-2 mb-md-0">Experience Details</h4>

        <a href="/experinceForm" class="btn btn-primary">
            + Add New
        </a>
    </div>

    {{-- ================= DESKTOP TABLE ================= --}}
    <div class="card shadow-sm d-none d-md-block">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">

                    <thead class="table-dark">
                        <tr>
                            <th>Job Title</th>
                            <th>Company</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>Current</th>
                            <th>Description</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $i)
                        <tr>
                            <td class="fw-semibold">{{ $i->job_title }}</td>
                            <td>{{ $i->company }}</td>
                            <td>{{ $i->start_date }}</td>
                            <td>{{ $i->end_date ?? '-' }}</td>

                            <td>
                                <span class="badge {{ $i->is_current ? 'bg-success' : 'bg-secondary' }}">
                                    {{ $i->is_current ? 'Yes' : 'No' }}
                                </span>
                            </td>

                            <td style="max-width:200px;">
                                {{ Str::limit($i->description, 60) }}
                            </td>

                            <td class="text-center">
                                <a href="{{ route('experienceEdit', $i->id) }}" class="btn btn-sm btn-warning me-1">Edit</a>
                                <a href="{{ route('deleteExperience', $i->id) }}"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Delete this record?')">
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

    {{-- ================= MOBILE CARDS ================= --}}
    <div class="d-md-none">

        @foreach($data as $i)
        <div class="card shadow-sm mb-3">
            <div class="card-body">

                <h5 class="fw-bold mb-1">{{ $i->job_title }}</h5>
                <p class="mb-1 text-muted">{{ $i->company }}</p>

                <p class="mb-1">
                    <strong>Start:</strong> {{ $i->start_date }}
                </p>

                <p class="mb-1">
                    <strong>End:</strong> {{ $i->end_date ?? '-' }}
                </p>

                <p class="mb-2">
                    <span class="badge {{ $i->is_current ? 'bg-success' : 'bg-secondary' }}">
                        {{ $i->is_current ? 'Currently Working' : 'Completed' }}
                    </span>
                </p>

                <p class="text-muted small">
                    {{ Str::limit($i->description, 100) }}
                </p>

                <div class="d-flex justify-content-between mt-3">
                    <a href="{{ route('experienceEdit', $i->id) }}" class="btn btn-sm btn-warning w-50 me-1">
                        Edit
                    </a>

                    <a href="{{ route('deleteExperience', $i->id) }}"
                        class="btn btn-sm btn-danger w-50 ms-1"
                        onclick="return confirm('Delete this record?')">
                        Delete
                    </a>
                </div>

            </div>
        </div>
        @endforeach

    </div>

</div>

@endsection