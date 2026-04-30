<section id="skills" class="py-5 bg-light">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Technical Skills</h2>
            <p class="text-muted">
                My professional technical expertise and development stack
            </p>
        </div>

        <div class="row g-4">
            @forelse($skills as $skill)
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-4">

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0 fw-semibold text-dark">
                            {{ $skill->name }}
                        </h5>

                        <span class="badge bg-primary rounded-pill px-3 py-2">
                            {{ $skill->proficiency }}%
                        </span>
                    </div>

                    <div class="progress rounded-pill" style="height: 10px;">
                        <div
                            class="progress-bar"
                            role="progressbar"
                            style="width: {{ $skill->proficiency }}%;"
                            aria-valuenow="{{ $skill->proficiency }}"
                            aria-valuemin="0"
                            aria-valuemax="100">
                        </div>
                    </div>

                    <div class="mt-3">
                        <small class="text-muted">
                            Strong understanding and practical project experience in {{ $skill->name }}
                        </small>
                    </div>

                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="text-center">
                    <p class="text-muted fs-5">
                        No skills found.
                    </p>
                </div>
            </div>
            @endforelse
        </div>

    </div>
</section>