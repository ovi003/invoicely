@extends('site.layout.layout')
 

@section('title', 'Invoicely | Make invoice free')
@section('content')
<div class="banner position-relative">
	<div class="container h-100">
		<div class="row h-100">
			<div class="col-sm-6 h-100">
				<div class="caption">
					<div class="caption-title">
						Your Business. Your Clients. 
						One Free, Powerful Invoicing Platform.
					</div>
					<a href="#" class="caption-link">See why over 100,000 small businesses love invoicely</a>

					<a href="#" class="btn bg-white text-dark">
						Start using invoicely for free
					</a>

					<a href="{{ url('/gallery') }}" class="btn btn-link text-white">
						Take a tour

						<i class="fas fa-arrow-right"></i>
					</a>
				</div>
				
				

			</div>
		</div>
	</div>

	<div class="banner-footer w-100 position-absolute py-3">
		<form action="" class="form-inline justify-content-center">
			<div class="form-group px-3">
				<input type="email" class="form-control placeholder="Your email address">
			</div>
			<div class="form-group px-3">
				<input type="text" class="form-control placeholder="Your name">
			</div>
			<button class="btn btn-danger" type="submit">Get Started</button>
		</form>
	</div>
</div>

<div class="features py-5 bg-white">
	<div class="container">
		<div class="section-title text-center">
			FOCUS ON GROWING YOUR BUSINESS
		</div>
		<div class="section-lead w-50 text-center mx-auto">
			We're here to help you get your finances out of the way — invoicely is free,
			simple and secure invoicing for small businesses.
		</div>

		<div class="card-deck w-75 mx-auto mt-3">
			<div class="card">
			  <img class="card-img-top p-3" src="{{ asset('images/index_dashboard.png') }}" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title text-center">Card title</h5>
			    <p class="card-text text-center">
			    	Enjoy a fully-featured suite of customizable business reports and summaries so you always know where your business stands.
			   	</p>
			   	<div class="text-center">
			   		<a href="#" class="btn btn-primary">Go somewhere</a>
			   	</div>
			  </div>
			</div>
			<div class="card">
			  <img class="card-img-top p-3" src="{{ asset('images/index_dashboard.png') }}" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title text-center">Card title</h5>
			    <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			   	<div class="text-center">
			   		<a href="#" class="btn btn-primary">Go somewhere</a>
			   	</div>
			  </div>
			</div>
			<div class="card">
			  <img class="card-img-top p-3" src="{{ asset('images/index_dashboard.png') }}" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title text-center">Card title</h5>
			    <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			   	<div class="text-center">
			   		<a href="#" class="btn btn-primary">Go somewhere</a>
			   	</div>
			  </div>
			</div>
		</div>
	</div>
</div>

@stop