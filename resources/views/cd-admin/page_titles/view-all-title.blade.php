@extends('cd-admin.admin-master')

<!-- page content -->
@section('content')

@if(Session::has('failure'))
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>DELETED SUCCESSFULLY!!!</strong> {{ Session::get('message', '') }}
</div>
@elseif(Session::has('success'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>INSERTED SUCCESSFULLY!!!</strong> {{ Session::get('message', '') }}
</div>

@elseif(Session::has('updateSuccess'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>PAGE TITLE UPDATED SUCCESSFULLY!!!</strong> {{ Session::get('message', '') }}
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
		<span>View all Page Title</span>
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
					<span class="caption-subject bold uppercase"> View All Page Title </span>
				</div>
				{{-- <div class="btn-group pull-right">
					<a href="{{url('cd-admin/add-blog')}}">
						<button id="sample_editable_1_new" class="btn sbold green"> Add New Page Title
							<i class="fa fa-plus"></i>
						</button>
					</a>
				</div> --}}
			</div>
			<div class="portlet-body">
				<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
					<thead>
						<tr>
							<th style="display: none;"></th>
							<th>SN</th>
							<th>Page Name </th>
							<th>Title</th>
							<th>Sub Text</th>
							<th>Quote</th>
							<th>Image</th>
							<th> Actions </th>
						</tr>
					</thead>
					<tbody>
						@foreach($page as $p)
						<tr class="odd gradeX">
							<td>{{$loop->iteration}}</td>
							<td>{{$p['page_name']}}</td>
							<td>{{$p['title']}}</td>
							<td>
								{{$p['sub_text']}}
							</td>
							<td>{{$p['quote']}}</td>
							<td align="center">
								<img src="{{url('uploads/'.$p['background_image'])}}" height="75px" width="70px" class="img-fluid rounded" >
							</td>
							<td>
								<div class="btn-group">
									<button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
										<i class="fa fa-angle-down"></i>
									</button>
									<ul class="dropdown-menu pull-left" role="menu">
										
										<li>
											<a href="{{url('cd-admin/edit-page-titles/'.$p['id'])}}">
												<i class="fa fa-edit"></i> Edit
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

@endsection