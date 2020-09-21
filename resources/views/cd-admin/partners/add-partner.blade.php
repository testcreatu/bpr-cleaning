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
			<a href="{{url('cd-admin/view-partners')}}">View Partner</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Add Partner</span>
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
				<span class="caption-subject font-dark sbold uppercase">Add Partner</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{route('add-partners')}}" enctype="multipart/form-data" role="form">
				@csrf
				<div class="form-body">
					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Name</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{old('name')}}">
						</div>
						@if ($errors->has('name'))
						<span class="text-danger">{{ $errors->first('name') }}</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Partner URL</label>
						<div class="col-md-6">
							<input type="url" name="url" class="form-control" placeholder="Enter Logo URL" value="{{old('url')}}">
						</div>
						@if ($errors->has('url'))
						<span class="text-danger">{{ $errors->first('url') }}</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('logo_image') ? ' has-error' : '' }}">
						<label for="exampleInputFile" class="col-md-3 control-label">Upload Partner Logo</label>
						<div class="col-md-9">
							<input type="file" name="logo_image" id="exampleInputFile">
							<p class="help-block"> Upload Logo. </p>
						</div>
						@if ($errors->has('logo_image'))
						<span class="text-danger">{{ $errors->first('logo_image') }}</span>
						@endif
					</div>

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
									<input type="radio" name="status" id="optionsRadios26" value="inactive" > Inactive
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

@endsection