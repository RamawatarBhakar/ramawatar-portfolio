<section id="contact" class="px-4 md:px-10 py-12 md:py-16 bg-gray-900">

    <!-- Heading -->
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-white">
            📬 Contact Me
        </h2>
        <p class="text-gray-400 mt-2">
            Let’s build something cool together 🚀
        </p>
    </div>

    <!-- Card -->
    <div class="max-w-5xl mx-auto bg-gray-800/70 border border-gray-700 rounded-2xl p-6 md:p-8 shadow-lg backdrop-blur-md">

        <div class="grid md:grid-cols-2 gap-10 items-center">

            <!-- LEFT -->
            <div class="space-y-4">

                <h3 class="text-xl font-semibold text-blue-400">
                    Get in Touch 🤝
                </h3>

                <p class="text-gray-400 text-sm leading-relaxed">
                    Got an idea? A project? Or just want to say hi?
                    I don’t bite... unless it’s bad code 😄
                </p>

                <!-- Info Cards -->
                <div class="space-y-3">

                    <div class="flex items-center gap-3 p-3 bg-gray-900 rounded-lg hover:bg-gray-700 transition cursor-pointer">
                        <i class="fas fa-envelope text-blue-400"></i>
                        <span class="text-gray-300 text-sm">{{ $personalInfo->email ?? 'your@email.com' }}</span>
                    </div>

                    <div class="flex items-center gap-3 p-3 bg-gray-900 rounded-lg hover:bg-gray-700 transition cursor-pointer">
                        <i class="fab fa-github text-white"></i>
                        <a href="{{ $personalInfo->github_url ?? '#' }}" target="_blank" class="text-gray-300 text-sm hover:underline">
                            View GitHub
                        </a>
                    </div>

                    <div class="flex items-center gap-3 p-3 bg-gray-900 rounded-lg hover:bg-gray-700 transition cursor-pointer">
                        <i class="fab fa-linkedin text-blue-500"></i>
                        <a href="{{ $personalInfo->linkedin_url ?? '#' }}" target="_blank" class="text-gray-300 text-sm hover:underline">
                            Connect on LinkedIn
                        </a>
                    </div>

                </div>

            </div>

            <!-- RIGHT (FORM) -->
            <div>

                @if(session('success'))
                <div class="mb-4 text-green-400 text-sm">
                    ✅ Message sent successfully!
                </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                    @csrf

                    <!-- Name -->
                    <input type="text" name="name" placeholder="Your Name"
                        class="w-full p-3 rounded-lg bg-gray-900 border border-gray-600 text-white focus:border-blue-400 focus:ring-1 focus:ring-blue-400 outline-none transition">

                    <!-- Email -->
                    <input type="email" name="email" placeholder="Your Email"
                        class="w-full p-3 rounded-lg bg-gray-900 border border-gray-600 text-white focus:border-blue-400 focus:ring-1 focus:ring-blue-400 outline-none transition">

                    <!-- Message -->
                    <textarea name="message" placeholder="Your Message 😄"
                        class="w-full p-3 rounded-lg bg-gray-900 border border-gray-600 text-white h-32 focus:border-blue-400 focus:ring-1 focus:ring-blue-400 outline-none transition"></textarea>

                    <!-- Button -->
                    <button type="submit"
                        class="w-full py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 hover:scale-[1.02] active:scale-95 transition duration-200 shadow-md">
                        🚀 Send Message
                    </button>

                </form>

            </div>

        </div>

    </div>

</section>