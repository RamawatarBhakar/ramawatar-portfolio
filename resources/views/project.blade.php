<section id="projects" class="py-5 bg-light">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Projects</h2>
            <p class="text-muted">
                My development work, real-world projects, and practical experience
            </p>
        </div>

        <div class="row g-4">
            @forelse($projects as $project)
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">

                    {{-- Project Image --}}
                    @if($project->image_path)
                    <img
                        src="{{ asset('storage/' . $project->image_path) }}"
                        alt="{{ $project->title }}"
                        class="card-img-top"
                        style="height: 220px; object-fit: cover;">
                    @endif

                    <div class="card-body p-4">

                        <h4 class="fw-semibold mb-2">
                            {{ $project->title }}
                        </h4>

                        <p class="text-primary fw-medium mb-2">
                            {{ $project->tech_stack }}
                        </p>

                        <p class="text-muted mb-4">
                            {{ $project->description }}
                        </p>

                        <div class="d-flex flex-wrap gap-2">

                            @if($project->github_link)
                            <a
                                href="{{ $project->github_link }}"
                                target="_blank"
                                class="btn btn-dark btn-sm rounded-pill px-3">
                                GitHub
                            </a>
                            @endif

                            @if($project->live_link)
                            <a
                                href="{{ $project->live_link }}"
                                target="_blank"
                                class="btn btn-primary btn-sm rounded-pill px-3">
                                Live Demo
                            </a>
                            @endif

                        </div>

                    </div>

                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="text-center">
                    <p class="text-muted fs-5">
                        No projects found.
                    </p>
                </div>
            </div>
            @endforelse
        </div>

    </div>
</section>