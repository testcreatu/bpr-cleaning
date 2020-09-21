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
			<a href="{{url('cd-admin/view-all-testimonial')}}">View all Testimonial</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Edit Testimonial</span>
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
				<span class="caption-subject font-dark sbold uppercase">Edit Testimonial</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{url('cd-admin/updateTestimonial/'.$check['id'])}}" enctype="multipart/form-data" role="form">
			@csrf
				<div class="form-body">
					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Name</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter name" name="title" value="{{$check['title']}}">
						</div>
					</div>

					<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
						<label for="exampleInputFile" class="col-md-3 control-label">Upload Image</label>
						<div class="col-md-9">
							<input type="file" name="image" id="exampleInputFile">
							<p class="help-block"> Upload Image. </p>
						</div>
					</div>

					<div class="form-group{{ $errors->has('altimage') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter image description</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter Image Description" name="altimage" value="{{$check['altimage']}}">
						</div>
					</div>



					<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
						<label class="control-label col-md-3">Enter description</label>
						<div class="col-md-6">
							<div>
								<textarea name="description" id="summernote_1">{{$check['description']}}</textarea>
							 </div>
						</div>
					</div>

					

					<!-- status section starts -->
					<hr>
					<div class="form-group">
						<label class="col-md-3 control-label">Status</label>
						<div class="col-md-6">
							<div class="mt-radio-inline">
								<label class="mt-radio">
									<input type="radio"{{$check['active'] == '1' ? 'checked' : ''}} name="active" id="optionsRadios25" value="1" checked=""> Active
									<span></span>
								</label>
								<label class="mt-radio">
									<input type="radio"{{$check['active'] == '0' ? 'checked' : ''}} name="active" id="optionsRadios26" value="0" > Inactive
									<span></span>
								</label>
							</div>
						</div>
					</div>
					<!-- status section ends -->

				</div>
				<div class="form-actions">
					<div class="row">
						<div class="col-md-offset-3 col-md-9">
							<button type="submit" class="btn green">Update</button>
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