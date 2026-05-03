<section id="projects" class="px-4 md:px-10 py-10 md:py-16">
    <h3 class="text-3xl font-bold text-center mb-10">Projects</h3>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

        @foreach($projects as $project)
        <div class="bg-gray-900 rounded-2xl shadow-lg overflow-hidden group hover:shadow-2xl transition duration-300">


            <div class="relative overflow-hidden">

                <img src="{{ asset('storage/' . $project->first()?->image_path)}}"
                    class="h-56 w-full object-cover group-hover:scale-110 transition duration-500">


                <div class="absolute inset-0 bg-black/30"></div>
            </div>


            <div class="p-5 space-y-3">

                <h4 class="text-xl font-bold text-white">
                    {{ $project->title }}
                </h4>

                <p class="text-blue-400 text-sm font-medium">
                    {{ $project->tech_stack }}
                </p>

                <p class="text-gray-400 text-sm leading-relaxed">
                    {{ $project->description }}
                </p>


                <div class="mt-4 flex gap-3">

                    @if($project->github_link)
                    <a href="{{ $project->github_link }}" target="_blank"
                        class="px-4 py-1 text-sm bg-gray-700 rounded-lg hover:bg-gray-600 transition">
                        GitHub
                    </a>
                    @endif

                    @if($project->live_link)
                    <a href="{{ $project->live_link }}" target="_blank"
                        class="px-4 py-1 text-sm bg-blue-500 rounded-lg hover:bg-blue-600 transition">
                        Live
                    </a>
                    @endif

                </div>

            </div>

        </div>
        @endforeach

    </div>
</section>