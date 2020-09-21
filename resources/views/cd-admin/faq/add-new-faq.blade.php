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
			<a href="{{url('cd-admin/view-all-about')}}">View all FAQ</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Add new FAQ</span>
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
				<span class="caption-subject font-dark sbold uppercase">Add New FAQ</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" role="form" method="post" action="{{url('cd-admin/insertFaq')}}" enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="form-body">
					<h2 align="center">Description</h2>
					<div class="form-group{{ $errors->has('animated_title_1') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Animated Title 1</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter FAQ animated_title_1" name="animated_title_1" value="{{old('animated_title_1')}}">
						</div>
					</div>
					<div class="form-group{{ $errors->has('description_title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Description Title</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter FAQ description_title" name="description_title" value="{{old('description_title')}}">
						</div>
					</div>
					
					<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
						<label class="control-label col-md-3">Enter FAQ Description</label>
						<div class="col-md-6">
							<div >
								<textarea name="description" id="summernote_1">{{old('description')}}</textarea> 
							</div>
						</div>
					</div>
					<h2 align="center">FAQ</h2>
					<div class="form-group{{ $errors->has('animated_title_2') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Animated Title 2</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter FAQ animated_title_2" name="animated_title_2" value="{{old('animated_title_2')}}">
						</div>
					</div>
					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Title</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter FAQ title" name="title" value="{{old('title')}}">
						</div>
					</div>
					<h2 align="center">Questions/Answers</h2>
					<div class="box-body" id="faqCard">
						
						<div class="form-group {{ $errors->has('question') ? ' has-error' : '' }}">
							<label for="inputTourName3" class="col-sm-3 control-label">Question</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Question" name="question[]" value="{{old('question')}}">
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
									<textarea class="form-control" type="text" rows="5" id="inputDescription3" name="answer[]" value="{{old('answer')}}">
									</textarea>
								</div>
							</div>
						</div>
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

	function removeDynamicMilestone(id) {
		document.getElementById(id).remove();
	}
</script>
@endsection