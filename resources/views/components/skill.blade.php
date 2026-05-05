<section id="skills" class="px-4 md:px-10 py-12 md:py-16 bg-gray-900">

    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-white">
            🛠️ Skills
        </h2>
        <p class="text-gray-400 mt-2 text-sm">
            Technologies I work with
        </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">

        @foreach($skills as $skill)

        @php
        $value = $skill->proficiency;
        $percent = $value <= 10 ? $value * 10 : $value;
            @endphp

            <div class="bg-gray-800/70 border border-gray-700 rounded-xl p-5 shadow-lg hover:shadow-blue-500/20 hover:scale-[1.02] transition duration-300 group">

            <div class="bg-gray-800 p-5 rounded-xl text-center hover:scale-105 transition">
                {{ $skill->name }}
            </div>
            <!-- 
            <div class="w-full bg-gray-700 rounded-full h-2 overflow-hidden">
                <div class="bg-blue-500 h-2 rounded-full transition-all duration-500 group-hover:bg-blue-400"
                    style="width: {{ $percent }}%">
                </div>
            </div> -->

    </div>

    @endforeach

    </div>

</section>