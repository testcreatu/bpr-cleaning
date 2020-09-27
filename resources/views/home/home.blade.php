@extends('home-master')

@section('seo_title')	
{{$finalResult['seo']['title']}}
@endsection

@section('seo_description')	
{{$finalResult['seo']['description']}}
@endsection

@section('seo_keyword')	
{{$finalResult['seo']['keywords']}}
@endsection


@section('content')

<div class="home">
	@if(Session::has('CallRequestSuccess'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>We Have Recieved Your Contact Request.We Will Contact You Soon</strong> {{ Session::get('message', '') }}
	</div>
	@endif

	@if(Session::has('SubscriptionSuccess'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Thank You For Subscribing to Our Newsletter.</strong> {{ Session::get('message', '') }}
	</div>
	@endif

	@if(Session::has('ContactSaveSuccess'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>We Have Recieved your Message.We Will Contact You Soon</strong> {{ Session::get('message', '') }}
	</div>
	@endif
	<div id="mainCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			@foreach($finalResult['carousel'] as $key=>$c)
			<div class="carousel-item {{$key == 0 ?'active':''}}">
				<div class="home-banner"  data-aos="fade-up"> 
					<div class="img-banner">
						<div class="home-banner-img">
							<img class="img-fluid" src="{{url('uploads/thumbnail/'.$c['image'])}}" alt=""></img>
						</div>
						<div class="home-banner-bg">
							<img class="img-fluid" src="{{url('public/images/1.svg')}}" alt=""></img>
						</div>
					</div>
					@if($c['show_offer'] == 'show')
					<div class="banner-msg">
						<div class="content">
							<div class="banner-msg-img">
								<img class="img-fluid" src="{{url('public/images/5.1.png')}}" alt=""></img>
							</div>
							<div class="banner-msg-content">
								<div class="msg-content">
									<div class="msg-detail">
										<span>{{$c['offer_tag']}}</span>
										<h4>{{$c['offer_title']}}</h4>
										{{-- <h5>We Clean for You</h5> --}}
										<p>{{$c['offer_sub_text']}}</p>
									</div>
									<a href="{{url('booking_list')}}" class="btn btn1">See Our Offer</a>
								</div>
							</div>
						</div>
					</div>
					@endif
				</div>
				<!-- <img src="{{url('public/images/3.png')}}" class="d-block w-100" alt="..."> -->
			</div>
			@endforeach
		</div>
		<a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	@foreach($finalResult['services'] as $services)
	<div class="corousel-1">
		<div class="container">
			<div class="title carousel-title text-center "  data-aos="fade-up" data-aos-duration="3000"> 
				<h2>
					{{$services['name']}}
				</h2>
			</div>
			<?php $rooms = json_decode($services['rooms']); ?>
			@if($rooms != NULL)
			<div id="carouselHome" class="carousel slide home-carousel carousel-fade" data-ride="carousel">
				<div class="carousel-inner">
					@foreach($rooms as $key=>$r)
					<div class="carousel-item {{$key == 0 ?'active':''}}">
						<div class="home-carousel-title">
							<div class="carousel-title-content" data-aos="fade-right" data-aos-duration="3000">
								<h5>{{$r->room_title}}</h5>
								<p>{{$r->room_summary}}</p>
							</div>
						</div>
						<div class="home-carousel-img">
							<img src="{{url('uploads/services/'.$r->image)}}" class="d-block w-100" alt="...">
						</div>
						
					</div>
					@endforeach

				</div>
				<div class="carousel-control">
					<a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			@endif
		</div>

		<div class="home-booking ma-t">
			<div class="container">
				<div class="row">
					<div class="col-6 col-md-6 text-center" data-aos="fade-left" data-aos-duration="3000">
						<p>
							{{$services['start_price']}}
							<span>*Start Price</span>
						</p>
					</div>
					<div class="col-6 col-md-6 text-center">
						<a href="{{url('booking_form/'.$services['slug'])}}" class="btn btn1">Book Now</a>
					</div>
				</div>
				<div class="home-booking-img" data-aos="fade-down" data-aos-duration="3000">
					<img class="img-fluid" src="{{url('uploads/services/'.$services['front_image'])}}" alt=""></img>
				</div>
			</div>
		</div>
	</div>
	@endforeach
	{{-- <div class="carousel-2">
		<div class="container ma-t">
			<div class="title carousel-title text-center" data-aos="fade-down" data-aos-duration="3000">
				<h2>
					Commercial
					<span>cleaning</span>
				</h2>
			</div>
			<div id="carouselHome-1" class="carousel slide home-carousel carousel-fade" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="home-carousel-title">
							<div class="carousel-title-content" data-aos="fade-right" data-aos-duration="3000">
								<h5>Living Room</h5>
								<p>Take the time to review what goes into a living room intense cleanup.</p>
							</div>
						</div>
						<div class="home-carousel-img">
							<img src="{{url('public/images/18.jpg')}}" class="d-block w-100" alt="...">
						</div>
						
					</div>
					<div class="carousel-item">
						<div class="home-carousel-title">
							<div class="carousel-title-content" data-aos="fade-right" data-aos-duration="3000">
								<h5>Bathroom</h5>
								<p>Cleaning the bathroom is not as difficult or time-consuming as you might think!</p>
							</div>
						</div>
						<div class="home-carousel-img">
							<img src="{{url('public/images/19.jpg')}}" class="d-block w-100" alt="...">
						</div>
					</div>
				</div>
				<div class="carousel-control">
					<a class="carousel-control-prev" href="#carouselHome-1" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselHome-1" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>

		<div class="home-booking ma-t">
			<div class="container">
				<div class="row">
					<div class="col-md-6 text-center" data-aos="fade-up" data-aos-duration="3000">
						<p>
							$15/m
							<span>*Start Price</span>
						</p>
					</div>
					<div class="col-md-6 text-center">
						<a href="{{url('cleaning_services')}}" class="btn btn1">Book Now</a>
					</div>
				</div>
				<div class="home-booking-img" data-aos="fade-down" data-aos-duration="3000">
					<img class="img-fluid" src="{{url('public/images/24.png')}}" alt=""></img>
				</div>
			</div>
		</div>
	</div> --}}

	<div class="home-like" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300"data-aos-offset="0">
		<span><hr></span>
		<div class="like-img" >
			<img class="img-fluid" src="{{url('public/images/25.png')}}" alt=""></img>
		</div>
	</div>

	<div class="container">
		<div class="choose-us">
			<div class="title text-center">
				<h2>Why Choose Us</h2>
			</div>	
			<div class="row mt-5">
				@foreach($finalResult['features'] as $key => $features)
				<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="choose-card text-center" data-aos="fade-left" data-aos-duration="3000">
						<div class="choose-card-img">
							<img class="img-fluid" src="{{url('uploads/features/'.$features['image'])}}" alt=""></img>
						</div>
						<div class="choose-card-title">
							<h4>
								{{$features['title']}}
							</h4>
						</div>
						<div class="content">
							<p>{{$features['summary']}}</p>
						</div>
					</div>
				</div>	
				@endforeach	
				{{-- <div class="col-md-6 col-lg-6 col-xl-3">
					<div class="choose-card text-center" data-aos="fade-down" data-aos-duration="3000">
						<div class="choose-card-img">
							<img class="img-fluid" src="{{url('public/images/25.png')}}" alt=""></img>
						</div>
						<div class="choose-card-title">
							<h4>
								100%
								<span>Satisfaction</span>
							</h4>
						</div>
						<div class="content">
							<p>A money-back guarantee, also known as a satisfaction guarantee, if a buyer is not satisfied with a product or service.</p>
						</div>
					</div>
				</div>	
				<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="choose-card text-center" data-aos="fade-up" data-aos-duration="3000">
						<div class="choose-card-img">
							<img class="img-fluid" src="{{url('public/images/27.png')}}" alt=""></img>
						</div>
						<div class="choose-card-title">
							<h4>
								Eco-Friendly
								<span>Cleaning Products</span>
							</h4>
						</div>
						<div class="content">
							<p>Because indoor pollution rates are typically higher than outdoor pollution rates, we take dust removal seriously.</p>
						</div>
					</div>
				</div>	
				<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="choose-card text-center" data-aos="fade-right" data-aos-duration="3000">
						<div class="choose-card-img">
							<img class="img-fluid" src="{{url('public/images/26.png')}}" alt=""></img>
						</div>
						<div class="choose-card-title">
							<h4>
								Cost
								<span>Effective</span>
							</h4>
						</div>
						<div class="content">
							<p>Precision cleaning is required throughout such a broad range of modern industries that it might be more.</p>
						</div>
					</div>
				</div>	 --}}
			</div>
		</div>
	</div>

	<div class="container-fluid ma-t">
		<div class="row home-about">
			<div class="col-md-6 p-0">
				<div class="light-image" data-aos="fade-left" data-aos-duration="3000">
					<img class="img-fluid" src="{{url('uploads/about/images/'.$finalResult['abouts']['image'])}}" alt=""></img>
				</div>
			</div>
			<div class="col-md-6 light-bg" data-aos="fade-right" data-aos-duration="3000">
				<div class="title">
					<h2>About Us</h2>
				</div>
				<div class="content">
					<p>{{$finalResult['abouts']['summary']}}</p>
				</div>
				<div class="home-btn text-right">
					<a href="{{url('about_us')}}" class="btn btn1 mt-4">Read More</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 light-bg">
				<div class="row">
					<div class="offset-lg-3 col-lg-6 text-center" data-aos="fade-up" data-aos-duration="3000">
						<div class="light-bg-img">
							<img class="img-fluid" src="{{url('public/images/29.png')}}" alt=""></img>
						</div>
						<div class="title">
							<h2>Satisfaction Guarantee</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 p-0">
				<div class="light-image" data-aos="fade-down" data-aos-duration="3000">
					<img class="img-fluid" src="{{url('public/images/30.jpg')}}" alt=""></img>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row testimonial">
			<div class="col-md-6 p-0">
				<div class="testimonial-img" data-aos="fade-left" data-aos-duration="3000">
					<img class="img-fluid" src="{{url('public/images/31.jpg')}}" alt=""></img>
				</div>
			</div>
			<div class="col-md-6 ">
				<div class="testimonial-content" data-aos="fade-right" data-aos-duration="3000">
					<div class="testimonial-detail">
						<div class="title">
							<h2>What our <br>clients say?</h2>
						</div>
						<div class="owl-carousel owl-theme testimonial-carousel">
							@foreach($finalResult['testimonial'] as $key=>$t)
							<div class="item mb-4">
								<div class="testimonial-detail-img">
									<img class="img-fluid" src="{{url('uploads/thumbnail/'.$t['image'])}}" alt=""></img>
								</div>
								<div class="content mt-4">
									<p>{!!$t['description']!!}</p>
								</div>
								<div class="testimonial-rating mt-3">
									{{-- <div class="rating">
										<span><input type="radio" name="rating" id="str5" value="5"><label for="str5"><i class="fas fa-star"></i></label></span>
										<span><input type="radio" name="rating" id="str4" value="4"><label for="str4"><i class="fas fa-star"></i></label></span>
										<span><input type="radio" name="rating" id="str3" value="3"><label for="str3"><i class="fas fa-star"></i></label></span>
										<span><input type="radio" name="rating" id="str2" value="2"><label for="str2"><i class="fas fa-star"></i></label></span>
										<span><input type="radio" name="rating" id="str1" value="1"><label for="str1"><i class="fas fa-star"></i></label></span>
									</div> --}}
									<div class="author">
										<p>- {{$t['name']}}</p>
									</div>
								</div>
							</div>
							@endforeach
							{{-- <div class="item">
								<div class="testimonial-detail-img">
									<img class="img-fluid" src="{{url('public/images/33.jpg')}}" alt=""></img>
								</div>
								<div class="content mt-4">
									<p>"Dealing with Industriel on a day-to-day basis has proved to be very easy. We make a telephone call, look at the options available, and then let them get on with the job while we concentrate on our business. </p>
								</div>
								<div class="testimonial-rating mt-3">
									<div class="rating">
										<span><input type="radio" name="rating" id="str5" value="5"><label for="str5"><i class="fas fa-star"></i></label></span>
										<span><input type="radio" name="rating" id="str4" value="4"><label for="str4"><i class="fas fa-star"></i></label></span>
										<span><input type="radio" name="rating" id="str3" value="3"><label for="str3"><i class="fas fa-star"></i></label></span>
										<span><input type="radio" name="rating" id="str2" value="2"><label for="str2"><i class="fas fa-star"></i></label></span>
										<span><input type="radio" name="rating" id="str1" value="1"><label for="str1"><i class="fas fa-star"></i></label></span>
									</div>
									<div class="author">
										<p>- Roberta D. Frost</p>
									</div>
								</div>
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row testimonial founder">
			<div class="col-md-6 light-bg">
				<div class="testimonial-content founder-content" data-aos="fade-down" data-aos-duration="3000">
					<div class="testimonial-detail">
						<div class="title">
							<h2>{{$finalResult['ceo_message']['title']}}</h2>
						</div>
						<div class="testimonial-detail-img">
							<img class="img-fluid" src="{{url('uploads/ceo_message/'.$finalResult['ceo_message']['image'])}}" alt="">
						</div>
						<div class="content mt-4">
							<p>{{$finalResult['ceo_message']['summary']}}</p>
						</div>
						<div class="author mt-3">
							<p>- {{$finalResult['ceo_message']['name']}}, {{$finalResult['ceo_message']['designation']}}</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 p-0">
				<div class="testimonial-img" data-aos="fade-up" data-aos-duration="3000">
					<img class="img-fluid" src="{{url('public/images/35.jpg')}}" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="container blog ma-t">
		<div class="title text-center">
			<h2>
				Blog
				<span>news and tricks</span>
			</h2>
		</div>
		<div class="row mt-5">
			@foreach($finalResult['blogs'] as $blogs)
			<div class="col-md-4">
				<a href="{{url('blog_detail/'.$blogs['slug'])}}">
					<div class="blog-card" data-aos="flip-left" data-aos-easing="ease-out-cubic"data-aos-duration="2000">
						<div class="blog-card-img">
							<img class="img-fluid" src="{{url('uploads/thumbnail/'.$blogs['image'])}}" alt=""></img>
						</div>
						<div class="home-card-title">
							<h4>{{$blogs['title']}}</h4>
						</div>
						<span class="linear-border"></span>
						<div class="blog-date">
							<?php $date = Carbon\Carbon::parse($blogs['created_at'])->format('F d, Y') ?>
							<a href="{{url('blog_detail/'.$blogs['slug'])}}"><i class="far fa-calendar-alt pr-3"></i>{{$date}}</a>
						</div>
						<div class="content">
							<p>{{$blogs['summary']}}</p>
						</div>
						<a href="{{url('blog_detail/'.$blogs['slug'])}}" class="more">READ MORE</a>
					</div>
				</a>
			</div>
			@endforeach
			
		</div>
	</div>

	<div class="home-contact ma-t">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="content" data-aos="zoom-in-up" data-aos-duration="3000">
						<p>
							Free Call Back
							<span>We could vary snack and coffee breaks, change desk.</span>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form class="form-inline my-lg-0" data-aos="zoom-in-down" data-aos-duration="3000" action="{{url('store-free-call')}}" method="POST">
						@csrf
						<input class="form-control mr-sm-2" type="number" placeholder="Your phone number" name="phone_no">
						<button class="btn btn-outline-dark " type="submit">Send Now</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection