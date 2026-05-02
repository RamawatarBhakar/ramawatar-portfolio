<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project</title>


    <script src="https://cdn.tailwindcss.com"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-gray-100 text-gray-800 font-sans min-h-screen flex items-center justify-center">
    {{-- Error Messages --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="w-full max-w-2xl bg-white p-8 rounded-2xl shadow-xl border">


        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-700">Edit Project</h2>

            <a href="/project" class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300 text-sm">
                ← Back
            </a>
        </div>


        <form action="/projectUpdate" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf

            <input type="hidden" name="id" value="{{ $data->id }}">


            <div class="flex items-center gap-3">
                <i class="fas fa-folder text-blue-500"></i>
                <input type="text" name="title" value="{{ $data->title }}"
                    placeholder="Project Title"
                    class="w-full p-3 rounded border border-gray-300 focus:border-blue-500 outline-none">
            </div>


            <div class="flex items-center gap-3">
                <i class="fas fa-code text-blue-500"></i>
                <input type="text" name="tech_stack" value="{{ $data->tech_stack }}"
                    placeholder="Tech Stack (Laravel, React...)"
                    class="w-full p-3 rounded border border-gray-300 focus:border-blue-500 outline-none">
            </div>


            <div class="flex gap-3">
                <i class="fas fa-file-lines text-blue-500 mt-3"></i>
                <textarea name="description"
                    placeholder="Project Description"
                    class="w-full p-3 rounded border border-gray-300 h-28 focus:border-blue-500 outline-none">{{ $data->description }}</textarea>
            </div>


            <div>
                <label class="text-sm text-gray-500">Current Image</label>

                @if($data->image_path)
                <img src="{{ asset('storage/' . $data->image_path) }}"
                    class="w-full h-40 object-cover rounded-lg mt-2 border">
                @else
                <p class="text-gray-400 text-sm mt-2">No image uploaded</p>
                @endif
            </div>


            <div class="flex items-center gap-3">
                <i class="fas fa-image text-blue-500"></i>
                <input type="file" name="image_path"
                    class="w-full text-sm text-gray-600 file:bg-blue-500 file:border-0 file:px-4 file:py-2 file:rounded file:text-white hover:file:bg-blue-600">
            </div>


            <div class="flex items-center gap-3">
                <i class="fab fa-github text-gray-700"></i>
                <input type="text" name="github_link" value="{{ $data->github_link }}"
                    placeholder="GitHub URL"
                    class="w-full p-3 rounded border border-gray-300 focus:border-blue-500 outline-none">
            </div>


            <div class="flex items-center gap-3">
                <i class="fas fa-globe text-blue-500"></i>
                <input type="text" name="live_link" value="{{ $data->live_link }}"
                    placeholder="Live Project URL"
                    class="w-full p-3 rounded border border-gray-300 focus:border-blue-500 outline-none">
            </div>


            <button type="submit"
                class="w-full py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                Update Project
            </button>

        </form>

    </div>

</body>

</html>