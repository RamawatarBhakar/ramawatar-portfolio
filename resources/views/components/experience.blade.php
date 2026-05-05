<section id="experience" class="px-4 md:px-10 py-12 md:py-16 bg-gray-900">

    <!-- Heading -->
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-white">
            💼 Experience
        </h2>
        <p class="text-gray-400 mt-2 text-sm">
            Real-world work that shaped my skills
        </p>
    </div>

    <div class="max-w-3xl mx-auto">

        @foreach($experiences as $exp)

        <div class="bg-gray-800/70 border border-gray-700 rounded-xl p-5 shadow-md hover:shadow-blue-500/20 transition">

            <!-- Top -->
            <div class="flex justify-between items-center mb-2">
                <h3 class="text-lg md:text-xl font-semibold text-white">
                    {{ ucfirst($exp->job_title) }}
                </h3>

                <span class="text-xs text-gray-400">
                    {{ $exp->start_date }} — {{ $exp->is_current ? 'Present' : $exp->end_date }}
                </span>
            </div>

            <!-- Company -->
            <p class="text-blue-400 text-sm mb-3">
                {{ ucfirst($exp->company) }}
            </p>

            <!-- Points -->
            <ul class="text-gray-300 text-sm space-y-1 leading-relaxed">

                @foreach(explode('-', $exp->description) as $point)
                    @if(trim($point))
                    <li>• {{ trim($point) }}</li>
                    @endif
                @endforeach

            </ul>

            <!-- Tag -->
            <div class="mt-3">
                <span class="text-xs border border-gray-600 px-2 py-1 rounded text-gray-400">
                    ⚡ Industry Experience
                </span>
            </div>

        </div>

        @endforeach

    </div>

</section>