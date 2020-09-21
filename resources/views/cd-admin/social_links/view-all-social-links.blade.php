@extends('cd-admin.admin-master')

<!-- page content -->
@section('content')
@if(Session::has('failure'))
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>SOCIAL LINKS DELETED SUCCESSFULLY!!!</strong> {{ Session::get('message', '') }}
</div>
@elseif(Session::has('storeSuccess'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>SOCIAL LINKS INSERTED SUCCESSFULLY!!!</strong> {{ Session::get('message', '') }}
</div>

@elseif(Session::has('updateSuccess'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>SOCIAL LINKS UPDATED SUCCESSFULLY!!!</strong> {{ Session::get('message', '') }}
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
		<span>View all Social Links</span>
	</li>
</ul>
@if($social != NULL) 
<div class="page-toolbar">
	<div class="btn-group pull-right">
		<button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
			<i class="fa fa-angle-down"></i>
		</button>
		<ul class="dropdown-menu pull-right" role="menu">
			<li>
				<a href="{{url('cd-admin/edit-socialLinks/'.$social['id'])}}">
					<i class="fa fa-edit"></i> Edit
				</a>
			</li>
		</ul>
	</div>
</div>
</div>
<!-- END PAGE BAR -->

<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption font-dark">
					<i class="icon-settings font-dark"></i>
					<span class="caption-subject bold uppercase"> View All Social Links </span>
				</div>
			</div>
			<div class="portlet-body">
				<div class="panel panel-default">
					<div class="panel-heading"> Facebook Link </div>
					<a href="{{$social['fb_link']}}"><div class="panel-body"> {!!$social['fb_link']!!} </div></a>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading"> Twitter Link </div>
					<a href="{{$social['twitter_link']}}"><div class="panel-body"> {!!$social['twitter_link']!!} </div></a>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading"> Instagram Link </div>
					<a href="{{$social['insta_link']}}"><div class="panel-body"> {!!$social['insta_link']!!} </div></a>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading"> Youtube Link </div>
					<div class="panel-body"> <a href="{{$social['youtube_link']}}">{{$social['youtube_link']}}</a> </div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">Email </div>
					<a href="mailto:{{$social['email']}}"><div class="panel-body"> {!!$social['email']!!} </div></a>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading"> Contact Number </div>
					<a href="tel:{{$social['contact_no']}}"><div class="panel-body"> {!!$social['contact_no']!!} </div></a>
				</div>	
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
	</div>
</div>
@else


<div align="center">
	<a href="{{url('cd-admin/add-social-links')}}"><button class="btn btn-primary">Add Social Links</button></a>
</div>
@endif





<!-- view modals -->
<div id="long" class="modal fade modal-scroll" tabindex="-1" data-replace="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">A Fairly Long Modal</h4>
			</div>
			<div class="modal-body">

			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
			</div>
		</div>
	</div>
</div>


@endsection