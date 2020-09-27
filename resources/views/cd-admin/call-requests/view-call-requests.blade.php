@extends('cd-admin.admin-master')

<!-- page content -->
@section('content')

@if(Session::has('failure'))
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Call Requests Deleted Successfully</strong> {{ Session::get('message', '') }}
</div>
@elseif(Session::has('success'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Call Requests Added Successfully</strong> {{ Session::get('message', '') }}
</div>

@elseif(Session::has('success1'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Call Requests Updated Successfully</strong> {{ Session::get('message', '') }}
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
		<span>View Call Requests</span>
	</li>
</ul>
</div>
<!-- END PAGE BAR -->

<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption font-dark">
					<i class="icon-settings font-dark"></i>
					<span class="caption-subject bold uppercase"> View Call Requests </span>
				</div>
				{{-- <div class="btn-group pull-right">
					<a href="{{url('cd-admin/add-carousel')}}">
						<button id="sample_editable_1_new" class="btn sbold green"> Add Call Requests
							<i class="fa fa-plus"></i>
						</button>
					</a>
				</div> --}}
			</div>
			<div class="portlet-body">
				<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
					<thead>
						<tr>
							<th>SN</th>
							<th>Phone Number</th>
						</tr>
					</thead>
					<tbody>
						@foreach($request as $r)
						<tr class="odd gradeX">
							<td>{{$loop->iteration}}</td>
							<td>{{$r['phone_no']}}</td>
						{{-- 	<td>
								<div class="btn-group">
									<button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
										<i class="fa fa-angle-down"></i>
									</button>
									<ul class="dropdown-menu pull-left" role="menu">
										<li>
											<a data-toggle="modal" href="#view-modal{{$carousels['id']}}">
												<i class="fa fa-eye"></i> View
											</a>
										</li>
										<li>
											<a href="{{route('edit-carousel-form',$carousels['id'])}}">
												<i class="fa fa-edit"></i> Edit
											</a>
										</li>
										<li>
											<a data-toggle="modal" href="#delete-modal{{$carousels['id']}}">
												<i class="fa fa-trash"></i> Delete
											</a>
										</li>
									</ul>
								</div>
							</td> --}}
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
	</div>
</div>


@endsection