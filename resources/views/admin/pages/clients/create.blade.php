@extends('admin.layout.layout')
 
@section('title','Add New Client')

@section('content')
<form action="{{ url('/clients') }}">
	<div class="admin-header pl-4 pr-4 fixed-top">
		<h3 class="float-left">Clients</h3>
		<button type="submit" class="btn btn-danger float-right">Submit</button>
	</div>

	<div class="container-fluid pl-4 pr-4">
		<div class="card mb-4">
			<div class="card-header">Individual</div>
			<div class="card-body p-0">
				<div class="section-top p-4 pb-3 d-flex border-bottom">
					<div class="profile-image mr-4 align-items-center">
						<img src="{{ asset('images/invoicely-icon.png') }}" width="75px" alt="">
					</div>
					<div class="client-type mb-4">
						<div class="check-box d-flex">
							<div class="left p-2 w-75">Individual</div>
							<div class="right w-25 align-items-center d-flex justify-content-center"><i class="fas fa-check "></i></div>
						</div>
						<div class="check-box d-flex">
							<div class="left p-2 w-75">Organization</div>
							<div class="right w-25 align-items-center d-flex justify-content-center"><i class="fas fa-check"></i></div>
						</div>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 pt-4 pb-4 border-right">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">First Name</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Last Name</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">First Name</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Last Name</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 pt-4 pb-4">
							<div class="form-group">
								<label for="">Currency</label>
								<select name="" class="form-control bg-light" id="">
									<option value="">United States Doller - USD</option>
									<option value="">Bangladesh - BDT</option>
								</select>
							</div>
							<div class="form-group">
								<label for="">Language</label>
								<select name="" class="form-control bg-light" id="">
									<option value="">English</option>
									<option value="">Bangla</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="card mb-4 ">
			<div class="card-header">
				Address
			</div>
			<div class="card-body pt-0 pb-0">
				<div class="row">
					<div class="col-md-6 pt-4 pb-4 border-right">
						<div class="form-group">
							<label for="">Address (Line 1)</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Address (Line 2)</label>
							<input type="text" class="form-control">
						</div>
					</div>

					<div class="col-md-6 pt-4 pb-4">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Postal Code</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">State</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">City</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Country</label>
									<select name="" class="form-control bg-light" id="">
										<option value="">Bangladesh</option>
										<option value="">USA</option>
										<option value="">England</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="card mb-4">
			<div class="card-header">
				Additional Information
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Phone Number</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Fax Number</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Tax Identifiaction Number</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Note</label>
							<textarea name="" class="form-control" id="" rows="5"></textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
@stop