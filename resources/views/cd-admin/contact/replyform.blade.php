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

	</ul>
</div>
<!-- END PAGE BAR -->



<div class="row">

	<!-- BEGIN SAMPLE FORM PORTLET-->
	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption">
				<i class="icon-settings font-dark"></i>
				<span class="caption-subject font-dark sbold uppercase">Reply</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{url('cd-admin/store-reply',$n->id)}}" enctype="multipart/form-data" role="form">
				<div class="form-body">
				@csrf
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Receiver`s Email</label>
						<div class="col-md-6">
							<input type="text" name="email" class="form-control" placeholder="Enter Receiver`s Email" value="{{$n->email}}">
						</div>
					</div>

					<div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Subject</label>
						<div class="col-md-6">
							<input type="text" name="subject" class="form-control" placeholder="Enter Subject" value="{{old('subject')}}">
						</div>
					</div>
									
					<div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
						<label class="control-label col-md-3">Message</label>
						<div class="col-md-6">
							<div >
							<textarea name="message" id="summernote_1">{{old('message')}}</textarea> 
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
									 <input type="radio" class="minimal" name="status"  value="active" checked >Replyed<br>
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