@extends('home-master')



@section('content')

<div class="content-page">
	<div class="banner pa-tb">
		<div class="container">	
			<div class="title">
				<h2>Blog</h2>
			</div>
		</div>	
	</div>
</div>

<div class="container blog ma-t">
	<div class="row mt-5">
		@foreach($finalBlogList['list'] as $blog)
		<div class="col-md-6 col-lg-4 col-xl-4 mb-5">
			<a href="{{url('blog_detail/'.$blog['slug'])}}">
				<div class="blog-card" data-aos="fade-right" data-aos-duration="3000">
					<div class="blog-card-img">
						<img class="img-fluid" src="{{url('uploads/thumbnail/'.$blog['image'])}}" alt=""></img>
					</div>
					<div class="home-card-title">
						<h4>{{$blog['title']}}</h4>
					</div>
					<span class="linear-border"></span>
					<div class="blog-date">
						<?php $date = Carbon\Carbon::parse($blog['created_at'])->format('F d, Y'); ?>
						<a href="{{url('blog_detail/'.$blog['slug'])}}"><i class="far fa-calendar-alt pr-3"></i>{{$date}}</a>
					</div>
					<div class="content">
						<p>{{$blog['summary']}}</p>
					</div>
					<a href="{{url('blog_detail/'.$blog['slug'])}}" class="more">READ MORE</a>
				</div>
			</a>
		</div>
		@endforeach
	</div>
</div>
<div class="ma-b">
	{{$finalBlogList['list']->links()}}
	
</div>
{{-- <div class="container ma-b">
	<nav aria-label="Page navigation example">
		<ul class="pagination justify-content-center">
			<li class="page-item {{ (request()->is('blog_list*')) ? 'active' : '' }}">
				<a class="page-link" href="#"><span>1</span></a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#"><span>2</span></a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#"><span>3</span></a>
			</li>
		</ul>
	</nav>
</div> --}}
@endsection