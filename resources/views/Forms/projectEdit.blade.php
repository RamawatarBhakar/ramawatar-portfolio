<form action="/projectUpdate" method="post">
    @csrf

    <input type="text" name="id" hidden value="{{ $data->id }}">

    <label for="title">Title: </label>
    <input type="text" name="title" id="title" value="{{ $data->title }}">
    <br>

    <label for="tech_stack">Tech Stack: </label>
    <input type="text" name="tech_stack" id="tech_stack" value="{{ $data->tech_stack }}">
    <br>

    <label for="description">Description: </label>
    <textarea name="description" id="description">{{ $data->description }}</textarea>
    <br>

    <label for="image_path">Image Path: </label>
    <input type="text" name="image_path" id="image_path" value="{{ $data->image_path }}">
    <br>

    <label for="github_link">GitHub Link: </label>
    <input type="text" name="github_link" id="github_link" value="{{ $data->github_link }}">
    <br>

    <label for="live_link">Live Link: </label>
    <input type="text" name="live_link" id="live_link" value="{{ $data->live_link }}">
    <br>

    <button>Submit</button>
</form>