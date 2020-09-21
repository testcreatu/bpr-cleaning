@extends('cd-admin.admin-master')

<!-- page content -->
@section('content')

@if(Session::has('failure'))
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>DELETED SUCCESSFULLY!!!</strong> {{ Session::get('message', '') }}
	</div>
	@elseif(Session::has('success'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>INSERTED SUCCESSFULLY!!!</strong> {{ Session::get('message', '') }}
	</div>

	@elseif(Session::has('success1'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>UPDATED SUCCESSFULLY!!!</strong> {{ Session::get('message', '') }}
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
		<span>View all Team</span>
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
					<span class="caption-subject bold uppercase"> View All Team </span>
				</div>
				<div class="btn-group pull-right">
					<a href="{{url('cd-admin/add-team')}}">
						<button id="sample_editable_1_new" class="btn sbold green"> Add New Team
							<i class="fa fa-plus"></i>
						</button>
					</a>
				</div>
			</div>
			<div class="portlet-body">
				<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
					<thead>
						<tr>
							<th>SN</th>
							<th> Name </th>
							<th> Designation </th>
							<th>Status</th>
							<th> Actions </th>
						</tr>
					</thead>
					<tbody>
					@foreach($team as $teams)
						<tr class="odd gradeX">
							<td>{{$loop->iteration}}</td>
							<td>{!!$teams['name']!!}</td>
							<td>{!!$teams['designation']!!}</td>
							<td>@if($teams['active'] == '1')
							<span class="badge badge-success"> Active </span>
							@else
							<span class="badge badge-danger"> In-Active </span>
							@endif
							</td>
							
							<td>
								<div class="btn-group">
									<button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
										<i class="fa fa-angle-down"></i>
									</button>
									<ul class="dropdown-menu pull-left" role="menu">
										<li>
											<a data-toggle="modal" href="#view-modal{{$teams['id']}}">
												<i class="fa fa-eye"></i> View
											</a>
										</li>
										<li>
											<a href="{{url('cd-admin/edit-team/'.$teams['id'])}}">
												<i class="fa fa-edit"></i> Edit
											</a>
										</li>
										<li>
											<a data-toggle="modal" href="#delete-modal{{$teams['id']}}">
												<i class="fa fa-trash"></i> Delete
											</a>
										</li>
									</ul>
								</div>
							</td>
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
	</div>
</div>

<!-- view modals -->
@foreach($team as $ch)
<div id="view-modal{{$ch['id']}}" class="modal fade modal-scroll" tabindex="-1" data-replace="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title pull-left">{!!$ch['name']!!}</h4>
				<p class="modal-title pull-right">status 
				@if($ch['active'] == '1')
				<span class="badge badge-success"> Active </span>
				@else
				<span class="badge badge-danger"> In-Active </span>
				@endif
				</p>
			</div>
			<div class="modal-body">
				<img src="{{url('uploads/'.$ch['image'])}}" alt="" class="img-responsive">
			</div>
			<hr>
			<div class="panel panel-default">
				<div class="panel-heading"> Designation </div>
				<div class="panel-body"> {{$ch['designation']}} </div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading"> Email </div>
				<div class="panel-body"> {{$ch['email']}} </div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading"> Contact </div>
				<div class="panel-body"> {{$ch['contact']}} </div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading"> Address </div>
				<div class="panel-body"> {{$ch['address']}} </div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading"> FB_Link </div>
				<div class="panel-body"> {{$ch['fb_link']}} </div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading"> Insta_Link </div>
				<div class="panel-body"> {{$ch['insta_link']}} </div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading"> Twitter_Link </div>
				<div class="panel-body"> {{$ch['twitter_link']}} </div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading"> DOB </div>
				<div class="panel-body"> {{$ch['birth_date']}} </div>
			</div>

			<div class="panel panel-default">
				 RESUME :-
				<a href="{{url('uploads/document/'.$ch['document'])}}" download><button>Download</button></a>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
			</div>
		</div>
	</div>
</div>


<!-- delete modal -->

<div class="modal fade" id="delete-modal{{$ch['id']}}" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">Delete</h4>
			</div>
			<div class="modal-body"> Are you sure want to delete this ? </div>
			<div class="modal-footer">
				<button type="button" class="btn dark btn-outline" data-dismiss="modal">No</button>
				<a href="{{url('cd-admin/delete-team/'.$ch['id'])}}"  class="btn green">YES</a>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
@endforeach

@endsection