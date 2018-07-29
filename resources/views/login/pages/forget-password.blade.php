@extends('login.layout.layout')
 

@section('title','Forget Password')

@section('content')
<div class="form-box mx-auto w-100 rounded p-3 mt-4">
	<div class="box-header text-center">
		Forgot your password?
	</div>
	<div class="form-body pt-3">
		<form action="">
			<div class="form-group">
				<label for="">Email Address</label>
				<a href="{{ url('/login') }}" class="float-right">Log in instead</a>
				<input type="email" class="form-control" required>
			</div>
			<div class="form-group text-center mt-4">
				<button type="submit" class="btn btn-default">Continue</button>
			</div>
		</form>
	</div>
</div>
<div class="container-fluid">
	<div class="login-footer text-center">
		<p class="text-white mt-4">Not a member yet</p>
		<a href="{{ url('/signup') }}" class="btn btn-danger text-uppercase rounded">Start invoincing now</a>
	</div>
</div>
@stop