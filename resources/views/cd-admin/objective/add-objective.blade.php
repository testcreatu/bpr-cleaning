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
			<a href="{{url('cd-admin/view-why-us')}}">View all Why Us</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Add Why Us</span>
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
				<span class="caption-subject font-dark sbold uppercase">Add Why Us</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" role="form" method="post" action="{{route('add-why-us')}}" enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="form-body">
					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Why Us Title <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter why us title" name="title" value="{{old('title')}}">
						</div>
						@if ($errors->has('title'))
						<span class="text-danger">{{ $errors->first('title') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}"> 
						<label for="exampleInputFile" class="col-md-3 control-label">Upload Image<span class="cd-admin-required">*</span></label>
						<div class="col-md-9">
							<input type="file" name="image" id="exampleInputFile">
							<p class="help-block"> Upload Image. </p>
						</div>
						@if ($errors->has('image'))
						<span class="text-danger">{{ $errors->first('image') }}</span>
						@endif
					</div>

					{{-- <div class="form-group{{ $errors->has('altimage') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Image Description</label>
						<div class="col-md-6">
							<input type="text" name="altimage" class="form-control" placeholder="Enter Image Description" value="{{old('altimage')}}">
						</div>
						@if ($errors->has('altimage'))
						<span class="text-danger">{{ $errors->first('altimage') }}</span>
						@endif
					</div> --}}
					
					<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
						<label class="control-label col-md-3">Enter  Vision <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<div >
								<textarea name="description" id="summernote_1">{{old('description')}}</textarea> 
							</div>
						</div>
						@if ($errors->has('description'))
						<span class="text-danger">{{ $errors->first('description') }}</span>
						@endif
					</div>



					<div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Summary <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<textarea class="form-control" rows="10" placeholder="Enter Summary" name="summary">{{old('summary')}}</textarea>
						</div>
						@if ($errors->has('summary'))
						<span class="text-danger">{{ $errors->first('summary') }}</span>
						@endif
					</div>
					<h2 align="center">WHY CHOOSE US</h2>

					<div class="form-group{{ $errors->has('why_choose_us') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Why Choose Us? <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<textarea class="form-control summernote" rows="10" placeholder="Enter Why To Choose Us" name="why_choose_us">{{old('why_choose_us')}}</textarea>
						</div>
						@if ($errors->has('why_choose_us'))
						<span class="text-danger">{{ $errors->first('why_choose_us') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('why_choose_us_image') ? ' has-error' : '' }}"> 
						<label for="exampleInputFile" class="col-md-3 control-label">Upload Why Choose Us Image <span class="cd-admin-required">*</span></label>
						<div class="col-md-9">
							<input type="file" name="why_choose_us_image" id="exampleInputFile">
							<p class="help-block"> Upload Image. </p>
						</div>
						@if ($errors->has('why_choose_us_image'))
						<span class="text-danger">{{ $errors->first('why_choose_us_image') }}</span>
						@endif
					</div>
					<h2 align="center">Form</h2>
					<div class="form-group{{ $errors->has('form_image') ? ' has-error' : '' }}"> 
						<label for="exampleInputFile" class="col-md-3 control-label">Form Image <span class="cd-admin-required">*</span></label>
						<div class="col-md-9">
							<input type="file" name="form_image" id="exampleInputFile">
							<p class="help-block"> Form Image. </p>
						</div>
						@if ($errors->has('form_image'))
						<span class="text-danger">{{ $errors->first('form_image') }}</span>
						@endif
					</div>
					<hr>
					<!-- seo section starts -->					
				{{-- 	<div class="form-group">
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
					</div> --}}
					<!-- status section ends -->

				</div>
				<div class="form-actions">
					<div class="row">
						<div class="col-md-offset-3 col-md-9">
							<button type="submit" class="btn green">Submit</button>
							<button type="button" class="btn default">Cancel</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->
</div>

<script type="text/javascript">

	function removeDynamicMilestone(id) {
		document.getElementById(id).remove();
	}
</script>
@endsection