@extends('login.layout.layout')
 

@section('title','Signup')

@section('content')

<div class="container-fluid">
	<div class="signup-big-title text-center text-white mt-3">Free, Unlimited Invoicing</div>
	<div class="signup-lead text-center w-50 mx-auto text-white mt-3">
		Thank you for choosing invoicely. You're just a few steps away from unlimited invoicing.
	</div>
	<div class="signup-steps justify-content-center row mt-4">
		<ul class="p-0">
			<li class="step">Signup</li>
			<li class="line"></li>
			<li class="step">Account</li>
			<li class="line"></li>
			<li class="step">Business</li>
		</ul>
	</div>
</div>

<div class="form-box mx-auto w-100 rounded p-3 mt-4">
	<div class="box-header text-center">
		Sign Up
	</div>
	<div class="form-body pt-3">
		<form action="">
			<div class="form-group">
				<label for="">Email Address*</label>
				<input type="email" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="">Password*</label>
				<input type="password" class="form-control" placeholder="Password 6 characters" required>
			</div>
			<div class="form-group">
				<label for="">Password(confirm)*</label>
				<input type="password" class="form-control" placeholder="Password must match" required>
			</div>
			<div class="text-center bg-gray mt-3 p-2 rounded">
				By proceeding you agreee<br>
				to the <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
			</div>
			<div class="form-group text-center mt-1 p-3">
				<button type="submit" class="btn btn-danger">Proceed</button>
			</div>
		</form>
	</div>
</div>
<div class="container-fluid">
	<div class="login-footer text-center">
		<p class="text-white mt-4">Already a member</p>
		<a href="{{ url('/login') }}" class="btn bg-black text-white text-uppercase rounded">Login</a>
	</div>
</div>
@stop