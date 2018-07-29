@extends('admin.layout.layout')
 

@section('title','Invoices')

@section('content')

<div class="admin-header pl-4 pr-4 fixed-top">
	<h3 class="float-left">Invoice</h3>
	<a href="{{ url('/invoice/create') }}" class="btn btn-danger float-right">Add New</a>
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
			<div class="btn-group">
				  <button class="btn dropdown-toggle rounded-0 custom-border" type="button" id="clientList" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog"></i>
				  </button>
				  <div class="dropdown-menu" aria-labelledby="clientList">
				    <a class="dropdown-item" href="#">Action</a>
				    <a class="dropdown-item" href="#">Another action</a>
				    <a class="dropdown-item" href="#">Something else here</a>
				  </div>
			</div>
			<div class="btn-group">
				  <button class="btn dropdown-toggle rounded-0 custom-border" type="button" id="clientList" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cloud"></i>
				  </button>
				  <div class="dropdown-menu" aria-labelledby="clientList">
				    <a class="dropdown-item" href="#">Action</a>
				    <a class="dropdown-item" href="#">Another action</a>
				    <a class="dropdown-item" href="#">Something else here</a>
				  </div>
			</div>
		</div>
		<div class="col-sm-6">

			<div class="btn-group">
				  <button class="btn dropdown-toggle rounded-0 custom-border" type="button" id="clientList" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

				 		All Clients
				  </button>
				  <div class="dropdown-menu" aria-labelledby="clientList">
				    <a class="dropdown-item" href="#">Action</a>
				    <a class="dropdown-item" href="#">Another action</a>
				    <a class="dropdown-item" href="#">Something else here</a>
				  </div>
			</div>
			<div class="btn-group">
				  <button class="btn dropdown-toggle rounded-0 custom-border" type="button" id="clientList" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-cog"></i>
				  </button>
				  <div class="dropdown-menu" aria-labelledby="clientList">
				    <a class="dropdown-item" href="#">Action</a>
				    <a class="dropdown-item" href="#">Another action</a>
				    <a class="dropdown-item" href="#">Something else here</a>
				  </div>
			</div>
			<form action="" class="d-inline-block float-right">
				<div class="form-group client-search">
					<input type="text" class="form-control">
					<i class="fas fa-search"></i>
				</div>
			</form>
		</div>
	</div>
	<div class="row client-filter mt-4">
		<div class="col-sm-3">
			Showing 1 to 2 of 2 item(s)
		</div>
		<div class="col-sm-9">
			<ul class="filter-items mb-1 float-right clearfix">
				<li><a href="">Archive</a></li>
				<li><a href="">All</a></li>
				<li><a href="">Draft</a></li>
				<li><a href="">Paid</a></li>
				<li><a href="">Unpaid</a></li>
				<li><a href="">Overdue</a></li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="container-fluid">
			<div class="table-responsive">
				<table class="table client-list">
					<thead>
						<tr>
							<th></th>
							<th>Date</th>
							<th>Due</th>
							<th>Details</th>
							<th>Client</th>
							<th>Status</th>
							<th class="text-right">Total</th>
						</tr>
					</thead>
					<tr>
						<td class="text-center">
							<input type="checkbox">
						</td>
						<td>28-jul-2018</td>
						<td></td>
						<td>Something about this invoice</td>
						<td>Ovi Chowdhury</td>
						<td>Draft</td>
						<td class="text-right">12,000</td>
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