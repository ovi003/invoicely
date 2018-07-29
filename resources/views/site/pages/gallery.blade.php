@extends('site.layout.layout')
 

@section('title', 'Gallery')

@section('content')

<div class="preview-section position-fixed w-100 bg-dark text-center">

	<div class="buttons py-3">
		<a href="" class="btn btn-primary download-link" download>
			<i class="fas fa-download"></i>
		</a>

		<button class="btn btn-danger btn-close">
			<i class="fas fa-times"></i>
		</button>
	</div>

	<img class="preview-image w-75 border" src="" alt="Card image">


</div>

<div class="image-gallery">
	<div class="section-title display-3 text-center my-4">
		Image Gallery
	</div>

	<div class="container-fluid my-4">
		<div class="row">
			<div class="card-columns px-4">
			  	<a href="#" class="preview-link" data-src="{{ asset('images/gallery/1.png') }}">
			  		<div class="card">
			  		  <img class="card-img-top" src="{{ asset('images/gallery/1.png') }}" alt="Card image">
			  		  <div class="card-body">
			  		  	<div class="card-title text-center">Login Page</div>
			  		  </div>
			  		</div>
			  	</a>
			  	<a href="#" class="preview-link" data-src="{{ asset('images/gallery/2.png') }}">
			  		<div class="card">
			  		  <img class="card-img-top" src="{{ asset('images/gallery/2.png') }}" alt="Card image">
			  		  <div class="card-body">
			  		  	<div class="card-title text-center">Signup Page</div>
			  		  </div>
			  		</div>
			  	</a>
			  	<a href="#" class="preview-link" data-src="{{ asset('images/gallery/3.png') }}">
			  		<div class="card">
			  		  <img class="card-img-top" src="{{ asset('images/gallery/3.png') }}" alt="Card image">
			  		  <div class="card-body">
			  		  	<div class="card-title text-center">Forget Password</div>
			  		  </div>
			  		</div>
			  	</a>
			  	<a href="#" class="preview-link"  data-src="{{ asset('images/gallery/4.png') }}">
			  		<div class="card">
			  		  <img class="card-img-top" src="{{ asset('images/gallery/4.png') }}" alt="Card image">
			  		  <div class="card-body">
			  		  	<div class="card-title text-center">Dashboard</div>
			  		  </div>
			  		</div>
			  	</a>
			  	<a href="#" class="preview-link"  data-src="{{ asset('images/gallery/5.png') }}">
			  		<div class="card">
			  		  <img class="card-img-top" src="{{ asset('images/gallery/5.png') }}" alt="Card image">
			  		  <div class="card-body">
			  		  	<div class="card-title text-center">Clients</div>
			  		  </div>
			  		</div>
			  	</a>
			  	<a href="#" class="preview-link" data-src="{{ asset('images/gallery/6.png') }}">
			  		<div class="card">
			  		  <img class="card-img-top" src="{{ asset('images/gallery/6.png') }}" alt="Card image">
			  		  <div class="card-body">
			  		  	<div class="card-title text-center">Client Create</div>
			  		  </div>
			  		</div>
			  	</a>
			  	<a href="#" class="preview-link" data-src="{{ asset('images/gallery/7.png') }}">
			  		<div class="card">
			  		  <img class="card-img-top" src="{{ asset('images/gallery/7.png') }}" alt="Card image">
			  		  <div class="card-body">
			  		  	<div class="card-title text-center">Invoice</div>
			  		  </div>
			  		</div>
			  	</a>
			  	<a href="#" class="preview-link" data-src="{{ asset('images/gallery/8.png') }}">
			  		<div class="card">
			  		  <img class="card-img-top" src="{{ asset('images/gallery/8.png') }}" alt="Card image">
			  		  <div class="card-body">
			  		  	<div class="card-title text-center">Invoice Create</div>
			  		  </div>
			  		</div>
			  	</a>
			</div>
	</div>
</div>

@stop