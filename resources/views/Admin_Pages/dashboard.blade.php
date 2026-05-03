@extends('Admin_Pages.admin')

@section('title' , 'Dashboard')

@section('content')

<div class="container-fluid">

    <!-- Welcome -->
    <div class="mb-4">
        <h3 class="fw-bold">Welcome, {{ Auth::user()->name }} 👋</h3>
        <p class="text-muted">Manage your portfolio from here</p>
    </div>

    <!-- Stats Cards -->
    <div class="row g-3 mb-4">

        <div class="col-md-3 col-6">
            <div class="card shadow-sm border-0 p-3">
                <h6 class="text-muted">Projects</h6>
                <h4 class="fw-bold">{{ \App\Models\Project::count() }}</h4>
            </div>
        </div>

        <div class="col-md-3 col-6">
            <div class="card shadow-sm border-0 p-3">
                <h6 class="text-muted">Skills</h6>
                <h4 class="fw-bold">{{ \App\Models\Skill::count() }}</h4>
            </div>
        </div>

        <div class="col-md-3 col-6">
            <div class="card shadow-sm border-0 p-3">
                <h6 class="text-muted">Experience</h6>
                <h4 class="fw-bold">{{ \App\Models\Experience::count() }}</h4>
            </div>
        </div>

        <div class="col-md-3 col-6">
            <div class="card shadow-sm border-0 p-3">
                <h6 class="text-muted">Education</h6>
                <h4 class="fw-bold">{{ \App\Models\Education::count() }}</h4>
            </div>
        </div>

    </div>

    <!-- Quick Actions -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">

            <h5 class="mb-3">Quick Actions</h5>

            <div class="d-flex flex-wrap gap-2">

                <a href="/projectForm" class="btn btn-primary btn-sm">
                    + Add Project
                </a>

                <a href="/skillForm" class="btn btn-success btn-sm">
                    + Add Skill
                </a>

                <a href="/educationForm" class="btn btn-warning btn-sm">
                    + Add Education
                </a>

                <a href="/experinceForm" class="btn btn-info btn-sm">
                    + Add Experience
                </a>

            </div>

        </div>
    </div>

    <!-- Recent Data Preview -->
    <div class="row g-3">

        <!-- Recent Projects -->
        <div class="col-md-6">
            <div class="card shadow-sm border-0 p-3">
                <h6 class="mb-3">Recent Projects</h6>

                @foreach(\App\Models\Project::latest()->take(3)->get() as $p)
                <div class="mb-2">
                    <strong>{{ $p->title }}</strong><br>
                    <small class="text-muted">{{ $p->tech_stack }}</small>
                </div>
                @endforeach

            </div>
        </div>

        <!-- Recent Skills -->
        <div class="col-md-6">
            <div class="card shadow-sm border-0 p-3">
                <h6 class="mb-3">Top Skills</h6>

                @foreach(\App\Models\Skill::orderBy('proficiency','desc')->take(3)->get() as $s)
                <div class="mb-2">
                    {{ $s->name }}
                    <div class="progress" style="height:6px;">
                        <div class="progress-bar bg-success"
                            style="width: {{ $s->proficiency * 10 }}%">
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>

</div>

@endsection