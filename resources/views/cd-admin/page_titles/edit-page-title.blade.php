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
			<a href="{{url('cd-admin/view-page-titles')}}">View Page Title</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Edit Page Title</span>
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
				<span class="caption-subject font-dark sbold uppercase">Edit Page Title</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{url('cd-admin/edit-page-titles/'.$data['id'])}}" enctype="multipart/form-data" role="form">
				@csrf
				<div class="form-body">
					<div class="form-group{{ $errors->has('page_name') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Page Name</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="page_name"  value="{{$data['page_name']}}" disabled>
						</div>
					</div>

					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Sub Text</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="title"  value="{{$data['title']}}" >
						</div>
					</div>
					<div class="form-group{{ $errors->has('quote') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Quote</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="quote"  value="{{$data['quote']}}" >
						</div>
					</div>


					<div class="form-group{{ $errors->has('sub_text') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Sub Text</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="sub_text"  value="{{$data['sub_text']}}" >
						</div>
					</div>

					<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Background Image</label>
						<div class="col-md-6">
							<input type="file" class="form-control" name="image"  value="{{$data['image']}}">
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