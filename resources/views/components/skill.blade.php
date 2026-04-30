<section id="skills" class="px-10 py-16">
    <h3 class="text-3xl font-bold text-center mb-10">Skills</h3>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        @foreach($skills as $skill)
        <div class="bg-gray-800 p-6 rounded text-center">
            {{ $skill->name }}
        </div>
        @endforeach
    </div>
</section>