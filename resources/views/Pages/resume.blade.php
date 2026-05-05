<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramawatar Bhakar</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background: radial-gradient(circle at top, #1f2937, #020617);
        }
    </style>
</head>

<body class="text-white font-sans">

    <!-- 🔥 NAVBAR -->
    <nav class="flex justify-between items-center px-4 md:px-10 py-4 bg-gray-800/80 backdrop-blur-md sticky top-0 z-50 border-b border-gray-700">

        <h1 class="text-xl md:text-2xl font-bold text-blue-400">
            RB Portfolio
        </h1>

        <!-- Desktop Menu -->
        <!-- Desktop Menu -->
        <div class="hidden md:flex gap-8 text-sm font-medium">

            <a href="#about" class="relative group transition duration-300">
                <span class="group-hover:text-blue-400">About</span>
                <span class="absolute left-0 -bottom-1 w-0 h-[2px] bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
            </a>

            <a href="#skills" class="relative group transition duration-300">
                <span class="group-hover:text-blue-400">Skills</span>
                <span class="absolute left-0 -bottom-1 w-0 h-[2px] bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
            </a>

            <a href="#experience" class="relative group transition duration-300">
                <span class="group-hover:text-blue-400">Experience</span>
                <span class="absolute left-0 -bottom-1 w-0 h-[2px] bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
            </a>

            <a href="#projects" class="relative group transition duration-300">
                <span class="group-hover:text-blue-400">Projects</span>
                <span class="absolute left-0 -bottom-1 w-0 h-[2px] bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
            </a>

            <a href="#contact" class="relative group transition duration-300">
                <span class="group-hover:text-blue-400">Contact</span>
                <span class="absolute left-0 -bottom-1 w-0 h-[2px] bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
            </a>

        </div>
        </div>

        <!-- Mobile Button -->
        <button id="menuBtn" class="md:hidden text-white text-xl bg-gray-700 p-2 rounded-lg shadow hover:bg-gray-600 transition">
            <i class="fas fa-bars"></i>
        </button>
    </nav>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black/50 hidden z-40"></div>

    <!-- Mobile Sidebar -->
    <div id="mobileMenu"
        class="fixed top-0 left-0 h-full w-64 bg-gray-900 shadow-lg transform -translate-x-full transition-transform duration-300 z-50 p-6 flex flex-col gap-6">

        <button id="closeBtn" class="text-right text-xl">
            <i class="fas fa-times"></i>
        </button>

        <a href="#about" class="hover:text-blue-400">About</a>
        <a href="#skills" class="hover:text-blue-400">Skills</a>
        <a href="#experience" class="hover:text-blue-400">Experience</a>
        <a href="#projects" class="hover:text-blue-400">Projects</a>
        <a href="#contact" class="hover:text-blue-400">Contact</a>

    </div>

    <!-- HERO -->
    <section class="flex flex-col md:flex-row items-center justify-between px-4 md:px-10 py-12 md:py-20 max-w-6xl mx-auto">

        <!-- LEFT -->
        <div class="md:w-1/2 space-y-5 text-center md:text-left">

            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold">
                Hi, I'm
                <span class="text-blue-400">
                    {{ $personalInfos->first()?->name ?? 'Your Name' }}
                </span>
            </h2>

            <p class="text-gray-400 text-sm md:text-lg">
                {{ $personalInfos->first()?->tagline ?? 'Laravel Developer' }}
            </p>

            <div class="flex flex-wrap justify-center md:justify-start gap-3">

                <a href="{{ asset('/cv/ramawatar-bhakar.pdf') }}" download
                    class="px-5 py-2 bg-blue-500 rounded-lg hover:bg-blue-600 transition">
                    📄 Download CV
                </a>

                <a href="#contact"
                    class="px-5 py-2 border border-blue-400 rounded-lg hover:bg-blue-400 hover:text-black transition">
                    🤝 Hire Me
                </a>

            </div>

        </div>

        <!-- RIGHT -->
        <div class="md:w-1/2 flex justify-center mt-10 md:mt-0">

            <div class="relative group">

                <div class="absolute inset-0 bg-blue-500 blur-2xl opacity-20 group-hover:opacity-40 transition"></div>

                <img src="{{ asset('storage/' . $personalInfos->first()?->profile_image) }}"
                    class="relative rounded-full border-4 border-blue-400 
                    w-40 h-40 sm:w-52 sm:h-52 md:w-60 md:h-60 
                    object-cover shadow-xl 
                    group-hover:scale-105 transition duration-300">

            </div>

        </div>

    </section>

    <!--  SECTIONS -->
    <div class="space-y-12 md:space-y-16 px-4 md:px-10">
        <x-info :personalInfos="$personalInfos" />
        <x-skill />
        <x-education />
        <x-experience />
        <x-project />
        <x-contact />
    </div>

    <!--  FOOTER -->
    <footer class="text-center py-6 text-gray-400 border-t border-gray-700 mt-12">

        <p>
            © 2026 {{ $personalInfos->first()?->name ?? 'Your Name' }}. All rights reserved.
        </p>

        <p class="text-xs mt-2 text-gray-500">
            Built with ❤️ using Laravel & Tailwind CSS
        </p>

    </footer>

    <!--  JS -->
    <script>
        const menu = document.getElementById('mobileMenu');
        const overlay = document.getElementById('overlay');
        const menuBtn = document.getElementById('menuBtn');
        const closeBtn = document.getElementById('closeBtn');

        function closeMenu() {
            menu.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        }

        function openMenu() {
            menu.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
        }

        // Open
        menuBtn.onclick = openMenu;

        // Close button
        closeBtn.onclick = closeMenu;

        // Overlay click
        overlay.onclick = closeMenu;

        //  IMPORTANT: link click pe auto close
        document.querySelectorAll('#mobileMenu a').forEach(link => {
            link.addEventListener('click', () => {
                closeMenu();
            });
        });
    </script>

</body>

</html>