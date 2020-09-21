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
			<a href="{{url('cd-admin/view-all-blog')}}">View all Blog</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Edit Blog</span>
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
				<span class="caption-subject font-dark sbold uppercase">Edit Blog</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{url('cd-admin/updateBlog/'.$check['id'])}}" enctype="multipart/form-data" role="form">
				@csrf
				<div class="form-body">
					<div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter News category</label>
						<div class="col-md-6">
							<select class="form-control" name="category">
								<option selected disabled>Select News Category</option>
								@foreach($category as $c)
								@if($c['id'] == $check['category_id'])
								<option value="{{$c['id']}}" selected>{{$c['category_name']}}</option>
								@else
								<option value="{{$c['id']}}">{{$c['category_name']}}</option>
								@endif
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter blog title</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter blog title" name="title" value="{{$check['title']}}">
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
							<input type="text" name="altimage" class="form-control" placeholder="Enter Image Description" value="{{$check['altimage']}}">
						</div>
					</div>

					<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
						<label class="control-label col-md-3">Enter  description</label>
						<div class="col-md-6">
							<div >
								<textarea name="description" id="summernote_1">{!!$check['description']!!}</textarea> 
							</div>
						</div>
					</div>

					<div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Summary</label>
						<div class="col-md-6">
							<textarea class="form-control" rows="10" placeholder="Enter Summary" name="summary">{!!$check['summary']!!}</textarea>
						</div>
					</div>

					<div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Tags</label>
						<div class="col-md-6">
							<input type="text" class="form-control input-large" name="tags" value="{{$check['tags']}}" data-role="tagsinput">
						</div>
					</div>


					<!-- seo section starts -->
					<hr>
					<div class="form-group{{ $errors->has('seo_title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter seo title</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter seo title" name="seo_title" value="{{$check['seo_title']}}">
						</div>
					</div>
					<div class="form-group{{ $errors->has('seo_keyword') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter seo keywords</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Enter seo keywords" name="seo_keyword" value="{{$check['seo_keyword']}}">
						</div>
					</div>
					<div class="form-group{{ $errors->has('seo_description') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter seo description</label>
						<div class="col-md-6">
							<textarea class="form-control" rows="5" placeholder="Enter seo description" name="seo_description">{!!$check['seo_description']!!}</textarea>
						</div>
					</div>
					<!-- seo section ends -->


					<!-- status section starts -->
					<hr>

					<div class="form-group">
						<label class="col-md-3 control-label">Is Popular News</label>
						<div class="col-md-6">
							<div class="mt-radio-inline">
								<label class="mt-radio">
									<input type="radio" name="is_popular" id="optionsRadios25" value="yes" <?php echo $check['is_popular'] == 'yes' ?'checked':'' ?>> Yes
									<span></span>
								</label>
								<label class="mt-radio">
									<input type="radio" name="is_popular" id="optionsRadios26" value="no" <?php echo $check['is_popular'] == 'no' ?'checked':'' ?>> No
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
									<input type="radio"{{$check['active'] == '1' ? 'checked' : ''}} name="active" id="optionsRadios25" value="1" checked=""> Active
									<span></span>
								</label>
								<label class="mt-radio">
									<input type="radio"{{$check['active'] == '0' ? 'checked' : ''}} name="active" id="optionsRadios26" value="0"> Inactive
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