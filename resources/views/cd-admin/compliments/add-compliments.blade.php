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
			<a href="{{url('cd-admin/view-compliments')}}">View Compliments</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Add Compliments</span>
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
				<span class="caption-subject font-dark sbold uppercase">Add Compliments</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{route('add-compliments')}}" enctype="multipart/form-data" role="form">
				@csrf
				<div class="form-body">

					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Title <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter Title" name="title" value="{{old('title')}}">
						</div>
						@if ($errors->has('title'))
						<span class="text-danger">{{ $errors->first('title') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
						<label for="exampleInputFile" class="col-md-3 control-label">Upload Image <span class="cd-admin-required">*</span></label>
						<div class="col-md-9">
							<input type="file" name="image" id="exampleInputFile">
							<p class="help-block"> Upload Image. </p>
						</div>
						@if ($errors->has('image'))
						<span class="text-danger">{{ $errors->first('image') }}</span>
						@endif
					</div>

					{{-- <div class="form-group{{ $errors->has('altimage') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Image Description <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" name="altimage" class="form-control" placeholder="Enter image Description" value="{{old('altimage')}}">
						</div>
						@if ($errors->has('altimage'))
						<span class="text-danger">{{ $errors->first('altimage') }}</span>
						@endif
					</div> --}}
					<h2 align="center">Quotes Section</h2>
					<div class="form-group{{ $errors->has('quote') ? ' has-error' : '' }}">
						<label class="control-label col-md-3">Enter  Quote {{-- <span class="cd-admin-required">*</span> --}}</label>
						<div class="col-md-6">
							<div >
								<input name="quote" value="{{old('quote')}}" class="form-control" placeholder="Enter Quote">
							</div>
						</div>
						@if ($errors->has('quote'))
						<span class="text-danger">{{ $errors->first('quote') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('quote_image') ? ' has-error' : '' }}">
						<label for="exampleInputFile" class="col-md-3 control-label">Upload Quote Image <span class="cd-admin-required">*</span></label>
						<div class="col-md-9">
							<input type="file" name="quote_image" id="exampleInputFile">
							<p class="help-block"> Upload Image. </p>
						</div>
						@if ($errors->has('quote_image'))
						<span class="text-danger">{{ $errors->first('quote_image') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('sub_text') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Sub Text {{-- <span class="cd-admin-required">*</span> --}}</label>
						<div class="col-md-6">
							<textarea class="form-control" rows="10" placeholder="Enter Sub Text" name="sub_text">{{old('sub_text')}}</textarea>
						</div>
						@if ($errors->has('sub_text'))
						<span class="text-danger">{{ $errors->first('sub_text') }}</span>
						@endif
					</div>
					<h2 align="center">Reason</h2>

					<div class="box-body" id="card_reasons">
						
						<div class="form-group {{ $errors->has('sub_title[]') ? ' has-error' : '' }}">
							<label for="inputTourName3" class="col-sm-3 control-label">Title</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Sub Title" name="sub_title[]" value="{{old('sub_title[]')}}">
								</div>
							</div>
						</div>

						<div class="form-group {{ $errors->has('sub_summary[]') ? ' has-error' : '' }}">
							<label for="inputTourName3" class="col-sm-3 control-label">Summary</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<textarea type="text" class="form-control" id="inputTourName3" placeholder="Enter  Summary" name="sub_summary[]" rows="5" value="{{old('sub_summary[]')}}"></textarea>
								</div>
							</div>
						</div>

						<div class="form-group {{ $errors->has('sub_image[]') ? ' has-error' : '' }}">
							<label for="inputTourName3" class="col-sm-3 control-label">Image</label>
							<div class="col-sm-6">

								<input type="file" class="form-control" id="inputTourName3" placeholder="Enter Image" name="sub_image[]" value="{{old('sub_image[]')}}">
							</div>
						</div>

					</div>
					<div class="form-group">
						<div class="col-sm-11 control-label">
							<div class="col-sm-10">
								<input id="submitButton" type="button" class="add_another_reason btn btn-info" value="Add New Reason"/>
							</div>
						</div>
					</div>
					<h2 align="center">Measures</h2>

					<div class="box-body" id="card_measures">
						
						<div class="form-group {{ $errors->has('measures_title[]') ? ' has-error' : '' }}">
							<label for="inputTourName3" class="col-sm-3 control-label">Title</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Measures Title" name="measures_title[]" value="{{old('measures_title[]')}}">
								</div>
							</div>
						</div>

						<div class="form-group {{ $errors->has('measures_summary[]') ? ' has-error' : '' }}">
							<label for="inputTourName3" class="col-sm-3 control-label">Summary</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<textarea type="text" class="form-control" id="inputTourName3" placeholder="Enter Measures  Summary" name="measures_summary[]" rows="5" value="{{old('measures_summary[]')}}"></textarea>
								</div>
							</div>
						</div>

					</div>
					<div class="form-group">
						<div class="col-sm-11 control-label">
							<div class="col-sm-10">
								<input id="submitButton" type="button" class="add_another_measures btn btn-info" value="Add New Measures"/>
							</div>
						</div>
					</div>


					<!-- seo section starts -->
					<hr>
					<div class="form-group{{ $errors->has('seo_title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter SEO title<span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter seo title" name="seo_title" value="{{old('seo_title')}}">
						</div>
						@if ($errors->has('seo_title'))
						<span class="text-danger">{{ $errors->first('seo_title') }}</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('seo_keyword') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter SEO keywords<span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter seo keywords" name="seo_keyword" value="{{old('seo_keyword')}}">
						</div>
						@if ($errors->has('seo_keyword'))
						<span class="text-danger">{{ $errors->first('seo_keyword') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('seo_description') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter SEO description <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<textarea class="form-control" rows="5" placeholder="Enter seo description" name="seo_description">{{old('seo_description')}}</textarea>
						</div>
						@if ($errors->has('seo_description'))
						<span class="text-danger">{{ $errors->first('seo_description') }}</span>
						@endif
					</div>
					<!-- seo section ends -->


					<!-- status section starts -->
					<hr>
					<div class="form-group">
						<label class="col-md-3 control-label">Status</label>
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