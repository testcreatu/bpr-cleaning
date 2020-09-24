@extends('home-master')



@section('content')

<div class="content-page">
	<div class="banner pa-tb">
		<div class="container">	
			<div class="title"  data-aos="fade-down" data-aos-duration="3000">
				<h2>{{$finalBlogDetail['blog_detail']['title']}}</h2>
			</div>
		</div>	
	</div>

	<div class="container">
		<div class="row">
			<div class="offset-lg-1 col-lg-10 offset-xl-1 col-xl-10">
				<div class="blog-detail">
					<div class="row blog-detail-top">
						<div class="col-4 pt-4 pb-4">
							<div class="date" data-aos="fade-right" data-aos-duration="3000">
								<?php $date = Carbon\Carbon::parse($finalBlogDetail['blog_detail']['created_at'])->format('F d, Y'); ?>

								<span><i class="far fa-calendar-alt pr-3"></i>{{$date}}</span>
							</div>
						</div>
						<div class="col-8 share">
							<ul class=""  data-aos="fade-left" data-aos-duration="3000">
								<li class="facebook">
									<div id="fb-root"></div>
									<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&autoLogAppEvents=1&version=v8.0&appId=706653159797806" nonce="RrVO169H"></script>
									<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
								</li>
								<li class="twitter">
									<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="true">Tweet</a><script async src="https://platform.twitter.com/widgets.js"></script>
								</li>
							</ul>
						</div>
					</div>
					<div class="blog-detail-img" data-aos="zoom-in" data-aos-duration="3000">
						<img class="img-fluid" src="{{url('uploads/blogs/'.$finalBlogDetail['blog_detail']['image'])}}" alt=""></img>
					</div>
					<div class="content" data-aos="fade-right" data-aos-duration="3000">
						<p>{!!$finalBlogDetail['blog_detail']['description']!!}</p>

					</div>
				</div>
				<div class="user-comment">
					<div id="fb-root"></div>
					<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0&appId=706653159797806&autoLogAppEvents=1" nonce="ge0FdjvM"></script>

					<div class="fb-comments" data-href="{{url()->current()}}" data-numposts="5" data-width="100%"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="related-story">
		<div class="container">
			<div class="mission-title text-center">
				<h4>Releated Blogs</h4>
			</div>
			<div class="row mt-4">
				<div class="offset-lg-1 col-lg-10 offset-xl-1 col-xl-10">
					<div class="related-story-carousel owl-carousel owl-theme">
						@foreach($finalBlogDetail['other_blogs'] as $b)
						<div class="item">
							<a href="{{url('blog_detail/'.$b['slug'])}}">
								<div class="blog-card" data-aos="flip-right" data-aos-duration="3000">
									<div class="blog-card-img">
										<img class="img-fluid" src="{{url('uploads/thumbnail/'.$b['image'])}}" alt=""></img>
									</div>
									<div class="home-card-title">
										<h4>{{$b['title']}}</h4>
									</div>
									<span class="linear-border"></span>
									<div class="blog-date">
										<?php $date = Carbon\Carbon::parse($b['created_at'])->format('F d, Y'); ?>
										<a href="{{url('blog_detail/'.$b['slug'])}}"><i class="far fa-calendar-alt pr-3"></i>{{$date}}</a>
									</div>
									<div class="content">
										<p>{{$b['summary']}}</p>
									</div>
									<a href="{{url('blog_detail/'.$b['slug'])}}" class="more">READ MORE</a>
								</div>
							</a>
						</div>
						@endforeach
						{{-- <div class="item">
							<a href="{{url('blog_detail')}}">
								<div class="blog-card" data-aos="flip-right" data-aos-duration="3000">
									<div class="blog-card-img">
										<img class="img-fluid" src="{{url('public/images/36.jpg')}}" alt=""></img>
									</div>
									<div class="home-card-title">
										<h4>Clany Super Bowl Party Prep Guide</h4>
									</div>
									<span class="linear-border"></span>
									<div class="blog-date">
										<a href="{{url('blog_detail')}}"><i class="far fa-calendar-alt pr-3"></i>March 21, 2020</a>
									</div>
									<div class="content">
										<p>We have extensive experience of working with a variety of healthcare establishments. </p>
									</div>
									<a href="{{url('blog_detail')}}" class="more">READ MORE</a>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="{{url('blog_detail')}}">
								<div class="blog-card">
									<div class="blog-card-img" data-aos="flip-right" data-aos-duration="3000">
										<img class="img-fluid" src="{{url('public/images/37.jpg')}}" alt=""></img>
									</div>
									<div class="home-card-title">
										<h4>The Science of Spring Cleaning!</h4>
									</div>
									<span class="linear-border"></span>
									<div class="blog-date">
										<a href="{{url('blog_detail')}}"><i class="far fa-calendar-alt pr-3"></i>March 21, 2020</a>
									</div>
									<div class="content">
										<p>As specialist cleaning contractors, we are adept at carrying out high-quality cleaning. </p>
									</div>
									<a href="{{url('blog_detail')}}" class="more">READ MORE</a>
								</div>
							</a>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection