@extends('layouts.master')

@section('content')
		@foreach($errors->all() as $errors)
			{{ $errors }}
		@endforeach

		<form action="/signup" method="post">
		  <div class="form-group row">
		  <div class="col-sm-6">
				<label for="firstname" class="col-sm-3">Firstname</label>
				<input type="text" class="form-control input-lg" name="firstname" value="{{Request::old('firstname')}}" placeholder="Enter your firstname">
		    </div>
		  </div>
		  <div class="form-group row">			
		  <div class="col-sm-6">
				<label for="lastname" class="col-sm-3 control-label">Lastname</label>
				<input type="text" class="form-control input-lg" name="lastname" value="{{Request::old('lastname')}}" placeholder="Enter your lastname">
		    </div>
		  </div>
		  <div class="form-group row">	
			<div class="col-sm-6">
				<label for="email" class="col-sm-3 control-label">Email</label>
				<input type="email" class="form-control input-lg" name="email" value="{{Request::old('email')}}"placeholder="Enter an email address">
		    </div>
		  </div>
		  <div class="form-group row">
		    <div class="col-sm-6">
		    	<label for="password" class="col-sm-4 control-label">Password</label>		   
		    	<input type="password" class="form-control input-lg" name="password" placeholder="Enter a new password">
		    </div>
		  </div>
		   <div class="form-group row">
		    <div class="col-sm-6">
		    	<label for="confirmpassword" class="col-sm-4 control-label">Confirm Password</label>		   
		    	<input type="password" class="form-control input-lg" name="confirmpassword" placeholder="Confirm new password">
		    </div>
		  </div>
		    <div class="form-group row">
		     <div class="col-sm-6">
		    	<input type="hidden" name="_token" value="{{Session::token()}}">
			<input type="submit" class="btn btn-primary" value="Register">
			</div>
		  </div>
		  @if(Session::has('message'))		  
		  	{{Session::get('message')}}
		  @endif												
		</form>
@endsection