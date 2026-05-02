@extends('Admin_Pages.admin')

@section('title', 'Manage Experience Details')

@section('content')

<div class="container mt-4">
    <div class="card shadow-lg p-4 rounded-4">
        <h3 class="mb-4 text-center">Add Experience</h3>

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

        <form action="{{ route('experiences.store') }}" method="POST">
            @csrf

            {{-- Job Title --}}
            <div class="mb-3">
                <label class="form-label">Job Title</label>
                <input type="text" name="job_title"
                    class="form-control"
                    value="{{ old('job_title') }}"
                    placeholder="Enter job title">
            </div>

            {{-- Company --}}
            <div class="mb-3">
                <label class="form-label">Company</label>
                <input type="text" name="company"
                    class="form-control"
                    value="{{ old('company') }}"
                    placeholder="Enter company name">
            </div>

            {{-- Dates --}}
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Start Date</label>
                    <input type="date" name="start_date"
                        class="form-control"
                        value="{{ old('start_date') }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">End Date</label>
                    <input type="date" name="end_date"
                        id="end_date"
                        class="form-control"
                        value="{{ old('end_date') }}">
                </div>
            </div>

            {{-- Checkbox --}}
            <div class="mb-3 form-check">
                <input type="hidden" name="is_current" value="0">
                <input type="checkbox" name="is_current" value="1"
                    id="is_current"
                    class="form-check-input"
                    {{ old('is_current') ? 'checked' : '' }}>
                <label class="form-check-label">Currently Working Here</label>
            </div>

            {{-- Description --}}
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description"
                    class="form-control"
                    rows="4"
                    placeholder="Write your experience...">{{ old('description') }}</textarea>
            </div>

            {{-- Submit --}}
            <div class="text-center">
                <button type="submit" class="btn btn-primary px-4">
                    Add Experience
                </button>
            </div>
        </form>
    </div>
</div>

{{-- JS for disabling end date --}}
<script>
    const checkbox = document.getElementById('is_current');
    const endDate = document.getElementById('end_date');

    function toggleEndDate() {
        endDate.disabled = checkbox.checked;
    }

    checkbox.addEventListener('change', toggleEndDate);
    window.onload = toggleEndDate;
</script>

@endsection