@extends('admin.layout.layout')
 
@section('content')
<form action="{{ url('/clients') }}">
	<div class="admin-header pl-4 pr-4 fixed-top">
		<h3 class="float-left">Invoice</h3>
		<button type="submit" class="btn btn-danger float-right">Save</button>
	</div>

	<div class="container-fluid pl-4 invoice-form-content">
		<div class="card">
			<div class="row">
				<div class="col-sm-8">
					<div class="col-sm-6 my-2">

						<div class="form-group">
							<input type="text" class="form-control custom-border" placeholder="Invoice">
						</div>
					</div>
					<div class="form-group pl-3">
						<textarea name="" class="form-control" rows="3" placeholder="Description"></textarea>
					</div>
				</div>
				<div class="col-sm-4 d-flex align-items-center justify-content-center">
					<div class="logo text-center">
						<img src="{{ asset('images/invoicely-icon.png') }}" width="70" alt="">
					</div>
				</div>
			</div>

			<div class="container-fluid pt-4">
				<div class="row">
					<div class="col-md-4">
						<div class="col-md-10">
							<div class="form-group">
								<label for="">Invoice</label>
								<div class="input-group mb-3">
								  <div class="input-group-prepend">
								    <span class="input-group-text" id="basic-addon1">#</span>
								  </div>
								  <input type="text" class="form-control" placeholder="inv-1" aria-label="Username" aria-describedby="basic-addon1">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Language</label>
									<select name="" class="form-control" id="">
										<option value="">English</option>
										<option value="">Bangla</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Currency</label>
									<select name="" class="form-control" id="">
										<option value="">United States Doller - USD</option>
										<option value="">Bangladesh Taka - BST</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row border-top pt-4 mt-4">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-8">
								<div class="address-header w-100">
									<strong>Form</strong>
									<a href="" class="float-right">Edit business profile</a>
								</div>
								<div class="address-body pt-3">
									Muazzem Hussen Chowdhury,<br>
									Smrity Bhabon 120/2,<br>
									Islaypur, Sylhet,<br>
									Bangladesh
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 mt-4">
								<div class="address-header w-100">
									<strong>To</strong>
									<a href="" class="float-right">Clients</a>
								</div>
								<div class="address-body pt-3">
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="">Date</label>
							<input type="text" class="form-control" value="26-jul-2018">
						</div>
						<div class="form-group">
							<label for="">Invoice Date</label>
							<input type="text" class="form-control" value="26-jul-2018">
						</div>
						<div class="form-group">
							<label for="">Purchase Order No.</label>
							<input type="text" class="form-control">
						</div>
					</div>
				</div>
			</div>
			
			<div class="container-fluid pt-4">
				<table class="table">
					<thead>
						<tr>
							<th class="w-50">
								Description
							</th>
							<th class="text-right" style="width: 15%">Quantity</th>
							<th class="text-right" style="width: 15%">Rate</th>
							<th class="text-right" style="width: 20%">Amount</th>
							<th></th>
						</tr>
						<tr>
							<td>
								<textarea name="" id="" cols="30" class="form-control custom-border" rows="3" placeholder="Item Name & Description"></textarea>
								<ul class="invoice-item-list float-left">
									<li>
										<i class="fas fa-calendar"></i>
									</li>
									<li>
										<i class="fas fa-link"></i>
									</li>
									<li>
										<i class="fas fa-tag"></i>
									</li>
								</ul>
								<ul class="invoice-item-list float-right">
									<li>
										<i class="fas fa-calendar"></i>
									</li>
									<li>
										<i class="fas fa-link"></i>
									</li>
									<li>
										<i class="fas fa-tag"></i>
									</li>
								</ul>
							</td>
							<td>
								<input type="text" class="form-control text-right custom-border" placeholder="quantity">
							</td>
							<td>
								<input type="text" class="form-control text-right custom-border" value="0.00">
								<select name="" id="" class="custom-border p-2 mt-1 float-right">
									<option value="">Unit</option>
									<option value="">ft</option>
									<option value="">kg</option>
									<option value="">in</option>
								</select>
							</td>
							<td>
								<div class="input-group">
								  <div class="input-group-prepend">
								    <span class="input-group-text bg-transparent border-right-0" id="basic-addon2">USD</span>
								  </div>
								  <input type="text" class="form-control border-left-0 text-right" placeholder="0.00" aria-label="Username" aria-describedby="basic-addon2">
								</div>
							</td>
							<td>
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
							</td>
						</tr>
						<tr>
							<td>
								<textarea name="" id="" cols="30" class="form-control custom-border" rows="3" placeholder="Item Name & Description"></textarea>
								<ul class="invoice-item-list float-left">
									<li>
										<i class="fas fa-calendar"></i>
									</li>
									<li>
										<i class="fas fa-link"></i>
									</li>
									<li>
										<i class="fas fa-tag"></i>
									</li>
								</ul>
								<ul class="invoice-item-list float-right">
									<li>
										<i class="fas fa-calendar"></i>
									</li>
									<li>
										<i class="fas fa-link"></i>
									</li>
									<li>
										<i class="fas fa-tag"></i>
									</li>
								</ul>
							</td>
							<td>
								<input type="text" class="form-control text-right custom-border" placeholder="quantity">
							</td>
							<td>
								<input type="text" class="form-control text-right custom-border" value="0.00">
								<select name="" id="" class="custom-border p-2 mt-1 float-right">
									<option value="">Unit</option>
									<option value="">ft</option>
									<option value="">kg</option>
									<option value="">in</option>
								</select>
							</td>
							<td>
								<div class="input-group">
								  <div class="input-group-prepend">
								    <span class="input-group-text bg-transparent border-right-0" id="basic-addon2">USD</span>
								  </div>
								  <input type="text" class="form-control border-left-0 text-right" placeholder="0.00" aria-label="Username" aria-describedby="basic-addon2">
								</div>
							</td>
							<td>
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
							</td>
						</tr>
					</thead>
				</table>
			</div>

		</div>
	</div>
</form>
@stop