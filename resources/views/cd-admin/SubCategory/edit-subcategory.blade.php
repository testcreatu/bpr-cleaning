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
			<a href="{{url('cd-admin/view-all-sub-category')}}">View all Sub Category</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Edit Sub Category</span>
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
				<span class="caption-subject font-dark sbold uppercase">Edit Sub Category</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{url('cd-admin/updateSubCategory/'.$data['id'])}}" enctype="multipart/form-data" role="form">
				<div class="form-body">
					@csrf
					<div class="form-group{{ $errors->has('category_name') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Under Category</label>
						<div class="col-md-6">
							<div class="input-icon">
								<i class="fa fa-user"></i>
								<select id="test" class="form-control " name="category_name" required="">
									<option selected="" disabled="">SELECT ANY ONE CATEGORY</option>
									@foreach($category as $level)
									@if($level['id'] == $data['category_id'])
									<option class="non" name="category_name" value="{{$level['id']}}" selected>{{$level['name']}}</option>
									@else
									<option class="non" name="category_name" value="{{$level['id']}}">{{$level['name']}}</option>

									@endif
									@endforeach
								</select>
								<input class="editOption form-control " style="display:none;"></input>
							</div>
						</div>
						@if ($errors->has('category_name'))
						<span class="help-block">
							<strong>{{ $errors->first('category_name') }}</strong>
						</span>
						@endif
					</div>
					<hr>
					<h2 align="center">Header Portion</h2>
					<div class="form-group{{ $errors->has('header_title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Header Title </label>
						<div class="col-md-6">
							<input type="text" name="header_title" class="form-control" placeholder="Enter Header Title" value="{{$data['header_title']}}">
						</div>
					</div>
					

					<div class="form-group{{ $errors->has('header_image') ? ' has-error' : '' }}">
						<label for="exampleInputFile" class="col-md-3 control-label">Upload Header Image</label>
						<div class="col-md-9">
							<input type="file" name="header_image" id="exampleInputFile">
							<p class="help-block"> Upload Header Image. </p>
						</div>
					</div>

					<div class="form-group{{ $errors->has('quote') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Quote</label>
						<div class="col-md-6">
							<input type="text" name="quote" class="form-control" placeholder="Enter Quote" value="{{$data['quote']}}">
						</div>
					</div>

					<div class="form-group{{ $errors->has('sub_text') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Sub Text</label>
						<div class="col-md-6">
							<input type="text" name="sub_text" class="form-control" placeholder="Enter Sub Text" value="{{$data['sub_text']}}">
						</div>
					</div>
					
					<h2 align="center">Main Portion</h2>

					<div class="form-group{{ $errors->has('main_title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Title</label>
						<div class="col-md-6">
							<input type="text" name="main_title" class="form-control" placeholder="Enter Main Title" value="{{$data['main_title']}}">
						</div>
					</div>

					<div class="form-group{{ $errors->has('main_description') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Description</label>
						<div class="col-md-6">
							<textarea type="text" name="main_description" class="form-control summernote" rows="10" placeholder="Enter Main Title" >
								{!!$data['main_description']!!}
							</textarea>

						</div>
					</div>

					<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
						<label for="exampleInputFile" class="col-md-3 control-label">Upload Image</label>
						<div class="col-md-9">
							<input type="file" name="image" id="exampleInputFile">
							<p class="help-block"> Upload Image. </p>
						</div>
					</div>

					<hr>
					<h2 align="center">Benifits</h2>
					<div class="box-body" id="card_benifits">
						<?php $benifits = json_decode($data['benifits']); 
						?>
						@if($benifits != NULL)
						@foreach($benifits as $key=> $ben)
						@if($key == 0)
						<div class="form-group {{ $errors->has('benifits') ? ' has-error' : '' }}">
							<label for="inputTourName3" class="col-sm-3 control-label">Benifits</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Benifits" name="benifits[]" required="" value="{{$ben}}">
								</div>
								@if ($errors->has('benifits'))
								<span class="help-block">
									<strong>{{ $errors->first('benifits') }}</strong>
								</span>
								@endif
							</div>
						</div>
						@else
						<div class="newgroup" id="benifits{{$key}}" style="clear: both;">
							<div class="form-group {{ $errors->has('benifits') ? ' has-error' : '' }}">
								<label for="inputTourName3" class="col-sm-3 control-label">Benifits</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Benifits" name="benifits[]" required="" value="{{$ben}}">
									</div>
									@if ($errors->has('benifits'))
									<span class="help-block">
										<strong>{{ $errors->first('benifits') }}</strong>
									</span>
									@endif
								</div>
							</div>
							<input style="margin-left: 315px;" type="button" class="remove btn btn-danger" id="close" value="Delete Benifits"/ onclick="remove('benifits{{$key}}')">
						</div>

						@endif
						@endforeach
						@else
						<div class="form-group {{ $errors->has('benifits') ? ' has-error' : '' }}">
							<label for="inputTourName3" class="col-sm-3 control-label">Benifits</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Benifits" name="benifits[]" required="">
								</div>
								@if ($errors->has('benifits'))
								<span class="help-block">
									<strong>{{ $errors->first('benifits') }}</strong>
								</span>
								@endif
							</div>
						</div>
						@endif
					</div>


					<div class="form-group">
						<div class="col-sm-11 control-label">
							<div class="col-sm-10">
								<input id="submitButton" type="button" class="add_another_benifits btn btn-info" value="Add Benifits"/>
							</div>
						</div>
					</div>


					<h2 align="center">Features</h2>
					<div class="box-body" id="card_features">
						<?php $features = json_decode($data['features']); ?>
						@if($features != NULL)
						@foreach($features as $key1=>$f)
						@if($key1 == 0 )
						<div class="form-group {{ $errors->has('features') ? ' has-error' : '' }}">
							<label for="inputTourName3" class="col-sm-3 control-label">Features</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Features" name="features[]" required="" value="{{$f}}">
								</div>
								@if ($errors->has('features'))
								<span class="help-block">
									<strong>{{ $errors->first('features') }}</strong>
								</span>
								@endif
							</div>
						</div>
						@else
						<div class="newfeaturesgroup" id="features{{$key}}" style="clear: both;">
							<div class="form-group {{ $errors->has('features') ? ' has-error' : '' }}">
								<label for="inputTourName3" class="col-sm-3 control-label">Features</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Features" name="features[]" required="" value="{{$f}}">
									</div>
									@if ($errors->has('features'))
									<span class="help-block">
										<strong>{{ $errors->first('features') }}</strong>
									</span>
									@endif
								</div>
							</div>
							<input style="margin-left: 315px;" type="button" class="remove btn btn-danger" id="close" value="Delete Feature"/ onclick="remove('features{{$key}}')">
						</div>
						@endif
						@endforeach
						@else
						<div class="form-group {{ $errors->has('features') ? ' has-error' : '' }}">
							<label for="inputTourName3" class="col-sm-3 control-label">Features</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Features" name="features[]" required="" >
								</div>
								@if ($errors->has('features'))
								<span class="help-block">
									<strong>{{ $errors->first('features') }}</strong>
								</span>
								@endif
							</div>
						</div>
						@endif
					</div>


					<div class="form-group">
						<div class="col-sm-11 control-label">
							<div class="col-sm-10">
								<input id="submitButton" type="button" class="add_another_features btn btn-info" value="Add Features"/>
							</div>
						</div>
					</div>


					<!-- seo section starts -->
					<hr>
					<div class="form-group{{ $errors->has('seo_title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter seo title</label>
						<div class="col-md-6">
							<input type="text" name="seo_title" class="form-control" placeholder="Enter seo title" value="{{$data['seo_title']}}">
						</div>
					</div>
					<div class="form-group{{ $errors->has('seo_keyword') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter seo keywords</label>
						<div class="col-md-6">
							<input type="text" name="seo_keyword" class="form-control" placeholder="Enter seo keywords" value="{{$data['seo_keyword']}}">
						</div>
					</div>
					<div class="form-group{{ $errors->has('seo_description') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter seo description</label>
						<div class="col-md-6">
							<textarea class="form-control" name="seo_description" rows="5" placeholder="Enter seo description">{{$data['seo_description']}}</textarea>
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
									<input type="radio" name="status" id="optionsRadios25" value="active" <?php echo $data['status'] == 'active'?'checked':'' ?>> Active
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
<script type="text/javascript">
	function remove(id) 
	{
		document.getElementById(id).remove();
	}
</script>

<script type="text/javascript">
	function removeDynamic(id) 
	{
		document.getElementById(id).remove();
	}
</script>
@endsection