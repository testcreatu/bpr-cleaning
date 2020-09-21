@extends('cd-admin.admin-master')

<!-- page content -->
@section('content')

@if(Session::has('SubCategoryDeleteSuccess'))
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>SUB CATEGORY DELETED SUCCESSFULLY!!!</strong> {{ Session::get('message', '') }}
</div>
@elseif(Session::has('SubCategorySuccess'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>SUB CATEGORY INSERTED SUCCESSFULLY!!!</strong> {{ Session::get('message', '') }}
</div>

@elseif(Session::has('SubCategoryUpdateSuccess'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>SUB CATEGORY UPDATED SUCCESSFULLY!!!</strong> {{ Session::get('message', '') }}
</div>

@endif

<!-- BEGIN PAGE BAR -->
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<a href="{{url('cd-admin/dashboard')}}">Home</a>
			<i class="fa fa-circle"></i>
		</li>
	</li>
	<li>
		<span>View all Sub Category</span>
	</li>
</ul>
</div>
<!-- END PAGE BAR -->

<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption font-dark">
					<i class="icon-settings font-dark"></i>
					<span class="caption-subject bold uppercase"> View All Sub Category </span>
				</div>
				<div class="btn-group pull-right">
					<a href="{{url('cd-admin/add-subCategory')}}">
						<button id="sample_editable_1_new" class="btn sbold green"> Add New Sub Category
							<i class="fa fa-plus"></i>
						</button>
					</a>
				</div>
			</div>
			<div class="portlet-body">
				<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
					<thead>
						<tr>
							<th>SN</th>
							<th>Title </th>
							<th>Status</th>
							<th> Actions </th>
						</tr>
					</thead>
					<tbody>
						@foreach($sub_category as $detail)

						<tr class="odd gradeX">
							<td>{{$loop->iteration}}</td>
							<td>{!!$detail->header_title!!}</td>
							<td>
								@if($detail->status == 'active')
								<span class="badge badge-success"> Active </span>
								@else
								<span class="badge badge-danger"> In-Active </span>
								@endif
							</td>
							
							<td>
								<div class="btn-group">
									<button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
										<i class="fa fa-angle-down"></i>
									</button>
									<ul class="dropdown-menu pull-left" role="menu">
										<li>
											<a data-toggle="modal" href="#view-modal{{$detail->id}}">
												<i class="fa fa-eye"></i> View
											</a>
										</li>
										{{-- <li>
											<a href="{{url('cd-admin/view-courses-detail/'.$detail->id)}}">
												<i class="fa fa-edit"></i>View Detail
											</a>
										</li> --}}
										<li>
											<a href="{{url('cd-admin/edit-subCategory/'.$detail->id)}}">
												<i class="fa fa-edit"></i> Edit
											</a>
										</li>
										<li>
											<a data-toggle="modal" href="#delete-modal{{$detail->id}}">
												<i class="fa fa-trash"></i> Delete
											</a>
										</li>
									</ul>
								</div>
							</td>
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
	</div>
</div>

<!-- view modals -->
@foreach($sub_category as $ch)
<div id="view-modal{{$ch->id}}" class="modal fade modal-scroll" tabindex="-1" data-replace="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title pull-left">{{$ch['header_title']}}</h4>
				<p class="modal-title pull-right">status 
					@if($detail->status == 'active')
					<span class="badge badge-success"> Active </span>
					@else
					<span class="badge badge-danger"> In-Active </span>
					@endif
				</p>
			</div>
			<div class="modal-body">
				<div class="panel panel-default">
					<h2 align="center">Header Image</h2>
					<img src="{{url('uploads/'.$ch->header_image)}}" alt="" class="img-responsive">
				</div>

				<div class="panel panel-default">
					<h2 align="center">Header Quote</h2>
					<p>{{$ch['quote']}}</p>
				</div>

				<div class="panel panel-default">
					<h2 align="center">Header Sub Text</h2>
					<p>{{$ch['sub_text']}}</p>
				</div>

				<div class="panel panel-default">
					<h2 align="center">Main Title</h2>
					<p>{{$ch['main_title']}}</p>
				</div>

				<div class="panel panel-default">
					<h2 align="center">Main Description</h2>
					<p>{!!$ch['main_description']!!}</p>
				</div>
				<div class="panel panel-default">
					<h2 align="center">Image</h2>
					<img src="{{url('uploads/'.$ch->image)}}" alt="" class="img-responsive">
				</div>
				@if($ch['benifits'] != NULL)
				<?php $benifits = json_decode($ch['benifits']); ?>
				<div class="panel panel-default">
					<h2 align="center">Benifits</h2>
					@foreach($benifits as $b)
					<span class="badge badge-primary">{{$b}}</span>
					<br>
					@endforeach
				</div>
				@endif

				@if($ch['features'] != NULL)
				<?php $features = json_decode($ch['features']); ?>
				<div class="panel panel-default">
					<h2 align="center">Features</h2>
					@foreach($features as $f)
					<span class="badge badge-primary">{{$f}}</span>
					<br>
					@endforeach
				</div>
				@endif
				<div class="panel panel-default">
					<h2 align="center">SEO Title</h2>
					<p>{{$ch->seo_title}}</p>
				</div>
				<div class="panel panel-default">
					<h2 align="center">SEO Description</h2>
					<p>{{$ch->seo_description}}</p>
				</div>
				<div class="panel panel-default">
					<h2 align="center">SEO Keyword</h2>
					<p>{{$ch->seo_keyword}}</p>
				</div>
				{{-- @foreach($ch->detail as $detail)
				<div class="panel panel-default">
					<div class="panel-heading">Title </div>
					<div class="panel-body"> {!!$detail->title!!} </div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading"> Description </div>
					<div class="panel-body"> {!!$detail->description!!} </div>
				</div>
				<hr>
				@endforeach --}}
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
			</div>
		</div>
	</div>
</div>
@endforeach

<!-- delete modal -->
@foreach($sub_category as $c)
<div class="modal fade" id="delete-modal{{$c->id}}" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">Delete</h4>
			</div>
			<div class="modal-body"> Are you sure want to delete this ? </div>
			<div class="modal-footer">
				<button type="button" class="btn dark btn-outline" data-dismiss="modal">No</button>
				<a href="{{url('/cd-admin/delete-subCategory/'.$c->id)}}"  class="btn green">YES</a>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
@endforeach

@endsection