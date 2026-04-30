<form action="/educationUpdate" method="post">
    @csrf

    <input type="text" name="id" hidden value="{{ $data->id }}">

    <label for="degree">Degree: </label>
    <input type="text" name="degree" id="degree" value="{{ $data->degree }}">
    <br>

    <label for="institution">Institution: </label>
    <input type="text" name="institution" id="institution" value="{{ $data->institution }}">
    <br>

    <label for="start_year">Start Year: </label>
    <input type="text" name="start_year" id="start_year" value="{{ $data->start_year }}">
    <br>

    <label for="end_year">End Year: </label>
    <input type="text" name="end_year" id="end_year" value="{{ $data->end_year }}">
    <br>

    <label for="description">Description: </label>
    <textarea name="description" id="description">{{ $data->description }}</textarea>
    <br>

    <button>Submit</button>
</form>