<section id="contact" class="px-10 py-16 bg-gray-900">

    <h3 class="text-3xl font-bold text-center mb-10">Contact Me</h3>

    <div class="max-w-5xl mx-auto bg-gray-800 rounded-2xl shadow-lg p-8 grid md:grid-cols-2 gap-8">

    
        <div class="flex flex-col justify-center space-y-6">

            <div>
                <h4 class="text-xl font-semibold text-blue-400 mb-2">Get in Touch</h4>
                <p class="text-gray-300 text-sm">
                    Feel free to contact me for projects, collaborations, or any queries.
                </p>
            </div>

            <div class="space-y-4">

              
                <a href="mailto:{{ $personalInfo->email }}"
                    class="flex items-center gap-4 p-4 bg-gray-900 rounded-xl hover:bg-gray-700 transition">

                    <i class="fas fa-envelope text-blue-400 text-xl"></i>

                    <div>
                        <p class="text-sm text-gray-400">Email</p>
                        <p class="text-white text-sm">{{ $personalInfo->email }}</p>
                    </div>
                </a>

         
                <a href="{{ $personalInfo->github_url }}" target="_blank"
                    class="flex items-center gap-4 p-4 bg-gray-900 rounded-xl hover:bg-gray-700 transition">

                    <i class="fab fa-github text-white text-xl"></i>

                    <div>
                        <p class="text-sm text-gray-400">GitHub</p>
                        <p class="text-white text-sm">View Profile</p>
                    </div>
                </a>

                <a href="{{ $personalInfo->linkedin_url }}" target="_blank"
                    class="flex items-center gap-4 p-4 bg-gray-900 rounded-xl hover:bg-gray-700 transition">

                    <i class="fab fa-linkedin text-blue-500 text-xl"></i>

                    <div>
                        <p class="text-sm text-gray-400">LinkedIn</p>
                        <p class="text-white text-sm">Connect with me</p>
                    </div>
                </a>

            </div>

        </div>

     
        <div>

     
            @if(session('success'))
            <p class="text-green-400 mb-4">{{ session('success') }}</p>
            @endif

            <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                @csrf

                <input type="text" name="name" placeholder="Your Name"
                    class="w-full p-3 rounded bg-gray-900 border border-gray-600 focus:outline-none focus:border-blue-400">

                <input type="email" name="email" placeholder="Your Email"
                    class="w-full p-3 rounded bg-gray-900 border border-gray-600 focus:outline-none focus:border-blue-400">

                <textarea name="message" placeholder="Your Message"
                    class="w-full p-3 rounded bg-gray-900 border border-gray-600 h-32 focus:outline-none focus:border-blue-400"></textarea>

                <button type="submit"
                    class="w-full px-6 py-3 bg-blue-500 rounded hover:bg-blue-600 transition">
                    Send Message
                </button>

            </form>

        </div>

    </div>

</section>