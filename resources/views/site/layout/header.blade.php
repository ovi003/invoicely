
<div class="header w-100">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="{{ asset('images/invoicely-icon.png') }}" width="50px" alt="">
				<img src="{{ asset('images/invoicely-logo.png') }}" class="ml-2" width="100" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Features <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Customers</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pricing</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Help Center</a>
					</li>
					<li class="nav-item">
						<a class="nav-link btn btn-danger mr-2 px-4 text-white" href="{{ url('/login') }}">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link btn btn-danger ml-2 px-4 text-white" href="{{ url('/signup') }}">Signup</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</div>
