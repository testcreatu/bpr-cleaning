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
			<a href="{{url('cd-admin/view-all-courses-detail')}}">View all Course Detail</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Edit Course Detail</span>
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
				<span class="caption-subject font-dark sbold uppercase">Edit Course Detail</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{url('cd-admin/updateCoursesDetail/'.$getData->id)}}" enctype="multipart/form-data" role="form">
				<div class="form-body">
				@csrf
				<input type="hidden" name="courses_id" value="{{$getData->id}}">
					<div class="form-group{{ $errors->has('level_name') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Course Level</label>
						<div class="col-md-6">
							<div class="input-icon">
								<i class="fa fa-user"></i>
								<select id="test" class="form-control " name="level_name" required="">
									<option value="{{$getData->level->id}}" >{{$getData->level->courseLevel_name}}</option>
									@foreach($getData->getlevel as $level)
									<option class="non" name="level_name" value="{{$level->id}}">{{$level->courseLevel_name}}</option>
									@endforeach
								</select>
								<input class="editOption form-control " style="display:none;"></input>
							</div>
						</div>
						@if ($errors->has('level_name'))
						<span class="help-block">
							<strong>{{ $errors->first('level_name') }}</strong>
						</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('university_name') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">University Name</label>
						<div class="col-md-6">
							<div class="input-icon">
								<i class="fa fa-user"></i>
								<select id="test" class="form-control " name="university_name" required="">
									<option value="{{$getData->university->id}}">{{$getData->university->university_name}}</option>
									@foreach($getData->getuniversity as $uni)
									<option class="non" name="university_name" value="{{$uni->id}}">{{$uni->university_name}}</option>
									@endforeach
								</select>
								<input class="editOption form-control input-circle" style="display:none;"></input>
							</div>
						</div>
						@if ($errors->has('university_name'))
						<span class="help-block">
							<strong>{{ $errors->first('university_name') }}</strong>
						</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Course Name</label>
						<div class="col-md-6">
							<input type="text" name="name" class="form-control" placeholder="Enter name" value="{{$getData->course_name}}">
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
						<label class="col-md-3 control-label">Enter Image Description</label>
						<div class="col-md-6">
							<input type="text" name="altimage" class="form-control" placeholder="Enter description" value="{{$getData->image_description}}">
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
									<input type="radio"{{$getData->status == '1' ? 'checked' : ''}} name="status" id="optionsRadios25" value="1" checked=""> Active
									<span></span>
								</label>
								<label class="mt-radio">
									<input type="radio"{{$getData->status == '0' ? 'checked' : ''}} name="status" id="optionsRadios26" value="0"> Inactive
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