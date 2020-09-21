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
			<a href="{{url('cd-admin/view-all-Team')}}">View all Team</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Edit Team</span>
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
				<span class="caption-subject font-dark sbold uppercase">Edit Team</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{url('cd-admin/updateTeam/'.$check['id'])}}" enctype="multipart/form-data" role="form">
			@csrf
				<div class="form-body">
					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Name</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{$check['name']}}">
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
						<label class="col-md-3 control-label">Enter Alternative Image</label>
						<div class="col-md-6">
							<input type="text" name="altimage" class="form-control" placeholder="Enter about title" value="{{$check['altimage']}}">
						</div>
					</div>

					<div class="form-group{{ $errors->has('designation') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Designation</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter Designation" name="designation" value="{{$check['designation']}}">
						</div>
					</div>


					<hr>
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Email</label>
						<div class="col-md-6">
							<input type="email" class="form-control" placeholder="Enter Email" name="email" value="{{$check['email']}}">
						</div>
					</div>
					<div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Contact</label>
						<div class="col-md-6">
							<input type="number" class="form-control" placeholder="Enter Contact" name="contact" value="{{$check['contact']}}">
						</div>
					</div>
					<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Address</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter Address" name="address" value="{{$check['address']}}">
						</div>
					</div>


					<div class="form-group{{ $errors->has('fb_link') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Fb Link</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter Link" name="fb_link" value="{{$check['fb_link']}}">
						</div>
					</div>

					<div class="form-group{{ $errors->has('insta_link') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Insta Link</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter Link" name="insta_link" value="{{$check['insta_link']}}">
						</div>
					</div>

					<div class="form-group{{ $errors->has('twitter_link') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Twitter Link</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter Link" name="twitter_link" value="{{$check['twitter_link']}}">
						</div>
					</div>

					<div class="form-group{{ $errors->has('birth_date') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Birth Date</label>
						<div class="col-md-6">
							<input type="Date" class="form-control" placeholder="Enter Date" name="birth_date" value="{{$check['birth_date']}}">
						</div>
					</div>

					<div class="form-group{{ $errors->has('document') ? ' has-error' : '' }}">
						<label for="exampleInputFile" class="col-md-3 control-label">Upload CV</label>
						<div class="col-md-9">
							<input type="file" name="document" id="exampleInputFile">
							<p class="help-block"> Upload CV. </p>
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
							<button type="submit" class="btn green">update</button>
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