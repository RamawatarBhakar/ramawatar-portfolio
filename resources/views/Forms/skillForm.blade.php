@extends('Admin_Pages.admin')

@section('title', 'Manage Skills')

@section('content')

<div class="d-flex justify-content-center">

    <div class="card shadow-lg border-0" style="width: 100%; max-width: 600px;">
        <div class="card-body p-4">

            <h3 class="mb-4">Add Skill</h3>

            <!-- Errors -->
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
                @endforeach
            </div>
            @endif

            <form action="/skill" method="POST">
                @csrf


                <div class="mb-3">
                    <label class="form-label">Skill Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Laravel, React..." required>
                </div>


                <div class="mb-3">
                    <label class="form-label">Proficiency Level (1 - 10)</label>

                    <input type="range" name="proficiency" min="1" max="10" value="5"
                        class="form-range"
                        oninput="updateLevel(this.value)">


                    <div class="d-flex justify-content-between">
                        <small>1</small>
                        <strong id="levelValue">Level 5</strong>
                        <small>10</small>
                    </div>


                    <div class="progress mt-2">
                        <div id="progressBar" class="progress-bar bg-primary"
                            style="width: 50%"></div>
                    </div>
                </div>


                <button class="btn btn-primary w-100">
                    Add Skill
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