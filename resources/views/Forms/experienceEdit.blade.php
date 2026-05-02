<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Experience</title>


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
            <h2 class="text-2xl font-bold text-gray-700">Edit Experience</h2>

            <a href="/experience" class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300 text-sm">
                ← Back
            </a>
        </div>


        <form action="/experienceUpdate" method="POST" class="space-y-5">
            @csrf

            <input type="hidden" name="id" value="{{ $data->id }}">


            <div class="flex items-center gap-3">
                <i class="fas fa-briefcase text-blue-500"></i>
                <input type="text" name="job_title" value="{{ $data->job_title }}"
                    placeholder="Job Title"
                    class="w-full p-3 rounded border border-gray-300 focus:border-blue-500 outline-none">
            </div>


            <div class="flex items-center gap-3">
                <i class="fas fa-building text-blue-500"></i>
                <input type="text" name="company" value="{{ $data->company }}"
                    placeholder="Company Name"
                    class="w-full p-3 rounded border border-gray-300 focus:border-blue-500 outline-none">
            </div>


            <div class="flex items-center gap-3">
                <i class="fas fa-calendar text-blue-500"></i>
                <input type="date" name="start_date"
                    value="{{ \Carbon\Carbon::parse($data->start_date)->format('Y-m-d') }}" class="w-full p-3 rounded border border-gray-300 focus:border-blue-500 outline-none">
            </div>


            <div class="flex items-center gap-3">
                <i class="fas fa-calendar-check text-blue-500"></i>
                <input type="date" name="end_date" value="{{ $data->end_date}}"
                    class="w-full p-3 rounded border border-gray-300 focus:border-blue-500 outline-none">
            </div>


            <div class="flex items-center gap-3">
                <i class="fas fa-toggle-on text-blue-500"></i>

                <label class="flex items-center gap-2">
                    <input type="checkbox" name="is_current" value="1"
                        {{ $data->is_current ? 'checked' : '' }}>
                    <span class="text-sm">Currently Working Here</span>
                </label>
            </div>


            <div class="flex gap-3">
                <i class="fas fa-file-lines text-blue-500 mt-3"></i>
                <textarea name="description"
                    placeholder="Describe your role, responsibilities..."
                    class="w-full p-3 rounded border border-gray-300 h-28 focus:border-blue-500 outline-none">{{ $data->description }}</textarea>
            </div>


            <button class="w-full py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                Update Experience
            </button>

        </form>

    </div>

</body>

</html>