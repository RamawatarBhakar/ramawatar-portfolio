<section id="projects" class="px-4 md:px-10 py-12 md:py-16 bg-gray-900">

    <!-- Heading -->
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-white">
            🚀 Projects
        </h2>
        <p class="text-gray-400 mt-2 text-sm">
            Some things I’ve built (and I’m proud of 😄)
        </p>
    </div>

    <!-- Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">

        @foreach($projects as $project)

        <div class="bg-gray-800/70 backdrop-blur-md border border-gray-700 rounded-2xl overflow-hidden shadow-lg hover:shadow-blue-500/20 transition duration-300 group">

            <!-- Image -->
            <div class="relative overflow-hidden">

                <img src="{{ asset('storage/' . $project->image_path) }}"
                    class="h-52 w-full object-cover group-hover:scale-105 transition duration-500">

                <!-- overlay -->
                <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition"></div>

            </div>

            <!-- Content -->
            <div class="p-5 flex flex-col justify-between h-full">

                <div class="space-y-2">

                    <h3 class="text-lg md:text-xl font-semibold text-white">
                        {{ $project->title }}
                    </h3>

                    <p class="text-blue-400 text-sm font-medium">
                        {{ $project->tech_stack }}
                    </p>

                    <p class="text-gray-300 text-sm leading-relaxed">
                        {{ Str::limit($project->description, 120) }}
                    </p>

                </div>

                <!-- Buttons -->
                <div class="mt-4 flex gap-3">

                    @if($project->github_link)
                    <a href="{{ $project->github_link }}" target="_blank"
                        class="flex-1 text-center px-4 py-2 text-sm bg-gray-700 rounded-lg hover:bg-gray-600 transition">
                        💻 Code
                    </a>
                    @endif

                    @if($project->live_link)
                    <a href="{{ $project->live_link }}" target="_blank"
                        class="flex-1 text-center px-4 py-2 text-sm bg-blue-500 rounded-lg hover:bg-blue-600 transition hover:scale-[1.03]">
                        🌐 Live
                    </a>
                    @endif

                </div>

            </div>

        </div>

        @endforeach

    </div>

</section>