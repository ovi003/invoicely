@extends('admin.layout.layout')
 

@section('title','Clients')

@section('content')

<div class="admin-header pl-4 pr-4 fixed-top">
	<h3 class="float-left">Clients</h3>
	<a href="{{ url('/clients/create') }}" class="btn btn-danger float-right">New Client</a>
</div>

<div class="container-fluid pl-4 pr-4">
	<div class="row client-header mt-4">
		<div class="col-sm-6">
			<div class="dropdown d-inline-block custom-dropdown">

			  <input type="checkbox">
			  <button class="btn dropdown-toggle rounded-0" id="bulkAction" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  </button>
			  <div class="dropdown-menu" aria-labelledby="bulkAction">
			    <a class="dropdown-item" href="#">Action</a>
			    <a class="dropdown-item" href="#">Another action</a>
			    <a class="dropdown-item" href="#">Something else here</a>
			  </div>
			</div>
			<div class="dropdown d-inline-block custom-dropdown">
			  <button class="btn dropdown-toggle rounded-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  	<i class="fas fa-cog"></i>
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			    <a class="dropdown-item" href="#">Action</a>
			    <a class="dropdown-item" href="#">Another action</a>
			    <a class="dropdown-item" href="#">Something else here</a>
			  </div>
			</div>
		</div>
		<div class="col-sm-6">
			<form action="">
				<div class="form-group client-search">
					<input type="text" class="form-control">
					<i class="fas fa-search"></i>
				</div>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="container-fluid mt-4">
			<div class="row client-filter">
				<div class="col-sm-6">
					Showing 1 to 2 of 2 item(s)
				</div>
				<div class="col-sm-6">
					<ul class="filter-items mb-1 float-right clearfix">
						<li><a href="">Archive</a></li>
						<li><a href="">All</a></li>
					</ul>
				</div>
			</div>

			<div class="table-responsive">
				<table class="table client-list">
					<thead>
						<tr>
							<th></th>
							<th>Client Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Country</th>
							<th></th>
						</tr>
					</thead>
					<tr>
						<td class="text-center">
							<input type="checkbox">
						</td>
						<td>Muazzem</td>
						<td>mhcovi003@gmail.com</td>
						<td>+8801674676967</td>
						<td>BD</td>
						<td>
							<a href="#" class="btn btn-light custom-link">
								<i class="fas fa-pen"></i>
							</a>
							<a href="#" class="btn btn-light custom-link">
								<i class="fas fa-ellipsis-h"></i>
							</a>
						</td>
					</tr>
					<tr>
						<td class="text-center">
							<input type="checkbox">
						</td>
						<td>Ovi Chowdhury</td>
						<td>mhcovi003@gmail.com</td>
						<td>+8801674676967</td>
						<td>BD</td>
						<td>
							<a href="#" class="btn btn-light custom-link">
								<i class="fas fa-pen"></i>
							</a>
							<a href="#" class="btn btn-light custom-link">
								<i class="fas fa-ellipsis-h"></i>
							</a>
						</td>
					</tr>
					<tr>
						<td class="text-center">
							<input type="checkbox">
						</td>
						<td>Mayruf</td>
						<td>mayruf@gmail.com</td>
						<td>+8801674676967</td>
						<td>BD</td>
						<td>
							<a href="#" class="btn btn-light custom-link">
								<i class="fas fa-pen"></i>
							</a>
							<a href="#" class="btn btn-light custom-link">
								<i class="fas fa-ellipsis-h"></i>
							</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-6">
			<div class="btn-group">
				<button class="btn btn-light custom-border mr-3">Prev</button>
			</div>
			<div class="btn-group">
				<button class="btn btn-light custom-border">Next</button>
			</div>
		</div>
		<div class="col-sm-6 align-right">
			<div class="float-right">
				<label for="">Number of Result</label>
				<select name="" class="p-2 custom-border" id="">
					<option value="">10</option>
					<option value="">15</option>
					<option value="">20</option>
				</select>
				<div class="float-right ml-2">
					  <button class="btn dropdown-toggle rounded-0 custom-border" type="button" id="Export" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

					 		Export
					  </button>
					  <div class="dropdown-menu" aria-labelledby="export">
					    <a class="dropdown-item" href="#">Action</a>
					    <a class="dropdown-item" href="#">Another action</a>
					    <a class="dropdown-item" href="#">Something else here</a>
					  </div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop