@extends('Admin_Pages.admin')

@section('title', 'Edit Skill')

@section('content')

<div class="d-flex justify-content-center">

    <div class="card shadow-lg border-0" style="width: 100%; max-width: 600px;">
        <div class="card-body p-4">

            <h3 class="mb-4">Edit Skill</h3>


            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
                @endforeach
            </div>
            @endif

            <form action="/skillUpdate" method="POST">
                @csrf

                <input type="hidden" name="id" value="{{ $data->id }}">

                <div class="mb-3">
                    <label class="form-label">Skill Name</label>
                    <input type="text" name="name" class="form-control"
                        value="{{ $data->name }}" required>
                </div>


                <div class="mb-3">
                    <label class="form-label">Proficiency Level (1 - 10)</label>

                    <input type="range"
                        name="proficiency"
                        min="1"
                        max="10"
                        value="{{ $data->proficiency }}"
                        class="form-range"
                        oninput="updateLevel(this.value)">


                    <div class="d-flex justify-content-between">
                        <small>1</small>
                        <strong id="levelValue">Level {{ $data->proficiency }}</strong>
                        <small>10</small>
                    </div>


                    <div class="progress mt-2">
                        <div id="progressBar"
                            class="progress-bar bg-primary"
                            style="width: {{ $data->proficiency * 10 }}%">
                        </div>
                    </div>
                </div>


                <button class="btn btn-success w-100">
                    Update Skill
                </button>

            </form>

        </div>
    </div>

</div>


<script>
    function updateLevel(value) {
        document.getElementById('levelValue').innerText = 'Level ' + value;
        document.getElementById('progressBar').style.width = (value * 10) + '%';
    }
</script>

@endsection