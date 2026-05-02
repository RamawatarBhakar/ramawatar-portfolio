<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Education</title>


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
            <h2 class="text-2xl font-bold text-gray-700">Edit Education</h2>

            <a href="/education" class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300 text-sm">
                ← Back
            </a>
        </div>


        <form action="/educationUpdate" method="POST" class="space-y-5">
            @csrf

            <input type="hidden" name="id" value="{{ $data->id }}">


            <div class="flex items-center gap-3">
                <i class="fas fa-graduation-cap text-blue-500"></i>
                <input type="text" name="degree" value="{{ $data->degree }}"
                    placeholder="Degree (B.Tech, Diploma...)"
                    class="w-full p-3 rounded border border-gray-300 focus:border-blue-500 outline-none">
            </div>


            <div class="flex items-center gap-3">
                <i class="fas fa-school text-blue-500"></i>
                <input type="text" name="institution" value="{{ $data->institution }}"
                    placeholder="Institution Name"
                    class="w-full p-3 rounded border border-gray-300 focus:border-blue-500 outline-none">
            </div>

            <div class="flex items-center gap-3">
                <i class="fas fa-calendar text-blue-500"></i>
                <input type="text" name="start_year" value="{{ $data->start_year }}"
                    placeholder="Start Year (2022)"
                    class="w-full p-3 rounded border border-gray-300 focus:border-blue-500 outline-none">
            </div>


            <div class="flex items-center gap-3">
                <i class="fas fa-calendar-check text-blue-500"></i>
                <input type="text" name="end_year" value="{{ $data->end_year }}"
                    placeholder="End Year (2026)"
                    class="w-full p-3 rounded border border-gray-300 focus:border-blue-500 outline-none">
            </div>


            <div class="flex gap-3">
                <i class="fas fa-file-lines text-blue-500 mt-3"></i>
                <textarea name="description"
                    placeholder="Write about your education..."
                    class="w-full p-3 rounded border border-gray-300 h-28 focus:border-blue-500 outline-none">{{ $data->description }}</textarea>
            </div>


            <button class="w-full py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                Update Education
            </button>

        </form>

    </div>

</body>

</html>