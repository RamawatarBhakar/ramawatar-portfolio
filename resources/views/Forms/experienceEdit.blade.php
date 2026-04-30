<form action="/experienceUpdate" method="post">
    @csrf

    <input type="text" name="id" hidden value="{{ $data->id }}">

    <label for="job_title">Job Title: </label>
    <input type="text" name="job_title" id="job_title" value="{{ $data->job_title }}">
    <br>

    <label for="company">Company: </label>
    <input type="text" name="company" id="company" value="{{ $data->company }}">
    <br>

    <label for="start_date">Start Date: </label>
    <input type="text" name="start_date" id="start_date" value="{{ $data->start_date }}">
    <br>

    <label for="end_date">End Date: </label>
    <input type="text" name="end_date" id="end_date" value="{{ $data->end_date }}">
    <br>

    <label for="is_current">Is Current: </label>
    <input type="text" name="is_current" id="is_current" value="{{ $data->is_current }}">
    <br>

    <label for="description">Description: </label>
    <textarea name="description" id="description">{{ $data->description }}</textarea>
    <br>

    <button>Submit</button>
</form>