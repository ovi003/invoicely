@extends('admin.layout.layout')
 
@section('title','Dashboard')
@section('content')

<div class="admin-header pl-4 pr-4 fixed-top">
	<h3 class="float-left">Dashboard</h3>
	<a href="#" class="btn btn-danger float-right">Add New</a>
</div>

<div class="container-fluid pl-4 pr-4">
	<div class="card-deck">
		<div class="card">
			<div class="card-header">
				Recent Activity
				<a href="#" class="float-right">View activity logo</a>
			</div>
			<div class="card-body align-items-center d-flex justify-content-center">
					
					Nothing to display here - <a href="#">create your first invoice</a>
			</div>
		</div>
		<div class="card at-a-glance">
			<div class="card-header">
				At a glance

			</div>
			<div class="card-body p-0">
				<ul class="list-group list-group-flush">
				    <li class="list-group-item"><i class="fas fa-tachometer-alt"></i> Total Outstanding</li>
				    <li class="list-group-item"><i class="fas fa-exclamation-triangle"></i>Dapibus ac facilisis in</li>
				    <li class="list-group-item"><i class="fas fa-check"></i> Total Collected</li>
				    <li class="list-group-item"><i class="fas fa-users"></i> Total Clients</li>
				 </ul>
			</div>
		</div>
	</div>

	<div class="mt-4 mb-4">
		<div class="card">
			<div class="card-header">
				Featured
			</div>
			<div class="card-body">
				<h5 class="card-title">Special title treatment</h5>
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				<a href="#" class="btn btn-primary">Go somewhere</a>
			</div>
		</div>
	</div>

	<div class="card-deck">
		<div class="card">
			<div class="card-header">
				Featured
			</div>
			<div class="card-body">
				<h5 class="card-title">Special title treatment</h5>
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				<a href="#" class="btn btn-primary">Go somewhere</a>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
				Featured
			</div>
			<div class="card-body">
				<h5 class="card-title">Special title treatment</h5>
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				<a href="#" class="btn btn-primary">Go somewhere</a>
			</div>
		</div>
	</div>
</div>
@stop