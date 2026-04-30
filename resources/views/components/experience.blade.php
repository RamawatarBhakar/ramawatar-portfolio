<div class="mb-5">
    <h3 class="fw-bold text-uppercase mb-4 pb-2 border-bottom border-dark border-2 d-inline-block">Experience</h3>

    <div class="d-flex flex-column gap-5 mt-4">
        @forelse($experiences as $exp)
        <div class="row">
            <div class="col-md-3">
                <span class="fs-5 text-secondary fw-bold">{{ $exp->start_date }} — {{ $exp->is_current ? 'Present' : ($exp->end_date ?? 'N/A') }}</span>
            </div>
            <div class="col-md-9 border-start border-1 ps-md-4">
                <h4 class="fw-bold mb-1">{{ $exp->job_title }}</h4>
                <p class="text-primary fw-semibold fs-5 mb-2">{{ $exp->company }}</p>
                <p class="text-secondary" style="font-weight: 300;">{{ $exp->description }}</p>
            </div>
        </div>
        @empty
        <p class="text-secondary">No work experience found.</p>
        @endforelse
    </div>
</div>