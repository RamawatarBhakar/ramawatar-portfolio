@extends('Admin_Pages.admin')

@section('title' , 'Dashboard')

@section('content')

<h1>Welcome to the Secret Dashboard, {{ Auth::user()->name }}!</h1>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>

{{session('success')}}

@endsection