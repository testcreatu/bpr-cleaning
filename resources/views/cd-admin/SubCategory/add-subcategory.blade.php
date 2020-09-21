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
			<a href="{{url('cd-admin/view-all-sub-category')}}">View all Sub Category</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Add new Sub Category</span>
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
				<span class="caption-subject font-dark sbold uppercase">Add New Sub Category</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{url('cd-admin/insertSubCategory')}}" enctype="multipart/form-data" role="form">
				<div class="form-body">
					@csrf
					<div class="form-group{{ $errors->has('category_name') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Under Category</label>
						<div class="col-md-6">
							<div class="input-icon">
								<i class="fa fa-user"></i>
								<select id="test" class="form-control " name="category_name" required="">
									<option selected="" disabled="">SELECT ANY ONE CATEGORY</option>
									@foreach($category as $level)
									<option class="non" name="category_name" value="{{$level['id']}}">{{$level['name']}}</option>
									@endforeach
								</select>
								<input class="editOption form-control " style="display:none;"></input>
							</div>
						</div>
						@if ($errors->has('category_name'))
						<span class="help-block">
							<strong>{{ $errors->first('category_name') }}</strong>
						</span>
						@endif
					</div>
					<hr>
					<h2 align="center">Header Portion</h2>
					<div class="form-group{{ $errors->has('header_title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Header Title </label>
						<div class="col-md-6">
							<input type="text" name="header_title" class="form-control" placeholder="Enter Header Title" value="{{old('header_title')}}">
						</div>
					</div>
					

					<div class="form-group{{ $errors->has('header_image') ? ' has-error' : '' }}">
						<label for="exampleInputFile" class="col-md-3 control-label">Upload Header Image</label>
						<div class="col-md-9">
							<input type="file" name="header_image" id="exampleInputFile">
							<p class="help-block"> Upload Header Image. </p>
						</div>
					</div>

					<div class="form-group{{ $errors->has('quote') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Quote</label>
						<div class="col-md-6">
							<input type="text" name="quote" class="form-control" placeholder="Enter Quote" value="{{old('quote')}}">
						</div>
					</div>

					<div class="form-group{{ $errors->has('sub_text') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Sub Text</label>
						<div class="col-md-6">
							<input type="text" name="sub_text" class="form-control" placeholder="Enter Sub Text" value="{{old('sub_text')}}">
						</div>
					</div>
					
					<h2 align="center">Main Portion</h2>

					<div class="form-group{{ $errors->has('main_title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Title</label>
						<div class="col-md-6">
							<input type="text" name="main_title" class="form-control" placeholder="Enter Main Title" value="{{old('main_title')}}">
						</div>
					</div>

					<div class="form-group{{ $errors->has('main_description') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Description</label>
						<div class="col-md-6">
							<textarea type="text" name="main_description" class="form-control summernote" rows="10" placeholder="Enter Main Title" value="{{old('main_description')}}">
							</textarea>
						</div>
					</div>

					<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
						<label for="exampleInputFile" class="col-md-3 control-label">Upload Image</label>
						<div class="col-md-9">
							<input type="file" name="image" id="exampleInputFile">
							<p class="help-block"> Upload Image. </p>
						</div>
					</div>

					<hr>
					<h2 align="center">Benifits</h2>
					<div class="box-body" id="card_benifits">

						<div class="form-group {{ $errors->has('benifits') ? ' has-error' : '' }}">
							<label for="inputTourName3" class="col-sm-3 control-label">Benifits</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Benifits" name="benifits[]" required="">
								</div>
								@if ($errors->has('benifits'))
								<span class="help-block">
									<strong>{{ $errors->first('benifits') }}</strong>
								</span>
								@endif
							</div>
						</div>
					</div>


					<div class="form-group">
						<div class="col-sm-11 control-label">
							<div class="col-sm-10">
								<input id="submitButton" type="button" class="add_another_benifits btn btn-info" value="Add Benifits"/>
							</div>
						</div>
					</div>


					<h2 align="center">Features</h2>
					<div class="box-body" id="card_features">

						<div class="form-group {{ $errors->has('features') ? ' has-error' : '' }}">
							<label for="inputTourName3" class="col-sm-3 control-label">Features</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Features" name="features[]" required="">
								</div>
								@if ($errors->has('features'))
								<span class="help-block">
									<strong>{{ $errors->first('features') }}</strong>
								</span>
								@endif
							</div>
						</div>
					</div>


					<div class="form-group">
						<div class="col-sm-11 control-label">
							<div class="col-sm-10">
								<input id="submitButton" type="button" class="add_another_features btn btn-info" value="Add Features"/>
							</div>
						</div>
					</div>


					<!-- seo section starts -->
					<hr>
					<div class="form-group{{ $errors->has('seo_title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter seo title</label>
						<div class="col-md-6">
							<input type="text" name="seo_title" class="form-control" placeholder="Enter seo title" value="{{old('seo_title')}}">
						</div>
					</div>
					<div class="form-group{{ $errors->has('seo_keyword') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter seo keywords</label>
						<div class="col-md-6">
							<input type="text" name="seo_keyword" class="form-control" placeholder="Enter seo keywords" value="{{old('seo_keyword')}}">
						</div>
					</div>
					<div class="form-group{{ $errors->has('seo_description') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter seo description</label>
						<div class="col-md-6">
							<textarea class="form-control" name="seo_description" rows="5" placeholder="Enter seo description">{{old('seo_description')}}</textarea>
						</div>
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