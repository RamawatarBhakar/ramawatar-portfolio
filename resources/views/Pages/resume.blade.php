<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramawatar Bhakar</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background: radial-gradient(circle at top, #1f2937, #020617);
        }
    </style>
</head>

<body class="text-white font-sans">

    <!-- 🔥 Navbar -->
    <nav class="flex flex-wrap justify-between items-center px-4 md:px-8 py-4 bg-gray-800 sticky top-0 z-50">

        <h1 class="text-xl md:text-2xl font-bold text-blue-400">
            RB Portfolio
        </h1>

        <!-- Mobile Menu -->
        <div class="flex flex-wrap gap-3 md:gap-6 text-sm md:text-base mt-2 md:mt-0">
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#education">Education</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </div>

    </nav>

    <!-- 🔥 Hero Section -->
    <!-- 🔥 Hero Section -->
    <section class="flex flex-col md:flex-row items-center justify-between px-4 md:px-10 py-12 md:py-20">

        <!-- LEFT -->
        <div class="md:w-1/2 space-y-4 md:space-y-6 text-center md:text-left">

            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold leading-tight">
                Hi, I'm
                <span class="text-blue-400">
                    {{ $personalInfos->first()?->name ?? 'Your Name' }}
                </span>
            </h2>

            <p class="text-sm sm:text-base md:text-lg text-gray-300">
                {{ $personalInfos->first()?->tagline ?? 'Laravel Developer' }}
            </p>

            <!-- Buttons -->
            <div class="flex flex-wrap justify-center md:justify-start gap-3">

                <a href="{{ asset('/cv/ramawatar-bhakar.pdf') }}" download
                    class="px-4 sm:px-6 py-2 bg-blue-500 rounded shadow hover:bg-blue-600 transition">
                    Download CV
                </a>

                <a href="#contact"
                    class="px-4 sm:px-6 py-2 border border-blue-400 rounded-lg hover:bg-blue-400 hover:text-black transition">
                    Hire Me
                </a>

            </div>

        </div>

        <!-- RIGHT -->
        <div class="md:w-1/2 flex justify-center mt-8 md:mt-0">

            <div class="relative group">

                <!-- Glow -->
                <div class="absolute inset-0 bg-blue-500 blur-2xl opacity-20 group-hover:opacity-40 transition"></div>

                <!-- Image -->

                <img src="{{ asset('storage/' . $personalInfos->first()?->profile_image) }}"
                    class="relative rounded-full border-4 border-blue-400 
                w-36 h-36 sm:w-44 sm:h-44 md:w-60 md:h-60 
                object-cover shadow-xl 
                group-hover:scale-105 transition duration-300">

            </div>

        </div>

    </section>
    <!-- 🔥 Sections -->
    <div class="space-y-10 px-6 md:px-10">
        <x-info :personalInfos="$personalInfos" />
        <x-skill />
        <x-education />
        <x-project />
        <x-contact />
    </div>

    <!-- 🔥 Footer -->
    <footer class="text-center py-6 text-gray-400 border-t border-white/10 mt-10">
        © 2026 {{ $personalInfos->first()?->name ?? 'Your Name' }} | All Rights Reserved
    </footer>

</body>

</html>