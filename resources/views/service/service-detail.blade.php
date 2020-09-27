@extends('home-master')

@section('seo_title')	
{{$finalServiceDetail['service_detail']['seo_title']}}
@endsection

@section('seo_description')	
{{$finalServiceDetail['service_detail']['seo_description']}}
@endsection

@section('seo_keyword')	
{{$finalServiceDetail['service_detail']['seo_keyword']}}
@endsection

@section('content')

<div class="service-detail content-page">
	<div class="banner">
		<div class="banner-img" data-aos="zoom-in" data-aos-duration="3000">
			<img class="img-fluid" src="{{url('uploads/services/'.$finalServiceDetail['service_detail']['image'])}}" alt=""></img>
		</div>
		<div class="page-title title" data-aos="fade-right" data-aos-duration="3000">
			<h2>{{$finalServiceDetail['service_detail']['name']}}</h2>
		</div>
	</div>

	<div class="container mt-5 ma-b">
		<div class="row">
			<div class="col-md-4">
				<div class="service-sidebar">
					<div class="title" data-aos="fade-down" data-aos-duration="3000">
						<h3>Service</h3>
					</div>
					<ul class="mt-4" data-aos="fade-right" data-aos-duration="3000">
						@foreach($finalServiceDetail['other_services'] as $other_services)
						<li><a href="{{url('service_detail/'.$other_services['slug'])}}">{{$other_services['name']}}</a></li>
						@endforeach
						{{-- <li><a href="#">Commercial Cleaning</a></li> --}}
						{{-- <li><a href="#">Hotel</a></li>
						<li><a href="#">Resturant</a></li>
						<li><a href="#">Boat Cleaning</a></li> --}}
					</ul>
					<div class="sidebar-display" data-aos="fade-right" data-aos-duration="3000">
						<div class="choose-card text-center">
							<div class="choose-card-img">
								<img class="img-fluid" src="{{url('public/images/25.png')}}" alt=""></img>
							</div>
							<div class="choose-card-title">
								<h4>
									Reason Why
									<span>People Choose Us</span>
								</h4>
							</div>
						</div>
					</div>
					<div class="sidebar-bg"  data-aos="fade-right" data-aos-duration="3000">
						@foreach($finalServiceDetail['features'] as $f)
						<div class="choose-card text-center">
							<div class="choose-card-img">
								<img class="img-fluid" src="{{url('uploads/thumbnail/'.$f['image'])}}" alt=""></img>
							</div>
							<div class="choose-card-title">
								<h4>
									{{$f['title']}}
								</h4>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="service-content">
					<div class="title-content"  data-aos="fade-down" data-aos-duration="3000">
						<p>{{$finalServiceDetail['service_detail']['sub_text']}}</p>
					</div>

					<div class="row mt-4">
						<?php $section = json_decode($finalServiceDetail['service_detail']['section']); ?>
						@foreach($section as $key=>$s)
						<div class="col-md-6"  data-aos="flip-up" data-aos-duration="3000">
							<div class="service-title mb-4">
								<h4>{{$s->sub_title}}</h4>
							</div>
							<p>{!!$s->sub_description!!}</p>
						</div>
						@endforeach
						
					</div>

					<div class="subscriber ma-t" data-aos="fade-left" data-aos-duration="3000">
						<div class="row">
							<div class="col-md-12">
								<div class="title">
									<h4>Subscribe for the Latest News:</h4>
								</div>
								<form class="subscribe-form mt-3" action="{{url('add-subscriptions')}}" method="POST">
									@csrf
									<div class="form-row">
										<div class="form-group col-md-4 ">
											<input type="text" class="form-control" placeholder="Name" name="name">
										</div>
										<div class="form-group col-md-4">
											<input type="email" class="form-control" placeholder="Email Address" name="email">
										</div>
										<div class="form-group col-md-4 text-center">
											<button type="submit" class="btn btn1">Subscribe</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

					<div class="row ma-t">
						<div class="col-md-6 recent-post" data-aos="flip-right" data-aos-duration="3000">
							<div class="service-title mb-4">
								<h4>Recent Post</h4>
							</div>
							<ul>
								@foreach($finalServiceDetail['recent_blogs'] as $blogs)
								<li>
									<a href="{{url('blog_detail/'.$blogs['slug'])}}">{{$blogs['title']}}</a>
									<?php $date = Carbon\Carbon::parse($blogs['created_at'])->format('F d, Y'); ?>
									<span>{{$date}}</span>
								</li>
								@endforeach
								{{-- <li>
									<a href="{{url('service_detail')}}">Why Clany’s a life-saver for my flatshare!</a>
									<span>April 29, 2020</span>
								</li>
								<li>
									<a href="{{url('service_detail')}}">Plants that keep the air clean</a>
									<span>September 1, 2014</span>
								</li>
								<li>
									<a href="{{url('service_detail')}}">Clany Super Bowl Party Prep Guide</a>
									<span>March 21, 2014</span>
								</li>
								<li>
									<a href="{{url('service_detail')}}">The Science of Spring Cleaning!</a>
									<span>March 15, 2014</span>
								</li>
								<li>
									<a href="{{url('service_detail')}}">Meet the Professionals: Alex</a>
									<span>March 10, 2014</span>
								</li>
								<li>
									<a href="{{url('service_detail')}}">Carpet cleaning to remove flea infestation</a>
									<span>March 10, 2014</span>
								</li> --}}
							</ul>
						</div>
						@if(count($finalServiceDetail['recent_blogs']) > 0)
						<div class="col-md-6 recent-post-content" data-aos="flip-left" data-aos-duration="3000">
							<a href="{{url('blog_detail/'.$finalServiceDetail['recent_blogs'][0]['slug'])}}">
								<div class="blog-card">
									<div class="blog-card-img">
										<img class="img-fluid" src="{{url('uploads/thumbnail/'.$finalServiceDetail['recent_blogs'][0]['image'])}}" alt=""></img>
									</div>
									<div class="home-card-title">
										<h4>{{$finalServiceDetail['recent_blogs'][0]['title']}}</h4>
									</div>
									<span class="linear-border"></span>
									<div class="blog-date">
										<?php $date = Carbon\Carbon::parse($finalServiceDetail['recent_blogs'][0]['created_at'])->format('F d, Y'); ?>
										<a href="{{url('blog_detail/'.$finalServiceDetail['recent_blogs'][0]['slug'])}}"><i class="far fa-calendar-alt pr-3"></i>{{$date}}</a>
									</div>
									<div class="content">
										<p>{{$finalServiceDetail['recent_blogs'][0]['summary']}}</p>
									</div>
									<a href="{{url('blog_detail/'.$finalServiceDetail['recent_blogs'][0]['slug'])}}" class="more">READ MORE</a>
								</div>
							</a>
						</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection