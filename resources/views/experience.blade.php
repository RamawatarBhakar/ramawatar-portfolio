<section id="experience" class="py-5 bg-white">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Work Experience</h2>
            <p class="text-muted">
                My professional journey and industry experience
            </p>
        </div>

        <div class="row g-4">
            @forelse($experiences as $exp)
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-4">

                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <h4 class="fw-semibold mb-1">
                                {{ $exp->job_title }}
                            </h4>

                            <p class="text-primary fw-medium mb-1">
                                {{ $exp->company }}
                            </p>
                        </div>

                        <span class="badge bg-dark rounded-pill px-3 py-2">
                            {{ $exp->start_date }} -
                            {{ $exp->is_current ? 'Present' : ($exp->end_date ?? 'N/A') }}
                        </span>
                    </div>

                    <div>
                        <p class="text-muted mb-0">
                            {{ $exp->description }}
                        </p>
                    </div>

                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="text-center">
                    <p class="text-muted fs-5">
                        No work experience found.
                    </p>
                </div>
            </div>
            @endforelse
        </div>

    </div>
</section>