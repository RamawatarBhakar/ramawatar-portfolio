<form action="/infoUpdate" method="post">
    @csrf

    <input type="text" name="id" hidden value="{{ $data->id }}">

    <label for="name">Name: </label>
    <input type="text" name="name" id="name" value="{{ $data->name }}">
    <br>

    <label for="tagline">Tagline: </label>
    <input type="text" name="tagline" id="tagline" value="{{ $data->tagline }}">
    <br>

    <label for="email">Email: </label>
    <input type="text" name="email" id="email" value="{{ $data->email }}">
    <br>

    <label for="phone">Phone: </label>
    <input type="text" name="phone" id="phone" value="{{ $data->phone }}">
    <br>

    <label for="location">Location: </label>
    <input type="text" name="location" id="location" value="{{ $data->location }}">
    <br>

    <label for="about_me">About Me: </label>
    <textarea name="about_me" id="about_me">{{ $data->about_me }}</textarea>
    <br>

    <label for="github_url">GitHub URL: </label>
    <input type="text" name="github_url" id="github_url" value="{{ $data->github_url }}">
    <br>

    <label for="linkedin_url">LinkedIn URL: </label>
    <input type="text" name="linkedin_url" id="linkedin_url" value="{{ $data->linkedin_url }}">
    <br>

    <label for="profile_image">Profile Image: </label>
    <input type="text" name="profile_image" id="profile_image" value="{{ $data->profile_image }}">
    <br>

    <button>Submit</button>
</form>