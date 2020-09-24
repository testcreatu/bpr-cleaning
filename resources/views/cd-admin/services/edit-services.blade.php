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
			<a href="{{url('cd-admin/view-services')}}">View Services</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Edit Services</span>
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
				<span class="caption-subject font-dark sbold uppercase">Edit Services</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form class="form-horizontal" method="post" action="{{route('edit-services',$data['id'])}}" enctype="multipart/form-data" role="form">
				<div class="form-body">
					@csrf
					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Service Name<span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" name="name" class="form-control" placeholder="Enter Service name" value="{{$data['name']}}">
						</div>
						@if ($errors->has('name'))
						<span class="text-danger">{{ $errors->first('name') }}</span>
						@endif
					</div>

					<div class="form-group {{ $errors->has('sub_text') ? ' has-error' : '' }}">
						<label for="inputTourName3" class="col-sm-3 control-label">Sub Text</label>
						<div class="col-sm-6">
							<textarea type="text" class="form-control" id="inputTourName3" placeholder="Enter Sub Text" name="sub_text">{{$data['sub_text']}}</textarea>
						</div>
					</div>

					<div class="form-group{{ $errors->has('service_image') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Service Image<span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="file" name="service_image" class="form-control" placeholder="Enter Service Icon" value="{{$data['service_image']}}">
						</div>
						@if ($errors->has('service_image'))
						<span class="text-danger">{{ $errors->first('service_image') }}</span>
						@endif
					</div>
					<h2 align="center"> Features<span class="cd-admin-required">*</span></h2>
					<?php $features = json_decode($data['features']); ?>
					<div class="box-body" id="card_features">
						@if(isset($features))	
						@foreach($features as $key=>$f)
						@if($key == 0)
						<div class="form-group {{ $errors->has('features[]') ? ' has-error' : '' }}">
							<label for="inputTourName3" class="col-sm-3 control-label">Feature</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Feature" name="features[]" value="{{$f}}">
								</div>
							</div>
						</div>
						@else
						<div class="newgroup" id="{{$key}}" style="clear: both;">

							<div class="form-group {{ $errors->has('features[]') ? ' has-error' : '' }}">
								<label for="inputTourName3" class="col-sm-3 control-label">Feature</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Feature" name="features[]" value="{{$f}}">
									</div>
								</div>
							</div>
							<input style="margin-left: 315px;" type="button" class="remove btn btn-danger" id="close" value="Delete Feature"/ onclick="remove({{$key}})">
						</div>
						@endif
						@endforeach
						@else
						<div class="form-group {{ $errors->has('features[]') ? ' has-error' : '' }}">
							<label for="inputTourName3" class="col-sm-3 control-label">Feature</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Feature" name="features[]" value="">
								</div>
							</div>
						</div>
						@endif

					</div>

					<div class="form-group">
						<div class="col-sm-11 control-label">
							<div class="col-sm-10">
								<input id="submitButton" type="button" class="add_another_features btn btn-info" value="Add New Feature"/>
							</div>
						</div>
					</div>

					<h2 align="center">Sections</h2>
					<?php $sections = json_decode($data['section']); ?>
					<div class="box-body" id="card">
						@if(isset($sections))
						@foreach($sections as $key => $sec)
						@if($key == 0)
						<div class="form-group {{ $errors->has('sub_title[]') ? ' has-error' : '' }}">
							<label for="inputTourName3" class="col-sm-3 control-label">Title</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Title" name="sub_title[]" value="{{$sec->sub_title}}">
								</div>
							</div>
						</div>
						<div class="form-group {{ $errors->has('sub_description[]') ? ' has-error' : '' }}">
							<label for="inputDescription3" class="col-sm-3 control-label">Description</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-pencil"></i>
									</div>
									<textarea class="form-control summernote" rows="5" id="inputDescription3" placeholder="Enter Description" name="sub_description[]">{!!$sec->sub_description!!}</textarea>

								</div>
							</div>
						</div>
						@else
						<div class="newgroup" id="{{'section'.$key}}" style="clear: both;">
							<div class="form-group {{ $errors->has('sub_title[]') ? ' has-error' : '' }}">
								<label for="inputTourName3" class="col-sm-3 control-label">Title</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Title" name="sub_title[]" value="{{$sec->sub_title}}">
									</div>
								</div>
							</div>
							<div class="form-group {{ $errors->has('sub_description[]') ? ' has-error' : '' }}">
								<label for="inputDescription3" class="col-sm-3 control-label">Description</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<textarea class="form-control summernote" rows="5" id="inputDescription3" placeholder="Enter Description" name="sub_description[]">{!!$sec->sub_description!!}</textarea>

									</div>
								</div>
							</div>
							<input style="margin-left: 315px;" type="button" class="remove btn btn-danger" id="close" value="Delete Section"/ onclick="remove('{{'section'.$key}}')">

						</div>
						@endif
						@endforeach
						@else
						<div class="form-group {{ $errors->has('sub_title[]') ? ' has-error' : '' }}">
							<label for="inputTourName3" class="col-sm-3 control-label">Title</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Title" name="sub_title[]" value="{{old('sub_title[]')}}">
								</div>
							</div>
						</div>
						<div class="form-group {{ $errors->has('sub_description[]') ? ' has-error' : '' }}">
							<label for="inputDescription3" class="col-sm-3 control-label">Description</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-pencil"></i>
									</div>
									<textarea class="form-control summernote" rows="5" id="inputDescription3" placeholder="Enter Description" name="sub_description[]">{!!old('sub_description[]')!!}</textarea>

								</div>
							</div>
						</div>
						@endif

					</div>
					<div class="form-group">
						<div class="col-sm-11 control-label">
							<div class="col-sm-10">
								<input id="submitButton" type="button" class="add_another btn btn-info" value="Add New  Section"/>
							</div>
						</div>
					</div>


					<h2 align="center">HomePage</h2>

					<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Image</label>
						<div class="col-md-6">
							<input type="file" name="image" class="form-control" placeholder="Enter Image" value="{{old('image')}}">
						</div>
						@if ($errors->has('image'))
						<span class="text-danger">{{ $errors->first('image') }}</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('start_price') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter Starting Price<span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" name="start_price" class="form-control" placeholder="Enter Service Icon" value="{{$data['start_price']}}">
						</div>
						@if ($errors->has('start_price'))
						<span class="text-danger">{{ $errors->first('start_price') }}</span>
						@endif
					</div>
					<h2 align="center">Room</h2>
					<?php $rooms = json_decode($data['rooms']);  ?>
					<div class="box-body" id="card-room">
						@if($data['rooms'] != NULL)
						@foreach($rooms as $key => $room)
						@if($key == 0)
						<div class="form-group {{ $errors->has('room_title[]') ? ' has-error' : '' }}">
							<label for="inputTourName3" class="col-sm-3 control-label">Title</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Title" name="room_title[]" value="{{$room->room_title}}">
								</div>
							</div>
						</div>
						<div class="form-group {{ $errors->has('room_summary[]') ? ' has-error' : '' }}">
							<label for="inputDescription3" class="col-sm-3 control-label">Summary</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-pencil"></i>
									</div>
									<textarea class="form-control textarea" rows="5" id="inputDescription3" placeholder="Enter Summary" name="room_summary[]">{!!$room->room_summary!!}</textarea>
									
								</div>
							</div>
						</div>
						<div class="form-group {{ $errors->has('room_image[]') ? ' has-error' : '' }}">
							<label for="inputDescription3" class="col-sm-3 control-label">Room Image</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-pencil"></i>
									</div>
									<input type="file" class="form-control" id="inputTourName3" placeholder="Enter Title" name="room_image[]" value="{{old('room_image[]')}}">		
								</div>
							</div>
						</div>
						@else
						<div class="new-group" style="clear: both" id="{{'room'.$key}}">
							<div class="form-group {{ $errors->has('room_title[]') ? ' has-error' : '' }}">
								<label for="inputTourName3" class="col-sm-3 control-label">Title</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Title" name="room_title[]" value="{{$room->room_title}}">
									</div>
								</div>
							</div>
							<div class="form-group {{ $errors->has('room_summary[]') ? ' has-error' : '' }}">
								<label for="inputDescription3" class="col-sm-3 control-label">Summary</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<textarea class="form-control textarea" rows="5" id="inputDescription3" placeholder="Enter Summary" name="room_summary[]">{!!$room->room_summary!!}</textarea>

									</div>
								</div>
							</div>
							<div class="form-group {{ $errors->has('room_image[]') ? ' has-error' : '' }}">
								<label for="inputDescription3" class="col-sm-3 control-label">Room Image</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<input type="file" class="form-control" id="inputTourName3" placeholder="Enter Title" name="room_image[]" value="{{old('room_image[]')}}">		
									</div>
								</div>
							</div>
							<input style="margin-left: 315px;" type="button" class="remove btn btn-danger" id="close" value="Delete Room"/ onclick="remove('{{'room'.$key}}')">

						</div>
						@endif
						@endforeach
						@else
						<div class="form-group {{ $errors->has('room_title[]') ? ' has-error' : '' }}">
							<label for="inputTourName3" class="col-sm-3 control-label">Title</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Title" name="room_title[]" value="{{old('room_title[]')}}">
								</div>
							</div>
						</div>
						<div class="form-group {{ $errors->has('room_summary[]') ? ' has-error' : '' }}">
							<label for="inputDescription3" class="col-sm-3 control-label">Summary</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-pencil"></i>
									</div>
									<textarea class="form-control" rows="5" id="inputDescription3" placeholder="Enter Summary" name="room_summary[]">{!!old('room_summary[]')!!}</textarea>
									
								</div>
							</div>
						</div>
						<div class="form-group {{ $errors->has('room_image[]') ? ' has-error' : '' }}">
							<label for="inputDescription3" class="col-sm-3 control-label">Room Image</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-pencil"></i>
									</div>
									<input type="file" class="form-control" id="inputTourName3" placeholder="Enter Title" name="room_image[]" value="{{old('room_image[]')}}">		
								</div>
							</div>
						</div>
						@endif
					</div>
					<div class="form-group">
						<div class="col-sm-11 control-label">
							<div class="col-sm-10">
								<input id="submitButton" type="button" class="add_another_room btn btn-info" value="Add New  Room"/>
							</div>
						</div>
					</div>

					<h2 align="center">Pricings</h2>
					<?php $pricing = json_decode($data['pricing']); ?>
					<div class="box-body" id="card-pricings">
						@if($data['pricing'] != NULL)
						@foreach($pricing as $key => $price)
						@if($key == 0)
						<div class="form-group {{ $errors->has('duration[]') ? ' has-error' : '' }}">
							<label for="inputTourName3" class="col-sm-3 control-label">Duration</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Title" name="duration[]" value="{{$price->duration}}">
								</div>
							</div>
						</div>
						<div class="form-group {{ $errors->has('price[]') ? ' has-error' : '' }}">
							<label for="inputDescription3" class="col-sm-3 control-label">Price</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-pencil"></i>
									</div>
									<input type="number" class="form-control" id="inputTourName3" placeholder="Enter Price" name="price[]" value="{{$price->price}}">

								</div>
							</div>
						</div>
						@else
						<div class="new-group" id="{{'pricing'.$key}}" style="clear: both;">
							<div class="form-group {{ $errors->has('duration[]') ? ' has-error' : '' }}">
								<label for="inputTourName3" class="col-sm-3 control-label">Duration</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Title" name="duration[]" value="{{$price->duration}}">
									</div>
								</div>
							</div>
							<div class="form-group {{ $errors->has('price[]') ? ' has-error' : '' }}">
								<label for="inputDescription3" class="col-sm-3 control-label">Price</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<input type="number" class="form-control" id="inputTourName3" placeholder="Enter Price" name="price[]" value="{{$price->price}}">

									</div>
								</div>
							</div>
							<input style="margin-left: 315px;" type="button" class="remove btn btn-danger" id="close" value="Delete Pricings"/ onclick="remove('{{'pricing'.$key}}')">

						</div>
						@endif
						@endforeach
						@else
						<div class="form-group {{ $errors->has('sub_title[]') ? ' has-error' : '' }}">
							<label for="inputTourName3" class="col-sm-3 control-label">Duration</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Title" name="duration[]" value="{{old('duration[]')}}">
								</div>
							</div>
						</div>
						<div class="form-group {{ $errors->has('price[]') ? ' has-error' : '' }}">
							<label for="inputDescription3" class="col-sm-3 control-label">Price</label>
							<div class="col-sm-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-pencil"></i>
									</div>
									<input type="number" class="form-control" id="inputTourName3" placeholder="Enter Price" name="price[]" value="{{old('price[]')}}">

								</div>
							</div>
						</div>
						@endif
					</div>
					<div class="form-group">
						<div class="col-sm-11 control-label">
							<div class="col-sm-10">
								<input id="submitButton" type="button" class="add_another_pricing btn btn-info" value="Add New  Pricings"/>
							</div>
						</div>
					</div>

					<!-- seo section starts -->
					<hr>
					<div class="form-group{{ $errors->has('seo_title') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter SEO title<span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" name="seo_title" class="form-control" placeholder="Enter seo title" value="{{$data['seo_title']}}">
						</div>
						@if ($errors->has('seo_title'))
						<span class="text-danger">{{ $errors->first('seo_title') }}</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('seo_keyword') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter SEO keywords<span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<input type="text" name="seo_keyword" class="form-control" placeholder="Enter seo keywords" value="{{$data['seo_keyword']}}">
						</div>
						@if ($errors->has('seo_keyword'))
						<span class="text-danger">{{ $errors->first('seo_keyword') }}</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('seo_description') ? ' has-error' : '' }}">
						<label class="col-md-3 control-label">Enter SEO description<span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<textarea class="form-control" name="seo_description" rows="5" placeholder="Enter seo description">{{$data['seo_description']}}</textarea>
						</div>
						@if ($errors->has('seo_description'))
						<span class="text-danger">{{ $errors->first('seo_description') }}</span>
						@endif
					</div>
					<!-- seo section ends -->


					<!-- status section starts -->
					<hr>
					<div class="form-group">
						<label class="col-md-3 control-label">Status<span class="cd-admin-required">*</span></label>
						<div class="col-md-6">
							<div class="mt-radio-inline">
								<label class="mt-radio">
									<input type="radio" name="status" id="optionsRadios25" value="active" <?php echo $data['status'] == 'active'?'checked':'' ?>> Active
									<span></span>
								</label>
								<label class="mt-radio">
									<input type="radio" name="status" id="optionsRadios26" value="inactive"<?php echo $data['status'] == 'inactive'?'checked':'' ?>> Inactive
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