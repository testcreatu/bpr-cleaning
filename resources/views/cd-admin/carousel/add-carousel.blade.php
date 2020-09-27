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
			<a href="{{url('cd-admin/view-carousel')}}">View Carousel</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Add Carousel</span>
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
				<span class="caption-subject font-dark sbold uppercase">Add Carousel</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" role="form" method="post" action="{{route('add-carousel')}}" enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="form-body">
					
					<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
						<label for="exampleInputFile" class="col-md-3 control-label">Upload Image <span class="cd-admin-required">*</span></label>
						<div class="col-md-9">
							<input type="file" name="image" id="exampleInputFile">
							<p class="help-block"> Upload Image. </p>
							@if ($errors->has('image'))
							<span class="text-danger">{{ $errors->first('image') }}</span>
							@endif
						</div>
					</div>

					<div class="form-group{{ $errors->has('altimage') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Image Description <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" name="altimage" class="form-control" placeholder="Enter image Description" value="{{old('altimage')}}">
						</div>
						@if ($errors->has('altimage'))
						<span class="text-danger">{{ $errors->first('altimage') }}</span>
						@endif
					</div>


					<h2 align="center">Offer Title</h2>
					<div class="form-group{{ $errors->has('offer_tag') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Offer Tag </label>
						<div class="col-md-6">
							<input type="text" name="offer_tag" class="form-control" placeholder="Enter Offer Tag" value="{{old('offer_tag')}}">
						</div>
						@if ($errors->has('offer_tag'))
						<span class="text-danger">{{ $errors->first('offer_tag') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('offer_title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Offer Title </label>
						<div class="col-md-6">
							<input type="text" name="offer_title" class="form-control" placeholder="Enter Offer Title" value="{{old('offer_title')}}">
						</div>
						@if ($errors->has('offer_title'))
						<span class="text-danger">{{ $errors->first('offer_title') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('offer_sub_text') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Offer Sub Text </label>
						<div class="col-md-6">
							<input type="text" name="offer_sub_text" class="form-control" placeholder="Enter Offer Sub Text" value="{{old('offer_sub_text')}}">
						</div>
						@if ($errors->has('offer_sub_text'))
						<span class="text-danger">{{ $errors->first('offer_sub_text') }}</span>
						@endif
					</div>


				{{-- 	<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Summary</label>
						<div class="col-md-6">
							<textarea class="form-control" rows="10" placeholder="Enter Summary" name="description">{{old('description')}}</textarea>
						</div>
						@if ($errors->has('description'))
						<span class="text-danger">{{ $errors->first('description') }}</span>
						@endif
					</div> --}}
					<div class="form-group">
						<label class="col-md-3 control-label">Show Offer <span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<div class="mt-radio-inline">
								<label class="mt-radio">
									<input type="radio" name="show_offer" id="optionsRadios25" value="show" checked=""> Show
									<span></span>
								</label>
								<label class="mt-radio">
									<input type="radio" name="show_offer" id="optionsRadios26" value="hide"> Hide
									<span></span>
								</label>
							</div>
						</div>
						@if ($errors->has('status'))
						<span class="text-danger">{{ $errors->first('status') }}</span>
						@endif
					</div>

					<hr>
					<div class="form-group">
						<label class="col-md-3 control-label">Status <span class="cd-admin-required">*</span></label>
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
							<button type="button" class="btn default">Cancel</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->
</div>

@endsection