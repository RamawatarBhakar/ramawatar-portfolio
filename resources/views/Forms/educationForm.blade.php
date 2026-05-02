@extends('Admin_Pages.admin')

@section('title', 'Manage Education Details')

@section('content')

<div class="d-flex justify-content-center">

    <div class="card shadow-lg border-0" style="width: 100%; max-width: 700px;">
        <div class="card-body p-4">

            <h3 class="mb-4">Add Education</h3>

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

            <form action="{{ route('education.store') }}" method="POST">
                @csrf


                <div class="mb-3">
                    <label class="form-label">Degree</label>
                    <input type="text" name="degree"
                        class="form-control @error('degree') is-invalid @enderror"
                        value="{{ old('degree') }}" required>

                    @error('degree')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label">Institution</label>
                    <input type="text" name="institution"
                        class="form-control @error('institution') is-invalid @enderror"
                        value="{{ old('institution') }}" required>

                    @error('institution')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label">Start Year</label>
                    <input type="number" name="start_year"
                        class="form-control @error('start_year') is-invalid @enderror"
                        value="{{ old('start_year') }}" placeholder="2022" required>

                    @error('start_year')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label">End Year</label>
                    <input type="number" name="end_year"
                        class="form-control @error('end_year') is-invalid @enderror"
                        value="{{ old('end_year') }}" placeholder="2026" required>

                    @error('end_year')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description"
                        class="form-control @error('description') is-invalid @enderror"
                        rows="3">{{ old('description') }}</textarea>

                    @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary w-100">
                    Add Education
                </button>

            </form>

        </div>
    </div>

</div>

@endsection