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
			<a href="{{url('cd-admin/view-all-courses-detail')}}">View all Courses Detail</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Add new Course Detail</span>
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
				<span class="caption-subject font-dark sbold uppercase">Add New Course Detail</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{url('cd-admin/insertCoursesDetail')}}" enctype="multipart/form-data" role="form">
				<div class="form-body">
					@csrf

					<div class="form-group{{ $errors->has('level_name') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Course Level</label>
						<div class="col-md-6">
							<div class="input-icon">
								<i class="fa fa-user"></i>
								<select id="test" class="form-control " name="level_name" required="">
									<option selected="" disabled="">--Select Option--</option>
									@foreach($getLevel as $level)
									<option class="non" name="c_name" value="{{$level['id']}}">{{$level['courseLevel_name']}}</option>
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
									<option selected="" disabled="">--Select Option--</option>
									@foreach($getUniversity as $uni)
									<option class="non" name="university_name" value="{{$uni['id']}}">{{$uni['university_name']}}</option>
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
							<input type="text" name="name" class="form-control" placeholder="Enter name" value="{{old('name')}}">
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
							<input type="text" name="altimage" class="form-control" placeholder="Enter description" value="{{old('altimage')}}">
						</div>
					</div>
					
					<hr>

					<div class="box-body" id="card">

						<div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
						<label for="inputTourName3" class="col-sm-3 control-label">Title</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Header" name="title[]" required="">
								</div>
								@if ($errors->has('title'))
								<span class="help-block">
									<strong>{{ $errors->first('title') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
							<label for="inputDescription3" class="col-sm-3 control-label"> Description</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-pencil"></i>
									</div>
									<textarea class="form-control" rows="5" id="inputDescription3" placeholder="Enter Description" name="description[]" required=""></textarea>

								</div>
								@if ($errors->has('description'))
								<span class="help-block">
									<strong>{{ $errors->first('description') }}</strong>
								</span>
								@endif
							</div>
						</div>


					</div>


					<div class="form-group">
						<div class="col-sm-11 control-label">
							<div class="col-sm-10">
								<input id="submitButton" type="button" class="add_another btn btn-info" value="Add New  Card"/>
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
									<input type="radio" name="status" id="optionsRadios25" value="1" checked=""> Active
									<span></span>
								</label>
								<label class="mt-radio">
									<input type="radio" name="status" id="optionsRadios26" value="0"> Inactive
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

@endsection