@extends('cd-admin.admin-master')

<!-- page content -->
@section('content')
@if(Session::has('failure'))
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Booking Deleted Successfully</strong> {{ Session::get('message', '') }}
</div>
@elseif(Session::has('success'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Booking Added Successfully</strong> {{ Session::get('message', '') }}
</div>

@elseif(Session::has('success1'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Booking Updated Successfully</strong> {{ Session::get('message', '') }}
</div>

@endif
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<a href="{{url('cd-admin/dashboard')}}">Home</a>
			<i class="fa fa-circle"></i>
		</li>
	</li>
	<li>
		<span>View all Booking</span>
	</li>
</ul>
{{-- <div class="page-toolbar">
	<div class="btn-group pull-right">
		<button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
			<i class="fa fa-angle-down"></i>
		</button>
		<ul class="dropdown-menu pull-right" role="menu">
			<li>
				<a href="{{url('cd-admin/edit-ceo-message/'.$data['id'])}}">
					<i class="fa fa-edit"></i> Edit
				</a>
			</li>
		</ul>
	</div>
</div> --}}
</div>
<!-- END PAGE BAR -->

<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption font-dark">
					<i class="icon-settings font-dark"></i>
					<span class="caption-subject bold uppercase"> View Booking Details </span>
				</div>
			</div>
			<div class="portlet-body">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Personal Information
					</div>
					<div class="panel-body">
						<h4>
							<div class="row">
								<div class="col-md-6">
									<b>Name:</b>{{$data['name']}}
									<br>
									<b>Email:</b>{{$data['email']}}
									<br>
									<b>Phone Number:</b>{{$data['phone_no']}}
									<br>
									<b>Zip:</b>{{$data['zip']}}

								</div>
								<div class="col-md-6">
									<b>Have Pets:</b>{{ucfirst($data['have_pets'])}}
									<br>
									<b>Address:</b>{{$data['address']}}
									<br>
									<b>City:</b>{{$data['city']}}
									<br>
								</div>
								<div class="col-md-12">
									<b >Message:</b>
									<p>{{$data['message']}}</p>
								</div>
							</div>
							
						</h4>
					</div>

					
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						Purchase Details
					</div>
					<div class="panel-body">
						<h4><b>Service Name:</b> {{$service['name']}}</h4>
						<b>Services Selected:</b>
						<br>
						<?php $services_taken = json_decode($data['services']);  ?>
						@foreach($services_taken as $services_take)
						<span><i class="fa fa-check"></i> {{$services_take->duration}}({{$services_take->price}})</span>
						@endforeach
						<br>
						<b>Extra Services Selected:</b>
						<br>
						<?php $extras = json_decode($data['extras']);  ?>
						@foreach($extras as $extras_taken)
						<span><i class="fa fa-check"></i> {{$extras_taken->extra_title}}({{$extras_taken->extra_price}})</span>
						@endforeach
						<h3 align="center"><b>Grand Total =></b>{{$data['total_price']}}</h3>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						Change Status
					</div>
					<div class="panel-body">
						<form action="{{url('cd-admin/update-booking-status/'.$data['id'])}}" method="POST">
							@csrf
							<div class="btn-group">
								@if($data['status'] == 'Replied')
								<button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Replied
									@else
									<button class="btn btn-xs red dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Not Replied
										<i class="fa fa-angle-down"></i>
										@endif
									</button>
									@if($data['status'] == 'Not Replied')
									<ul class="dropdown-menu pull-left" role="menu">
										<li>
											<button class="btn btn-success" type="submit">Replied</button>
										</li>
									</ul>
									@endif
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- END EXAMPLE TABLE PORTLET-->
		</div>
	</div>

	@endsection