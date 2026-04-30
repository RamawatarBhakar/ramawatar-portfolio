<section id="personal-info" class="py-5 bg-light">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">About Me</h2>
            <p class="text-muted">
                Personal details and professional introduction
            </p>
        </div>

        <div class="row align-items-center g-4">

            @forelse($personalInfos as $info)
            {{-- Profile Image --}}
            <div class="col-lg-4 text-center">
                <div class="card border-0 shadow-sm rounded-4 p-4">

                    <img
                        src="{{ asset('storage/' . $info->profile_image) }}"
                        alt="{{ $info->name }}"
                        class="img-fluid rounded-circle shadow-sm mx-auto"
                        style="width: 220px; height: 220px; object-fit: cover;">

                </div>
            </div>

            {{-- Personal Details --}}
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-4 p-4 h-100">

                    <h2 class="fw-bold mb-2">
                        {{ $info->name }}
                    </h2>

                    <h5 class="text-primary mb-3">
                        {{ $info->tagline }}
                    </h5>

                    <p class="text-muted mb-4">
                        {{ $info->about_me }}
                    </p>

                    <div class="row gy-3">

                        <div class="col-md-6">
                            <strong>Email:</strong><br>
                            {{ $info->email }}
                        </div>

                        <div class="col-md-6">
                            <strong>Phone:</strong><br>
                            {{ $info->phone }}
                        </div>

                        <div class="col-md-6">
                            <strong>Location:</strong><br>
                            {{ $info->location ?? 'Not Available' }}
                        </div>

                        <div class="col-md-6">
                            <strong>GitHub:</strong><br>
                            <a href="{{ $info->github_url }}" target="_blank">
                                {{ $info->github_url ?? 'Not Available' }}
                            </a>
                        </div>

                        <div class="col-md-6">
                            <strong>LinkedIn:</strong><br>
                            <a href="{{ $info->linkedin_url }}" target="_blank">
                                {{ $info->linkedin_url ?? 'Not Available' }}
                            </a>
                        </div>

                    </div>

                </div>
            </div>

            @empty
            <div class="col-12">
                <div class="text-center">
                    <p class="text-muted fs-5">
                        No personal information found.
                    </p>
                </div>
            </div>
            @endforelse

        </div>

    </div>
</section>