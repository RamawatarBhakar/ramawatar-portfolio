<section id="education" class="py-5 bg-white">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Education</h2>
            <p class="text-muted">
                My academic background and learning journey
            </p>
        </div>

        <div class="row g-4">
            @forelse($education as $edu)
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-4">

                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <h4 class="fw-semibold mb-1">
                                {{ $edu->degree }}
                            </h4>

                            <p class="text-primary fw-medium mb-1">
                                {{ $edu->institution }}
                            </p>
                        </div>

                        <span class="badge bg-dark rounded-pill px-3 py-2">
                            {{ $edu->start_year }} - {{ $edu->end_year }}
                        </span>
                    </div>

                    <div>
                        <p class="text-muted mb-0">
                            {{ $edu->description ?? 'No description available.' }}
                        </p>
                    </div>

                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="text-center">
                    <p class="text-muted fs-5">
                        No education details found.
                    </p>
                </div>
            </div>
            @endforelse
        </div>

    </div>
</section>