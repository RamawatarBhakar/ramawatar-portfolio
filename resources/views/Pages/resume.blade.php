<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramawatar Bhakar</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white font-sans">

    <!-- Navbar -->
    <nav class="flex justify-between items-center px-8 py-4 bg-gray-800 sticky top-0 z-50">
        <h1 class="text-2xl font-bold text-blue-400">Ramawatar</h1>

        <div class="space-x-6">
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#education">Education</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </div>
    </nav>

    <!-- Hero -->
    <section class="flex flex-col md:flex-row items-center justify-between px-10 py-16">
        <div class="md:w-1/2">
            <h2 class="text-5xl font-bold">
                Hi, I'm <span class="text-blue-400">{{ $personalInfos->name ?? 'Your Name' }}</span>
            </h2>

            <p class="mt-4 text-lg text-gray-300">
                {{ $personalInfos->tagline ?? 'Laravel Developer' }}
            </p>

            <div class="mt-6 space-x-4">
                <button onclick="window.print()" class="px-6 py-2 bg-blue-500 rounded">
                    Download CV
                </button>
            </div>
        </div>

        <div class="md:w-1/2 flex justify-center mt-10 md:mt-0">
            <img src="{{ asset('storage/' . $personalInfos->profile_image) }}"
                class="rounded-full border-4 border-blue-400 w-56 h-56 object-cover">
        </div>
    </section>

    <!-- Components -->
    <x-info />
    <x-skill />
    <x-education />
    <x-project />

    <!-- Footer -->
    <footer class="text-center py-4 text-gray-500">
        <section id="contact" class="px-10 py-16 text-center bg-gray-900">
            <h3 class="text-3xl font-bold mb-6">Contact Me</h3>

            <p class="text-gray-300">
                Email: {{ $personalInfos->email ?? 'your@email.com' }}
            </p>

            <p class="text-gray-300 mt-2">
                GitHub: {{ $personalInfos->github_url ?? 'github.com/yourprofile' }}
            </p>

            <p class="text-gray-300 mt-2">
                LinkedIn: {{ $personalInfos->linkedin_url ?? '#' }}
            </p>
        </section>
        © 2026 {{ $personalInfos->name ?? 'Your Name' }}
    </footer>

</body>

</html>