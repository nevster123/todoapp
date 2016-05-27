@extends('layouts.master')

@section('content')
    @if(Session::has('message'))
    	{{ Session::get('message') }}
    @endif
	@if(Auth::check())
	<h1>Welcome, {{Auth::user()->firstname}} {{Auth::user()->lastname}}</h1>
	<a href="/signout">Logout</a>
	@else
		Not logged in
	@endif
@endsection