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
    <nav class="flex justify-between items-center px-8 py-4 backdrop-blur-md bg-white/10 border-b border-white/10 sticky top-0 z-50">
        <h1 class="text-2xl font-bold text-blue-400 tracking-wide">
            Ramawatar
        </h1>

        <div class="space-x-6 text-sm">
            <a href="#about" class="hover:text-blue-400 transition">About</a>
            <a href="#skills" class="hover:text-blue-400 transition">Skills</a>
            <a href="#education" class="hover:text-blue-400 transition">Education</a>
            <a href="#projects" class="hover:text-blue-400 transition">Projects</a>
            <a href="#contact" class="hover:text-blue-400 transition">Contact</a>
        </div>
    </nav>

    <!-- 🔥 Hero Section -->
    <section class="flex flex-col md:flex-row items-center justify-between px-10 py-20">

        <!-- LEFT -->
        <div class="md:w-1/2 space-y-6">

            <h2 class="text-5xl font-bold leading-tight">
                Hi, I'm
                <span class="text-blue-400">{{ $personalInfos->name ?? 'Your Name' }}</span>
            </h2>

            <p class="text-lg text-gray-300">
                {{ $personalInfos->tagline ?? 'Laravel Developer' }}
            </p>

            <!-- Buttons -->
            <div class="flex gap-4">

                <a href="{{ asset('cv/ramawatar-bhakar.pdf') }}" download
                    class="px-6 py-2 bg-blue-500 rounded">
                    Download CV
                </a>

                <a href="#contact"
                    class="px-6 py-2 border border-blue-400 rounded-lg hover:bg-blue-400 hover:text-black transition">
                    Hire Me
                </a>

            </div>

        </div>

        <!-- RIGHT -->
        <div class="md:w-1/2 flex justify-center mt-10 md:mt-0">

            <div class="relative group">

                <!-- Glow effect -->
                <div class="absolute inset-0 bg-blue-500 blur-2xl opacity-20 group-hover:opacity-40 transition"></div>

                <!-- Image -->
                <img src="{{ asset('storage/' . $personalInfos->profile_image) }}"
                    class="relative rounded-full border-4 border-blue-400 w-60 h-60 object-cover shadow-xl group-hover:scale-105 transition duration-300">

            </div>

        </div>

    </section>

    <!-- 🔥 Sections -->
    <div class="space-y-10 px-6 md:px-10">
        <x-info />
        <x-skill />
        <x-education />
        <x-project />
        <x-contact />
    </div>

    <!-- 🔥 Footer -->
    <footer class="text-center py-6 text-gray-400 border-t border-white/10 mt-10">
        © 2026 {{ $personalInfos->name ?? 'Your Name' }} | All Rights Reserved
    </footer>

</body>

</html>