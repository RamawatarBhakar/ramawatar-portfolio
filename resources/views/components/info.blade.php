<section id="about" class="px-4 md:px-10 py-10 md:py-16">
    <h3 class="text-3xl font-bold text-center mb-8">About Me</h3>

    @foreach($personalInfos as $info)
    <div class="flex flex-col md:flex-row items-center gap-8 max-w-5xl mx-auto">

        <!-- Image -->
        <!-- <div class="w-56 h-56">
            <img src="{{ asset('storage/' . $info->profile_image) }}"
                class="rounded-full border-4 border-blue-400 w-full h-full object-cover">
        </div> -->

        <!-- Content -->
        <div>
            <!-- <h2 class="text-2xl font-bold">{{ $info->name }}</h2>
            <p class="text-blue-400">{{ $info->tagline }}</p> -->

            <p class="text-gray-300 mt-4">
                {{ $info->about_me }}
            </p>
        </div>

    </div>
    @endforeach
</section>