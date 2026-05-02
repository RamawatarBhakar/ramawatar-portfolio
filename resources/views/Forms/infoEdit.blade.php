<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Personal Info</title>


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
    <div class="w-full max-w-3xl bg-white p-8 rounded-2xl shadow-xl border">


        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-700">Edit Profile</h2>

            <a href="/info" class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300 text-sm">
                ← Back
            </a>
        </div>


        <form action="/infoUpdate" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf

            <input type="hidden" name="id" value="{{ $data->id }}">


            <div class="flex items-center gap-3">
                <i class="fas fa-user text-blue-500"></i>
                <input type="text" name="name" value="{{ $data->name }}"
                    class="w-full p-3 rounded border border-gray-300 focus:border-blue-500 outline-none">
            </div>


            <div class="flex items-center gap-3">
                <i class="fas fa-briefcase text-blue-500"></i>
                <input type="text" name="tagline" value="{{ $data->tagline }}"
                    class="w-full p-3 rounded border border-gray-300 focus:border-blue-500 outline-none">
            </div>


            <div class="flex items-center gap-3">
                <i class="fas fa-envelope text-blue-500"></i>
                <input type="email" name="email" value="{{ $data->email }}"
                    class="w-full p-3 rounded border border-gray-300 focus:border-blue-500 outline-none">
            </div>


            <div class="flex items-center gap-3">
                <i class="fas fa-phone text-blue-500"></i>
                <input type="text" name="phone" value="{{ $data->phone }}"
                    class="w-full p-3 rounded border border-gray-300 focus:border-blue-500 outline-none">
            </div>


            <div class="flex items-center gap-3">
                <i class="fas fa-location-dot text-blue-500"></i>
                <input type="text" name="location" value="{{ $data->location }}"
                    class="w-full p-3 rounded border border-gray-300 focus:border-blue-500 outline-none">
            </div>


            <div class="flex gap-3">
                <i class="fas fa-user-pen text-blue-500 mt-3"></i>
                <textarea name="about_me"
                    class="w-full p-3 rounded border border-gray-300 h-28 focus:border-blue-500 outline-none">{{ $data->about_me }}</textarea>
            </div>


            <div class="flex items-center gap-3">
                <i class="fab fa-github text-gray-700"></i>
                <input type="text" name="github_url" value="{{ $data->github_url }}"
                    class="w-full p-3 rounded border border-gray-300 focus:border-blue-500 outline-none">
            </div>


            <div class="flex items-center gap-3">
                <i class="fab fa-linkedin text-blue-600"></i>
                <input type="text" name="linkedin_url" value="{{ $data->linkedin_url }}"
                    class="w-full p-3 rounded border border-gray-300 focus:border-blue-500 outline-none">
            </div>


            <div>
                <label class="text-sm text-gray-500">Current Image</label>
                @if($data->profile_image)
                <img src="{{ asset('storage/' . $data->profile_image) }}"
                    class="w-24 h-24 rounded-full mt-2 object-cover border">
                @endif
            </div>


            <div class="flex items-center gap-3">
                <i class="fas fa-image text-blue-500"></i>
                <input type="file" name="profile_image"
                    class="w-full text-sm text-gray-600 file:bg-blue-500 file:border-0 file:px-4 file:py-2 file:rounded file:text-white hover:file:bg-blue-600">
            </div>


            <button class="w-full py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                Update Profile
            </button>

        </form>

    </div>

</body>

</html>