@extends('home-master')



@section('content')

<div class="content-page">
	<div class="banner pa-tb">
		<div class="container">	
			<div class="title"  data-aos="fade-down" data-aos-duration="3000">
				<h2>Why Clany’s a life-saver for my flatshare!</h2>
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
								<span><i class="far fa-calendar-alt pr-3"></i>March 21, 2020</span>
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
						<img class="img-fluid" src="{{url('public/images/50.jpg')}}" alt=""></img>
					</div>
					<div class="content" data-aos="fade-right" data-aos-duration="3000">
						<p>Marie is 24, originally from Montreal, Canada.<p>

						<p>She moved to a new city 8 months ago and moved into a flatshare with three other girls in a small apartment downtown. “When you’re living with roommates it gets messy unbelievably quickly”, she says, “And rotas don’t really work. I mean, who’s going to remember it’s their turn to take out the trash one week in three – and the results are not pretty!”<p>
						<div class="content-img">
							<img class="img-fluid" src="{{url('public/images/50.jpg')}}" alt=""></img>
						</div>
						<p>Marie and her flatmates have been using Clany for nearly 8 months now. Last year Marie quit her job to study for her Masters. As she works from home, having a tidy place is even more important to her. We asked her what were her favorite things about the service, she told us:</p>

						<p>“I like the fact that you can rate the professional. And let them know how grateful you are when they do a great job. Also that you can change and stop your subscription. You have complete control.”</p>

						<p>“As I’m studying I spend a lot of time at home. I don’t have time to clean. Not having to worry about that is great. It’s one less thing to worry about. And when I’m there, I see it all in front of me. It’s like the apartment transforms – I notice it suddenly smells fresh and clean, and I immediately feel more at ease. I honestly think it helps me study better when it’s clean. So thank you, Clany, for that!”</p>

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
				<h4>Releated Stories</h4>
			</div>
			<div class="row mt-4">
				<div class="offset-lg-1 col-lg-10 offset-xl-1 col-xl-10">
					<div class="related-story-carousel owl-carousel owl-theme">
						<div class="item">
							<a href="{{url('blog_detail')}}">
								<div class="blog-card" data-aos="flip-right" data-aos-duration="3000">
									<div class="blog-card-img">
										<img class="img-fluid" src="{{url('public/images/45.jpg')}}" alt=""></img>
									</div>
									<div class="home-card-title">
										<h4>Plants that keep the air clean</h4>
									</div>
									<span class="linear-border"></span>
									<div class="blog-date">
										<a href="{{url('blog_detail')}}"><i class="far fa-calendar-alt pr-3"></i>March 21, 2020</a>
									</div>
									<div class="content">
										<p>Providing a clean office environment is a key component to a modern, effective organisation.</p>
									</div>
									<a href="{{url('blog_detail')}}" class="more">READ MORE</a>
								</div>
							</a>
						</div>
						<div class="item">
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection