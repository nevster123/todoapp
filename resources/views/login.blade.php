@extends('layouts.master')

@section('content')
		<form action="/signin" method="post">
		  <div class="form-group row">	
			<div class="col-sm-6">
				<label for="email" class="col-sm-3 control-label">Email</label>
				<input type="email" class="form-control input-lg" name="email">
		    </div>
		  </div>
		  <div class="form-group row">
		    <div class="col-sm-6">
		    	<label for="password" class="col-sm-4 control-label">Password</label>		   
		    	<input type="password" class="form-control input-lg" name="password">
		    </div>
		  </div>
		    <div class="form-group row">
		     <div class="col-sm-6">
		    	<input type="hidden" name="_token" value="{{Session::token()}}">
			<input type="submit" class="btn btn-primary" value="Signin">
			</div>
		  </div>
		  @if(Session::has('message'))		  
		  	{{Session::get('message')}}
		  @endif												
		</form>
@endsection