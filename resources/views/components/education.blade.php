<section id="education" class="px-4 md:px-10 py-10 md:py-16">
    <h3 class="text-3xl font-bold text-center mb-10">Education</h3>

    <div class="max-w-4xl mx-auto space-y-6">

        @foreach($education as $edu)
        <div class="flex items-start gap-4">

            <div class="w-3 h-3 mt-2 rounded-full bg-blue-400"></div>

            <div class="bg-gray-900 p-5 rounded w-full shadow">
                <h4 class="text-xl font-semibold">{{ $edu->degree }}</h4>

                <p class="text-gray-400 text-sm">
                    {{ $edu->institution }}
                </p>

                <p class="text-gray-500 text-sm">
                    {{ $edu->start_year }} - {{ $edu->end_year }}
                </p>

                <p class="mt-2 text-gray-300 text-sm">
                    {{ $edu->description }}
                </p>
            </div>

        </div>
        @endforeach

    </div>
</section>