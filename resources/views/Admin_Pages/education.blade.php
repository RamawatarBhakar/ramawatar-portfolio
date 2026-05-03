@extends('Admin_Pages.admin')

@section('title', 'Manage Education Details')

@section('content')

<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4>Education</h4>

        <a href="/educationForm" class="btn btn-primary">
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
                        <th>Degree</th>
                        <th>Institution</th>
                        <th>Duration</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($data as $i)
                    <tr>

                        <td>
                            <strong>{{ $i->degree }}</strong>
                        </td>

                        <td>{{ $i->institution }}</td>

                        <td>
                            {{ $i->start_year }} - {{ $i->end_year }}
                        </td>

                        <td style="max-width:250px; white-space: normal;">
                            {{ Str::limit($i->description, 80) }}
                        </td>

                        <td class="text-center">
                            <a href="{{ route('educationEdit', $i->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <a href="{{ route('deleteEduInfo', $i->id) }}"
                                class="btn btn-danger btn-sm"
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

    <!-- Mobile Cards -->
    <div class="d-md-none">

        @foreach($data as $i)

        <div class="card mb-3 shadow-sm p-3">

            <h5 class="mb-1">{{ $i->degree }}</h5>
            <small class="text-muted">{{ $i->institution }}</small>

            <p class="text-muted mt-2 mb-1">
                {{ $i->start_year }} - {{ $i->end_year }}
            </p>

            <p class="mb-2">
                {{ Str::limit($i->description, 100) }}
            </p>

            <div class="d-flex gap-2">
                <a href="{{ route('educationEdit', $i->id) }}" class="btn btn-warning btn-sm w-50">
                    Edit
                </a>

                <a href="{{ route('deleteEduInfo', $i->id) }}"
                    class="btn btn-danger btn-sm w-50"
                    onclick="return confirm('Delete this record?')">
                    Delete
                </a>
            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection