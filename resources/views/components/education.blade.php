<section id="education" class="px-4 md:px-10 py-12 md:py-16 bg-gray-900">

    <!-- Heading -->
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-white">
            🎓 Education
        </h2>
        <p class="text-gray-400 mt-2 text-sm">
            My academic journey (yes, I survived exams 😄)
        </p>
    </div>

    <!-- Timeline -->
    <div class="max-w-4xl mx-auto relative border-l border-gray-700">

        @foreach($education as $edu)

        <div class="mb-10 ml-6 group">

            <!-- Dot -->
            <span class="absolute w-4 h-4 bg-blue-500 rounded-full -left-2 ring-4 ring-gray-900 group-hover:scale-110 transition"></span>

            <!-- Card -->
            <div class="bg-gray-800/70 backdrop-blur-md border border-gray-700 rounded-xl p-5 shadow-lg hover:shadow-blue-500/20 hover:scale-[1.01] transition duration-300">

                <!-- Degree -->
                <h3 class="text-lg md:text-xl font-semibold text-white">
                    {{ $edu->degree }}
                </h3>

                <!-- Institution -->
                <p class="text-blue-400 text-sm font-medium">
                    {{ $edu->institution }}
                </p>

                <!-- Duration -->
                <p class="text-gray-400 text-sm mb-2">
                    {{ $edu->start_year }} — {{ $edu->end_year }}
                </p>

                <!-- Description -->
                <p class="text-gray-300 text-sm leading-relaxed">
                    {{ $edu->description }}
                </p>

            </div>

        </div>

        @endforeach

    </div>

</section>