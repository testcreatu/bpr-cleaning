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
			<a href="{{url('cd-admin/view-faq')}}">View FAQ</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>EDIT FAQ</span>
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
				<span class="caption-subject font-dark sbold uppercase">Edit FAQ</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" role="form" method="post" action="{{route('edit-faq',$data['id'])}}" enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="form-body">
					<h2 align="center">Main Title</h2>
					<div class="form-group{{ $errors->has('main_title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Main Title</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter Main FAQ Title" name="main_title" value="{{$data['main_title']}}">
						</div>
						@if($errors->has('main_title'))
						<div class="alert alert-danger">{{$errors->first('main_title')}}</div>
						@endif
					</div>
					
					<h2 align="center">Questions/Answers</h2>

					<div class="box-body" id="faqCard">
						<?php $faq = json_decode($data['faqs']); ?>
						@foreach($faq as $key=>$f)
						@if($key == 0)
						<div class="form-group {{ $errors->has('question') ? ' has-error' : '' }}">
							<label for="inputTourName3" class="col-sm-3 control-label">Question</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Question" name="question[]" value="{{$f->question}}">
								</div>
							</div>
						</div>
						<div class="form-group {{ $errors->has('answer') ? ' has-error' : '' }}">
							<label for="inputDescription3" class="col-sm-3 control-label">Answer</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-pencil"></i>
									</div>
									<textarea class="form-control" type="text" rows="5" id="inputDescription3" name="answer[]" value="">{{$f->answer}}
									</textarea>
								</div>
							</div>
						</div>
						@else
						<div class="new-group" id="{{$key}}" style="clear: both;">
							
							<div class="form-group {{ $errors->has('question') ? ' has-error' : '' }}">
								<label for="inputTourName3" class="col-sm-3 control-label">Question</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Question" name="question[]" value="{{$f->question}}">
									</div>
								</div>
							</div>
							<div class="form-group {{ $errors->has('answer') ? ' has-error' : '' }}">
								<label for="inputDescription3" class="col-sm-3 control-label">Answer</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<textarea class="form-control" type="text" rows="5" id="inputDescription3" name="answer[]" >{!!$f->answer!!}
										</textarea>
									</div>
								</div>
							</div>
							<input style="margin-left: 315px;" type="button" class="remove btn btn-danger" id="close" value="Delete Question/Answer"/ onclick="remove({{$key}})">

						</div>

						@endif
						@endforeach
					</div>
					<div class="form-group">
						<div class="col-sm-11 control-label">
							<div class="col-sm-10">
								<input id="submitButton" type="button" class="add_another_faq btn btn-info" value="Add New  Question/Answer"/>
							</div>
						</div>
					</div>

					<!-- seo section starts -->

					{{-- <div class="form-group">
						<label class="col-md-3 control-label">Type</label>
						<div class="col-md-6">
							<div class="mt-radio-inline">
								<label class="mt-radio">
									<input type="radio" name="type" id="optionsRadios25" value="homepage" checked=""> Show In Homepage
									<span></span>
								</label>
								<label class="mt-radio">
									<input type="radio" name="type" id="optionsRadios26" value="services"> Show In Services
									<span></span>
								</label>
							</div>
						</div>
					</div> --}}
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