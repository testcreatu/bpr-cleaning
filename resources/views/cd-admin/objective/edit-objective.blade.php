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
			<a href="{{url('cd-admin/view-all-objective')}}">View all Why Us</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Edit Why Us</span>
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
				<span class="caption-subject font-dark sbold uppercase">Edit Why Us</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" role="form" method="post" action="{{url('/update-objective/'.$data['id'])}}" enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="form-body">
					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter objective title</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter objective title" name="title" value="{{$data['title']}}">
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
							<input type="text" name="altimage" class="form-control" placeholder="Enter Image Description" value="{{$data['altimage']}}">
						</div>
					</div>
					
					<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
						<label class="control-label col-md-3">Enter  Description</label>
						<div class="col-md-6">
							<div >
								<textarea name="description" id="summernote_1">{!!$data['description']!!}</textarea> 
							</div>
						</div>
					</div>



					<div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Summary</label>
						<div class="col-md-6">
							<textarea class="form-control" rows="10" placeholder="Enter Summary" name="summary">{{$data['summary']}}</textarea>
						</div>
					</div>

					<h2 align="center">MileStone</h2>
					<div class="box-body" id="milestoneCard">
						<?php $decode = json_decode($data['milestones']); ?>
						@foreach($decode as $key=>$d)
						@if($key == 0)
						<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
							<label for="inputTourName3" class="col-sm-3 control-label">Milestone Name</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Milestone Name" name="name[]" value="{{$d->name}}">
								</div>
							</div>
						</div>
						<div class="form-group {{ $errors->has('number') ? ' has-error' : '' }}">
							<label for="inputDescription3" class="col-sm-3 control-label">Milestone Number</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-pencil"></i>
									</div>
									<input class="form-control" type="number" rows="5" id="inputDescription3" placeholder="Enter Milestone Number" name="number[]" value="{{$d->number}}">
									
								</div>
							</div>
						</div>
						@else
						<div class="newgroup" id="{{$key}}" style="clear: both;">
							<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
								<label for="inputTourName3" class="col-sm-3 control-label">Milestone Name</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Milestone Name" name="name[]" value="{{$d->name}}">
									</div>
								</div>
							</div>
							<div class="form-group {{ $errors->has('number') ? ' has-error' : '' }}">
								<label for="inputDescription3" class="col-sm-3 control-label">Milestone Number</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<input class="form-control" type="number" rows="5" id="inputDescription3" placeholder="Enter Milestone Number" name="number[]" value="{{$d->number}}">

									</div>
								</div>
							</div>
							<input style="margin-left: 315px;" type="button" class="remove btn btn-danger" id="close" value="Delete Card"/ onclick="remove({{$key}})">
						</div>
						@endif
						@endforeach
					</div>
					<div class="form-group">
						<div class="col-sm-11 control-label">
							<div class="col-sm-10">
								<input id="submitButton" type="button" class="add_another_milestone btn btn-info" value="Add New  Milestone"/>
							</div>
						</div>
					</div>

					<!-- seo section starts -->

					<div class="form-group">
						<label class="col-md-3 control-label">Type</label>
						<div class="col-md-6">
							<div class="mt-radio-inline">
								<label class="mt-radio">
									<input type="radio" name="type" id="optionsRadios25" value="homepage"  <?php echo $data['type'] == 'homepage'?'checked':'' ?>> Show In Homepage
									<span></span>
								</label>
								<label class="mt-radio">
									<input type="radio" name="type" id="optionsRadios26" value="services" <?php echo $data['type'] == 'services'?'checked':'' ?>> Show In Services
									<span></span>
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Status</label>
						<div class="col-md-6">
							<div class="mt-radio-inline">
								<label class="mt-radio">
									<input type="radio" name="status" id="optionsRadios25" value="active"  <?php echo $data['status'] == 'active'?'checked':'' ?>> Active
									<span></span>
								</label>
								<label class="mt-radio">
									<input type="radio" name="status" id="optionsRadios26" value="inactive" <?php echo $data['status'] == 'inactive'?'checked':'' ?>> Inactive
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

	function remove(id) {
		document.getElementById(id).remove();
	}
</script>

<script type="text/javascript">

	function removeDynamicMilestone(id) {
		document.getElementById(id).remove();
	}
</script>
@endsection