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
			<a href="{{url('cd-admin/view-all-page-titles')}}">View Link</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Add new Link</span>
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
				<span class="caption-subject font-dark sbold uppercase">Add Links</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{url('store-links')}}" enctype="multipart/form-data" role="form">
				@csrf
				<div class="form-body">
					<div class="form-group{{ $errors->has('facebook_pixel_code') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Facebook Pixel Code</label>
						<div class="col-md-6">
							<textarea type="text"  class="form-control summernote" placeholder="Enter Facebook Pixel Code" name="facebook_pixel_code">{{old('facebook_pixel_code')}} </textarea>
						</div>
					</div>

					<div class="form-group{{ $errors->has('messenger_link') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Messenger Link</label>
						<div class="col-md-6">
							<textarea type="text" class="form-control summernote" placeholder="Enter Facebook Pixel Code" name="messenger_link" rows="10">{{old('messenger_link')}} </textarea>
						</div>
					</div>

					<div class="form-group{{ $errors->has('google_code') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Google Code</label>
						<div class="col-md-6">
							<textarea type="text"  class="form-control summernote" placeholder="Enter Facebook Pixel Code" name="google_code">{{old('google_code')}} </textarea>
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