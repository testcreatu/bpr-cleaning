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
			<span>Edit Detail</span>
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
				<span class="caption-subject font-dark sbold uppercase">Edit Detail</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{url('cd-admin/updateDetail/'.$getData->id)}}" enctype="multipart/form-data" role="form">
				<div class="form-body">
					@csrf
					
					<input type="hidden" name="courses_id" value="{{$getData->courses_id}}">
					<div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
						<label for="inputTourName3" class="col-sm-3 control-label">Title</label>
						<div class="col-sm-6">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-user"></i>
								</div>
								<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Header" name="title" required="" value="{{$getData->title}}">
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
								<textarea class="form-control" rows="5" id="inputDescription3" placeholder="Enter Description" name="description" required="">{!!$getData->description!!}</textarea>

							</div>
							@if ($errors->has('description'))
							<span class="help-block">
								<strong>{{ $errors->first('description') }}</strong>
							</span>
							@endif
						</div>
					</div>



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