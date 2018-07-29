@php
use Illuminate\Support\Facades\Route;
$currentPath= Route::getFacadeRoot()->current()->uri();
@endphp


<aside class="sidebar">
	<a href="#" class="navbar-brand text-white p-3">
		<img src="{{ asset('images/invoicely-icon.png') }}" class="image-circle" alt="">
		<span class="user-name">
			Muazzem Hussen Chowdhury
		</span>
	</a>
	<div class="logo mt-3 mx-auto">
		<img src="{{ asset('images/invoicely-logo.png') }}" class="img-fluid" alt="">
	</div>
	<ul class="list-unstyled sidebar-nav mt-4">
		<li class="{{  $currentPath === 'dashboard' ? 'active' : '' }}">
			<a href="{{ url('/dashboard') }}">
				<i class="fas fa-chart-pie"></i> 
				<span class="nav-text">Dashboard</span></a>
			</li>
		<li class="{{  $currentPath === 'clients' ? 'active' : '' }}">
			<a href="{{ url('/clients') }}">
				<i class="fas fa-users"></i> <span class="nav-text">Clients</span>
				</a>
			</li>
		<li class="{{  $currentPath === 'invoice' ? 'active' : '' }}">
			<a href="{{ url('/invoice') }}">
				<i class="fas fa-sticky-note"></i> 
				<span class="nav-text">Invoices</span>
			</a>
		</li>
	</ul>

</aside>