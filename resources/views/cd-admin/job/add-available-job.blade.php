@extends('cd-admin.admin-master')

<!-- page content -->
@section('content')

<!-- BEGIN PAGE BAR -->
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<a href="{{url('cd-admin/dashboard')}}">Home</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<a href="{{url('/cd-admin/view-available-job')}}">View all Available Job</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Add Available Job</span>
		</li>
	</ul>
</div>
<!-- END PAGE BAR -->
<div class="row">

	<!-- BEGIN SAMPLE FORM PORTLET-->
	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption">
				<i class="icon-settings font-dark"></i>
				<span class="caption-subject font-dark sbold uppercase">Add Available Job</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{url('cd-admin/insert-available-job')}}" enctype="multipart/form-data" role="form">
				@csrf
				<div class="form-body">
					
					
					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label"> Title</label>
						<div class="col-md-6">
							<input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{old('title')}}">
						</div>
					</div>

					<div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Web Site Link</label>
						<div class="col-md-6">
							<input type="text" name="link" class="form-control" placeholder="Enter Website Link" value="{{old('link')}}">
						</div>
					</div>

					

					


					
				</div>
				<div class="form-actions">
					<div class="row">
						<div class="col-md-offset-3 col-md-9">
							<button type="submit" class="btn green">Submit</button>
							<a href="{{url()->previous()}}" class="btn default">Cancel</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->
</div>
@endsection