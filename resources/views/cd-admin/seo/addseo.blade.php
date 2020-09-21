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
			<a href="{{url('/seo-view')}}">View all Seo</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Add Seo</span>
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
				<span class="caption-subject font-dark sbold uppercase">Add New Seo</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{url('cd-admin/insertseo')}}" enctype="multipart/form-data" role="form">
				@csrf
				<div class="form-body">
					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter about title</label>
						<div class="col-md-6">

							<select class="form-control" name="name" value="{{old('name')}}">
								<option value="0" selected="" disabled="">--Select Page Title --</option>

								<option value="home">Home</option>
								<option value="about">About</option>
								<option value="university">University</option>
								<option value="scholorship">Available Scholorship</option>
								<option value="job">Available Job</option>
								<option value="blog">Blog</option>
								<option value="contact">Contact</option>
								<option value="testimonial">Testimonial</option>

							</select>

						</div>
					</div>

					
					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Seo Title</label>
						<div class="col-md-6">
							<input type="text" name="title" class="form-control" placeholder="Enter about title" value="{{old('title')}}">
						</div>
					</div>

					<div class="form-group{{ $errors->has('keywords') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Seo Title</label>
						<div class="col-md-6">
							<input type="text" name="keywords" class="form-control" placeholder="Enter Seo Keywords" value="{{old('keywords')}}">
						</div>
					</div>

					

					<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Seo Description</label>
						<div class="col-md-6">
							<textarea class="form-control" rows="10" placeholder="Enter Seo Description" name="description">{{old('description')}}</textarea>
						</div>
					</div>


					<!-- seo section starts -->
					
					<!-- seo section ends -->


					<!-- status section starts -->
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
@endsection