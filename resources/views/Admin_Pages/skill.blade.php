@extends('Admin_Pages.admin')

@section('title' , 'Manage Skill details')

@section('content')
<h3>{{session('success')}}</h3>

<table border="1" cellpadding="10">
    <tr>
        <th>Skill</th>
        <th>Proficiency</th>

    </tr>
    <tr>
        @foreach($data as $i)
        <td>{{$i->name}}</td>
        <td>{{$i->proficiency}}</td>
        <td><a href="{{route('skillEdit',$i->id)}}">edit</a>
        <td>
        <td><a href="{{route('skillDelete',$i->id)}}">Delete</a></td>
    </tr>
    @endforeach
</table>
<br><br>
<a href="/skillForm">
    new Skill
</a>
@endsection