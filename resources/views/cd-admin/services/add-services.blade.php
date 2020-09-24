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
			<a href="{{url('cd-admin/view-services')}}">View Services</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Add Services</span>
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
				<span class="caption-subject font-dark sbold uppercase">Add Services</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{url('cd-admin/add-services')}}" enctype="multipart/form-data" role="form">
				<div class="form-body">
					@csrf
					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Service Name<span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" name="name" class="form-control" placeholder="Enter Service name" value="{{old('name')}}">
						</div>
						@if ($errors->has('name'))
						<span class="text-danger">{{ $errors->first('name') }}</span>
						@endif
					</div>

					<div class="form-group {{ $errors->has('sub_text') ? ' has-error' : '' }}">
						<label for="inputTourName3" class="col-sm-3 control-label">Sub Text</label>
						<div class="col-sm-6">
							<textarea type="text" class="form-control" id="inputTourName3" placeholder="Enter Sub Text" name="sub_text">{{old('sub_text')}}</textarea>
						</div>
						@if ($errors->has('sub_text'))
						<span class="text-danger">{{ $errors->first('sub_text') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('service_image') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Service Image<span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="file" name="service_image" class="form-control" placeholder="Enter Service Icon" value="{{old('service_image')}}">
						</div>
						@if ($errors->has('service_image'))
						<span class="text-danger">{{ $errors->first('service_image') }}</span>
						@endif
					</div>
					<h2 align="center"> Features <span class="cd-admin-required">*</span></h2>
					<div class="box-body" id="card_features">
						
						<div class="form-group {{ $errors->has('features[]') ? ' has-error' : '' }}">
							<label for="inputTourName3" class="col-sm-3 control-label">Feature</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Feature" name="features[]" value="{{old('features[]')}}">
								</div>
							</div>
						</div>

					</div>
					<div class="form-group">
						<div class="col-sm-11 control-label">
							<div class="col-sm-10">
								<input id="submitButton" type="button" class="add_another_features btn btn-info" value="Add New Feature"/>
							</div>
						</div>
					</div>

					<h2 align="center">Sections</h2>
					<div class="box-body" id="card">
						
						<div class="form-group {{ $errors->has('sub_title[]') ? ' has-error' : '' }}">
							<label for="inputTourName3" class="col-sm-3 control-label">Title</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Title" name="sub_title[]" value="{{old('sub_title[]')}}">
								</div>
							</div>
						</div>
						<div class="form-group {{ $errors->has('sub_description[]') ? ' has-error' : '' }}">
							<label for="inputDescription3" class="col-sm-3 control-label">Description</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-pencil"></i>
									</div>
									<textarea class="form-control summernote" rows="5" id="inputDescription3" placeholder="Enter Description" name="sub_description[]">{!!old('sub_description[]')!!}</textarea>
									
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-11 control-label">
							<div class="col-sm-10">
								<input id="submitButton" type="button" class="add_another btn btn-info" value="Add New  Section"/>
							</div>
						</div>
					</div>

					<!-- seo section starts -->
					<hr>
					<div class="form-group{{ $errors->has('seo_title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter SEO title <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" name="seo_title" class="form-control" placeholder="Enter seo title" value="{{old('seo_title')}}">
						</div>
						@if ($errors->has('seo_title'))
						<span class="text-danger">{{ $errors->first('seo_title') }}</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('seo_keyword') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter SEO keywords <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" name="seo_keyword" class="form-control" placeholder="Enter seo keywords" value="{{old('seo_keyword')}}">
						</div>
						@if ($errors->has('seo_keyword'))
						<span class="text-danger">{{ $errors->first('seo_keyword') }}</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('seo_description') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter SEO description <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<textarea class="form-control" name="seo_description" rows="5" placeholder="Enter seo description">{{old('seo_description')}}</textarea>
						</div>
						@if ($errors->has('seo_description'))
						<span class="text-danger">{{ $errors->first('seo_description') }}</span>
						@endif
					</div>
					<!-- seo section ends -->


					<!-- status section starts -->
					<hr>
					<div class="form-group">
						<label class="col-md-3 control-label">Status <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<div class="mt-radio-inline">
								<label class="mt-radio">
									<input type="radio" name="status" id="optionsRadios25" value="active" checked=""> Active
									<span></span>
								</label>
								<label class="mt-radio">
									<input type="radio" name="status" id="optionsRadios26" value="inactive"> Inactive
									<span></span>
								</label>
							</div>
						</div>
						@if ($errors->has('status'))
						<span class="text-danger">{{ $errors->first('status') }}</span>
						@endif
					</div>
					<!-- status section ends -->

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
<script type="text/javascript">
	function remove(id) 
	{
		document.getElementById(id).remove();
	}
</script>

<script type="text/javascript">
	function removeDynamic(id) 
	{
		document.getElementById(id).remove();
	}
</script>
@endsection