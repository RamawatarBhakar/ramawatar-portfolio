@extends('Admin_Pages.admin')

@section('title' , 'Manage Skill details')

@section('content')

<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4>Skills</h4>

        <a href="/skillForm" class="btn btn-primary">
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
                        <th>Skill</th>
                        <th>Proficiency</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($data as $i)
                    <tr>

                        <td>
                            <strong>{{ $i->name }}</strong>
                        </td>

                        <td style="width:200px;">
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-success"
                                    style="width: {{ $i->proficiency * 10 }}%">
                                </div>
                            </div>
                            <small>{{ $i->proficiency }}/10</small>
                        </td>

                        <td class="text-center">
                            <a href="{{ route('skillEdit', $i->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <a href="{{ route('skillDelete', $i->id) }}"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Delete this skill?')">
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

            <h5>{{ $i->name }}</h5>

            <div class="progress mb-2" style="height: 8px;">
                <div class="progress-bar bg-success"
                    style="width: {{ $i->proficiency * 10 }}%">
                </div>
            </div>

            <small class="text-muted">{{ $i->proficiency }}/10</small>

            <div class="d-flex gap-2 mt-3">
                <a href="{{ route('skillEdit', $i->id) }}" class="btn btn-warning btn-sm w-50">
                    Edit
                </a>

                <a href="{{ route('skillDelete', $i->id) }}"
                    class="btn btn-danger btn-sm w-50"
                    onclick="return confirm('Delete this skill?')">
                    Delete
                </a>
            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection