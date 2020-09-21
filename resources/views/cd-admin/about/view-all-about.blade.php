@extends('cd-admin.admin-master')

<!-- page content -->
@section('content')
@if(Session::has('failure'))
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>About Deleted Successfully</strong> {{ Session::get('message', '') }}
</div>
@elseif(Session::has('success'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>About Added Successfully</strong> {{ Session::get('message', '') }}
</div>

@elseif(Session::has('success1'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>About Updated Successfully</strong> {{ Session::get('message', '') }}
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
		<span>View all About</span>
	</li>
</ul>
<div class="page-toolbar">
	<div class="btn-group pull-right">
		<button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
			<i class="fa fa-angle-down"></i>
		</button>
		<ul class="dropdown-menu pull-right" role="menu">
			<li>
				<a href="{{url('cd-admin/edit-about/'.$about['id'])}}">
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
					<span class="caption-subject bold uppercase"> View All About </span>
				</div>
			</div>
			<div class="portlet-body">
				<img src="{{url('uploads/thumbnail/'.$about['image'])}}" alt="{{$about['altimage']}}" class="img-responsive">
				<h3><b>Title:</b>{{$about['title']}}</h3>
				<p>{!!$about['description']!!}</p>


			</div>
			<div class="portlet-body">
				<h2>BackGround Image</h2>
				<img src="{{url('uploads/thumbnail/'.$about['background_image'])}}">
			</div>
			<div class="portlet-body">
				<h2>Sub Text</h2>
				<p>{{$about['sub_text']}}</p>
			</div>
			<div class="portlet-body">
				<h2>Summary</h2>
				<p>{!!$about['summary']!!}</p>
			</div>

		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
	</div>
</div>







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