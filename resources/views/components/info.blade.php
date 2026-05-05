<section id="about" class="px-4 md:px-10 py-12 md:py-16 bg-gray-900">

    <!-- Heading -->
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-white">
            👋 About Me
        </h2>
        <p class="text-gray-400 mt-2 text-sm">
            Who I am beyond the code
        </p>
    </div>

    @foreach($personalInfos as $info)

    <div class="max-w-3xl mx-auto">

        <div class="bg-gray-800/70 border border-gray-700 rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-blue-500/20 transition duration-300">

            <!-- About Text -->
            <p class="text-gray-300 text-sm md:text-base leading-relaxed">
                {{ $info->about_me }}
            </p>

            <!-- Highlights -->
            <div class="mt-5 flex flex-wrap gap-3">

                <span class="text-xs border border-gray-600 px-3 py-1 rounded-full text-gray-400">
                    💻 Web Development
                </span>

                <span class="text-xs border border-gray-600 px-3 py-1 rounded-full text-gray-400">
                    ⚡ Problem Solving
                </span>

                <span class="text-xs border border-gray-600 px-3 py-1 rounded-full text-gray-400">
                    🚀 Always Learning
                </span>

            </div>

        </div>

    </div>

    @endforeach

</section>