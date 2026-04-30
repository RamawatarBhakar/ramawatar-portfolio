@extends('Admin_Pages.admin')

@section('title' , 'Manage Skills')

@section('content')

<form action="/skill" method="post">
    @csrf
    <label for="name">name: </label>
    <input type="text" name="name" id="name">
    <br>
    <label for="profi">proficiency: </label>
    <input type="text" name="proficiency" id="profi">
    <br>
    <button>submit</button>
</form>

@endsection