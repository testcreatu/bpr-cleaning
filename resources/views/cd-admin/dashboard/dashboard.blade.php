@extends('cd-admin.admin-master')

<!-- page content -->
@section('content')

<!-- BEGIN PAGE BAR -->
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<span>Dashboard</span>
		</li>
	</ul>
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title"> Admin Dashboard</h1>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<!-- BEGIN DASHBOARD STATS 1-->
<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<a class="dashboard-stat dashboard-stat-v2 blue" href="#">
			<div class="visual">
				<i class="fa fa-motorcycle"></i>
			</div>
			<div class="details">
				<div class="number">
					<span data-counter="counterup" data-value="29">0</span>
				</div>
				<div class="desc"> Name </div>
			</div>
		</a>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<a class="dashboard-stat dashboard-stat-v2 red" href="#">
			<div class="visual">
				<i class="fa fa-home"></i>
			</div>
			<div class="details">
				<div class="number">
					<span data-counter="counterup" data-value="12">0</span>
				</div>
				<div class="desc"> Name </div>
			</div>
		</a>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<a class="dashboard-stat dashboard-stat-v2 green" href="#">
			<div class="visual">
				<i class="fa fa-check-square-o"></i>
			</div>
			<div class="details">
				<div class="number">
					<span data-counter="counterup" data-value="52">0</span>
				</div>
				<div class="desc"> Name </div>
			</div>
		</a>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<a class="dashboard-stat dashboard-stat-v2 purple" href="#">
			<div class="visual">
				<i class="fa fa-comments-o"></i>
			</div>
			<div class="details">
				<div class="number"> 
					<span data-counter="counterup" data-value="89"></span>
				</div>
				<div class="desc"> Name </div>
			</div>
		</a>
	</div>
</div>
<div class="clearfix"></div>
<!-- END DASHBOARD STATS 1-->

@endsection