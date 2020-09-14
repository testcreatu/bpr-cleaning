@extends('home-master')



@section('content')

<div class="booking-service content-page">
	<div class="container">
		<div class="title text-center pa-t" data-aos="fade-down" data-aos-duration="3000">
			<h2>
				Choose your service
				<span>Find the perfect plan for you — 100% Money Back Guarantee</span>
			</h2>
		</div>
		<div class="row booking-service-list ma-t ma-b">
			<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
				<div class="service-list-content" data-aos="fade-right" data-aos-duration="3000">
					<div class="service-list-img">
						<img class="img-fluid" src="{{url('public/images/39.jpg')}}"></img>
					</div>
					<div class="service-list-dtl">
						<div class="home-card-title">
							<h4>Commercial Cleaning</h4>
						</div>
						<ul class="service-list-option mt-4">
							<li>Domestic Cleaning </li>
							<li>Post Construction Cleaning</li>
							<li>Office Cleaning</li>
							<li>Upholstery Cleaning</li>
							<li>Glass Cleaning</li>
						</ul>
						<div class="service-btn text-center mt-3">
							<a href="{{url('booking_form')}}" class="btn btn1">Book Now</a>
							<a href="#" class="more mt-2 ">Or Learn More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
				<div class="service-list-content" data-aos="fade-right" data-aos-duration="2500">
					<div class="service-list-img">
						<img class="img-fluid" src="{{url('public/images/39.jpg')}}"></img>
					</div>
					<div class="service-list-dtl">
						<div class="home-card-title">
							<h4>Office Cleaning</h4>
						</div>
						<ul class="service-list-option mt-4">
							<li>Domestic Cleaning </li>
							<li>Commercial Cleaning</li>
							<li>Post Construction Cleaning</li>
							<li>Upholstery Cleaning</li>
							<li>Glass Cleaning</li>
						</ul>
						<div class="service-btn text-center mt-3">
							<a href="{{url('booking_form')}}" class="btn btn1">Book Now</a>
							<a href="#" class="more mt-2 ">Or Learn More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
				<div class="service-list-content" data-aos="fade-right" data-aos-duration="2000">
					<div class="service-list-img">
						<img class="img-fluid" src="{{url('public/images/39.jpg')}}"></img>
					</div>
					<div class="service-list-dtl">
						<div class="home-card-title">
							<h4>Hotel Cleaning</h4>
						</div>
						<ul class="service-list-option mt-4">
							<li>Post Construction Cleaning</li>
							<li>Office Cleaning</li>
							<li>Upholstery Cleaning</li>
							<li>Glass Cleaning</li>
						</ul>
						<div class="service-btn text-center mt-3">
							<a href="{{url('booking_form')}}" class="btn btn1">Book Now</a>
							<a href="#" class="more mt-2 ">Or Learn More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
				<div class="service-list-content" data-aos="fade-right" data-aos-duration="1500">
					<div class="service-list-img">
						<img class="img-fluid" src="{{url('public/images/39.jpg')}}"></img>
					</div>
					<div class="service-list-dtl">
						<div class="home-card-title">
							<h4>Resturant Cleaning</h4>
						</div>
						<ul class="service-list-option mt-4">
							<li>Post Construction Cleaning</li>
							<li>Office Cleaning</li>
							<li>Glass Cleaning</li>
						</ul>
						<div class="service-btn text-center mt-3">
							<a href="{{url('booking_form')}}" class="btn btn1">Book Now</a>
							<a href="#" class="more mt-2 ">Or Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection