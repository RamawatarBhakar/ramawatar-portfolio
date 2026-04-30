<form action="/skillUpdate" method="post">
    @csrf
    <input type="text" hidden name="id" value="{{$data->id}}">
    <label for="name">name: </label>
    <input type="text" name="name" id="name" value="{{$data->name}}">
    <br>
    <label for="profi">proficiency: </label>
    <input type="text" name="proficiency" id="profi" value="{{$data->proficiency}}">
    <br>
    <button>submit</button>
</form>