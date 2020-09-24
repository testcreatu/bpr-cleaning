@extends('home-master')



@section('content')

<div class="home">
	<div id="mainCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			@foreach($finalResult['carousel'] as $key=>$c)
			<div class="carousel-item {{$key == 0 ?'active':''}}">
				<div class="home-banner"  data-aos="fade-up"> 
					<div class="img-banner">
						<div class="home-banner-img">
							<img class="img-fluid" src="{{url('uploads/carousel/'.$c['image'])}}" alt=""></img>
						</div>
						<div class="home-banner-bg">
							<img class="img-fluid" src="{{url('public/images/1.svg')}}" alt=""></img>
						</div>
					</div>
					<div class="banner-msg">
						<div class="content">
							<div class="banner-msg-img">
								<img class="img-fluid" src="{{url('public/images/5.1.png')}}" alt=""></img>
							</div>
							<div class="banner-msg-content">
								<div class="msg-content">
									<div class="msg-detail">
										<span>NEW CLIENT SUMMER OFFER</span>
										<h4>Get Out & Have Fun</h4>
										<h5>We Clean for You</h5>
										<p>Let us handle the dirty work while you enjoy your free time.</p>
									</div>
									<a href="{{url('cleaning_services')}}" class="btn btn1">See Our Offer</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <img src="{{url('public/images/3.png')}}" class="d-block w-100" alt="..."> -->
			</div>
			@endforeach

			{{-- <div class="carousel-item">
				<div class="home-banner"  data-aos="fade-up"> 
					<div class="img-banner">
						<div class="home-banner-img">
							<img class="img-fluid" src="{{url('public/images/9.jpg')}}" alt=""></img>
						</div>
						<div class="home-banner-bg">
							<img class="img-fluid" src="{{url('public/images/1.svg')}}" alt=""></img>
						</div>
					</div>
					<div class="banner-msg">
						<div class="content">
							<div class="banner-msg-img">
								<img class="img-fluid" src="{{url('public/images/5.1.png')}}" alt=""></img>
							</div>
							<div class="banner-msg-content">
								<div class="msg-content">
									<div class="msg-detail">
										<span>NEW CLIENT SUMMER OFFER</span>
										<h4>Get Out & Have Fun</h4>
										<h5>We Clean for You</h5>
										<p>Let us handle the dirty work while you enjoy your free time.</p>
									</div>
									<a href="{{url('cleaning_services')}}" class="btn btn1">See Our Offer</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="home-banner"  data-aos="fade-up"> 
					<div class="img-banner">
						<div class="home-banner-img">
							<img class="img-fluid" src="{{url('public/images/10.jpg')}}" alt=""></img>
						</div>
						<div class="home-banner-bg">
							<img class="img-fluid" src="{{url('public/images/1.svg')}}" alt=""></img>
						</div>
					</div>
					<div class="banner-msg">
						<div class="content">
							<div class="banner-msg-img">
								<img class="img-fluid" src="{{url('public/images/5.1.png')}}" alt=""></img>
							</div>
							<div class="banner-msg-content">
								<div class="msg-content">
									<div class="msg-detail">
										<span>NEW CLIENT SUMMER OFFER</span>
										<h4>Get Out & Have Fun</h4>
										<h5>We Clean for You</h5>
										<p>Let us handle the dirty work while you enjoy your free time.</p>
									</div>
									<a href="{{url('cleaning_services')}}" class="btn btn1">See Our Offer</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> --}}
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
	<!-- <div class="home-banner"  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="3000"> 
		<div class="img-banner">
			<div class="home-banner-img">
				<img class="img-fluid" src="{{url('public/images/3.png')}}" alt=""></img>
			</div>
			<div class="home-banner-bg">
				<img class="img-fluid" src="{{url('public/images/1.svg')}}" alt=""></img>
			</div>
		</div>
		<div class="banner-msg">
			<div class="content">
				<div class="banner-msg-img">
					<img class="img-fluid" src="{{url('public/images/5.1.png')}}" alt=""></img>
				</div>
				<div class="banner-msg-content">
					<div class="msg-content">
						<div class="msg-detail">
							<span>NEW CLIENT SUMMER OFFER</span>
							<h4>Get Out & Have Fun</h4>
							<h5>We Clean for You</h5>
							<p>Let us handle the dirty work while you enjoy your free time.</p>
						</div>
						<a href="{{url('cleaning_services')}}" class="btn btn1">See Our Offer</a>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<div class="corousel-1">
		<div class="container">
			<div class="title carousel-title text-center "  data-aos="fade-up" data-aos-duration="3000"> 
				<h2>
					House
					<span>cleaning</span>
				</h2>
			</div>
			<div id="carouselHome" class="carousel slide home-carousel carousel-fade" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="home-carousel-title">
							<div class="carousel-title-content" data-aos="fade-right" data-aos-duration="3000">
								<h5>Living Room</h5>
								<p>Take the time to review what goes into a living room intense cleanup.</p>
							</div>
						</div>
						<div class="home-carousel-img">
							<img src="{{url('public/images/9.jpg')}}" class="d-block w-100" alt="...">
						</div>
						
					</div>
					<div class="carousel-item">
						<div class="home-carousel-title" >
							<div class="carousel-title-content" data-aos="fade-right" data-aos-duration="3000">
								<h5>Bathroom</h5>
								<p>Cleaning the bathroom is not as difficult or time-consuming as you might think!</p>
							</div>
						</div>
						<div class="home-carousel-img">
							<img src="{{url('public/images/10.jpg')}}" class="d-block w-100" alt="...">
						</div>
					</div>
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
		</div>

		<div class="home-booking ma-t">
			<div class="container">
				<div class="row">
					<div class="col-6 col-md-6 text-center" data-aos="fade-left" data-aos-duration="3000">
						<p>
							$10/m
							<span>*Start Price</span>
						</p>
					</div>
					<div class="col-6 col-md-6 text-center">
						<a href="{{url('cleaning_services')}}" class="btn btn1">Book Now</a>
					</div>
				</div>
				<div class="home-booking-img" data-aos="fade-down" data-aos-duration="3000">
					<img class="img-fluid" src="{{url('public/images/17.png')}}" alt=""></img>
				</div>
			</div>
		</div>
	</div>

	<div class="carousel-2">
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
	</div>

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
				<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="choose-card text-center" data-aos="fade-left" data-aos-duration="3000">
						<div class="choose-card-img">
							<img class="img-fluid" src="{{url('public/images/28.png')}}" alt=""></img>
						</div>
						<div class="choose-card-title">
							<h4>
								Over
								<span>250,000 cleans</span>
							</h4>
						</div>
						<div class="content">
							<p>Our microfiber cloths, which capture dust and dirt rather than move it around, last longer than traditional cotton.</p>
						</div>
					</div>
				</div>		
				<div class="col-md-6 col-lg-6 col-xl-3">
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
				</div>	
			</div>
		</div>
	</div>

	<div class="container-fluid ma-t">
		<div class="row home-about">
			<div class="col-md-6 p-0">
				<div class="light-image" data-aos="fade-left" data-aos-duration="3000">
					<img class="img-fluid" src="{{url('public/images/12.jpg')}}" alt=""></img>
				</div>
			</div>
			<div class="col-md-6 light-bg" data-aos="fade-right" data-aos-duration="3000">
				<div class="title">
					<h2>About Us</h2>
				</div>
				<div class="content">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisl tincidunt eget nullam non nisi est sit. Lorem mollis aliquam ut porttitor leo a diam sollicitudin. Aliquet bibendum enim facilisis gravida neque convallis a cras. Pharetra magna ac placerat vestibulum. Magna fermentum iaculis eu non diam phasellus. At imperdiet dui accumsan sit amet nulla facilisi morbi. Tempor id eu nisl nunc mi. Aliquam ut porttitor leo a diam sollicitudin tempor id eu. Donec ac odio tempor orci.</p>
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
							<div class="item">
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
							</div>
							<div class="item">
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
							</div>
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
							<h2>Keep Your<br>Time & Money</h2>
						</div>
						<div class="testimonial-detail-img">
							<img class="img-fluid" src="{{url('public/images/33.jpg')}}" alt=""></img>
						</div>
						<div class="content mt-4">
							<p>“I hate wasting time or money and that happens all the time for no good reason, and then people save money by skimping on the important things.”</p>
						</div>
						<div class="author mt-3">
							<p>- John Doe, CEO</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 p-0">
				<div class="testimonial-img" data-aos="fade-up" data-aos-duration="3000">
					<img class="img-fluid" src="{{url('public/images/35.jpg')}}" alt=""></img>
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
			<div class="col-md-4">
				<a href="{{url('blog_detail')}}">
					<div class="blog-card" data-aos="flip-left" data-aos-easing="ease-out-cubic"data-aos-duration="2000">
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
			<div class="col-md-4 mb-4">
				<a href="{{url('blog_detail')}}">
					<div class="blog-card"  data-aos="flip-left" data-aos-easing="ease-out-cubic"data-aos-duration="2500">
						<div class="blog-card-img">
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
			<div class="col-md-4 mb-4">
				<a href="{{url('blog_detail')}}">
					<div class="blog-card"  data-aos="flip-left" data-aos-easing="ease-out-cubic"data-aos-duration="3000">
						<div class="blog-card-img">
							<img class="img-fluid" src="{{url('public/images/38.jpg')}}" alt=""></img>
						</div>
						<div class="home-card-title">
							<h4>Carpet cleaning to remove flea infestation</h4>
						</div>
						<span class="linear-border"></span>
						<div class="blog-date">
							<a href="{{url('blog_detail')}}"><i class="far fa-calendar-alt pr-3"></i>March 21, 2020</a>
						</div>
						<div class="content">
							<p>Our industrial cleaning services are fully health & safety compliant. </p>
						</div>
						<a href="{{url('blog_detail')}}" class="more">READ MORE</a>
					</div>
				</a>
			</div>
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
					<form class="form-inline my-lg-0" data-aos="zoom-in-down" data-aos-duration="3000">
						<input class="form-control mr-sm-2" type="text" placeholder="Your phone number">
						<button class="btn btn-outline-dark " type="submit">Send Now</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection