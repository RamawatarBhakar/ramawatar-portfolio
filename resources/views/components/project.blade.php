<section id="projects" class="px-10 py-16 bg-gray-800">
    <h3 class="text-3xl font-bold text-center mb-10">Projects</h3>

    <div class="grid md:grid-cols-3 gap-8">

        @foreach($projects as $project)
        <div class="bg-gray-900 rounded shadow-lg overflow-hidden">

            <img src="{{ asset('storage/' . $project->image_path) }}"
                class="h-56 w-full object-cover">

            <div class="p-4">
                <h4 class="text-xl font-bold">{{ $project->title }}</h4>

                <p class="text-gray-400 text-sm">
                    {{ $project->tech_stack }}
                </p>

                <p class="text-gray-500 text-sm mt-2">
                    {{ $project->description }}
                </p>

                <div class="mt-3 flex gap-2">
                    <a href="{{ $project->github_link }}" class="text-blue-400">GitHub</a>
                    <a href="{{ $project->live_link }}" class="text-green-400">Live</a>
                </div>
            </div>

        </div>
        @endforeach

    </div>
</section>