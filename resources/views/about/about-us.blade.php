@extends('home-master')



@section('content')

<div class="about-us content-page">
	<div class="banner">
		<div class="banner-img">
			<img class="img-fluid" src="{{url('public/images/9.jpg')}}" alt=""></img>
		</div>
		<div class="page-title title">
			<h2>About</h2>
		</div>
	</div>

	<div class="container">
		<div class="row ma-t">
			<div class="offset-lg-1 col-lg-10 text-center title-content">
				<div class="title">
					<h2>Doing business since 1992</h2>
				</div>
				<p class="mt-4">Our Father 23 years ago started Clany Services with two vision, Deliver the best quality of service possible and the most outstanding customer service, we still driven by his vision.</p>
			</div>
		</div>

		<div class="row mission mt-5">
			<div class="col-lg-5">
				<div class="mission-img">
					<img class="img-fluid" src="{{url('public/images/40.jpg')}}" alt=""></img>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="mission-content">
					<div class="mission-icon text-center">
						<img class="img-fluid" src="{{url('public/images/28.png')}}" alt=""></img>
					</div>
					<div class="mission-title text-center mt-3">
						<h4>Our mission is clear</h4>
					</div>
					<div class="content">
						<p>Cross a major chore off your to-do list by letting us take care of the house cleaning. Then savor the pleasure of knowing your whole home has been cleaned by a professional team member(s) you can trust.</p>

						<p>Our cleaning services are thorough, consistent and customized. If you would like to request a special service, change your cleaning schedule, or skip an area in your home, just let us know! We are happy to fulfill every request in order to exceed your expectations.</p>

						<p>Clany home cleaning services are available weekly, every other week, monthly or one-time. On every visit, your Clany team dusts, vacuums, washes and sanitizes each room. Using our equipment and specially formulated products, they clean from left to right, top to bottom, so no detail is overlooked.</p>

						<hr>

						<p>
						<span>All Rooms</span>
						Dust picture frames, knickknacks, ceiling fans, lamps, furniture, woodwork, shelves and baseboards. Remove cobwebs. Vacuum carpets. Wash all floors and dry wood floors. Vacuum furniture, including under any cushions. Empty and clean ashtrays and wastebaskets.</p>

						<p>
						<span>Kitchen</span>
						Clean appliances, counters, cabinets, tables and chairs. Clean, scrub and sanitize sinks. Clean and sanitize countertops and backsplashes. Clean the range top and refrigerator top and exterior. Clean microwave oven inside and out. Wash floors.</p>

						<p>
						<span>Bathrooms</span>
						Clean, scrub and sanitize showers, bathtubs and sinks. Clean and sanitize vanities, backsplashes and toilets. Clean mirrors. Polish chrome. Wash floors and tile walls. Deodorize.</p>
					</div>
					<div class="mission-btn text-center mt-3">
						<a href="{{url('why_us')}}" class="btn btn1">Join in Conversion</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="subscriber">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="title">
						<h4>Subscribe for the Latest News:</h4>
					</div>
					<form class="subscribe-form mt-3">
						<div class="form-row">
							<div class="form-group col-md-4">
								<input type="text" class="form-control" placeholder="Name">
							</div>
							<div class="form-group col-md-4">
								<input type="email" class="form-control" placeholder="Email Address">
							</div>
							<div class="form-group col-md-4 text-center">
								<button type="submit" class="btn btn1">Subscribe</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-3">
					<div class="subscribe-link">
						<p>
							<span>Malta</span>
							Underlying Block H Triq Ta'Mezzi,
							Naxxar,
						</p>
						<div class="header-icon">
							<a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
							<a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
							<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
							<a href="#" target="_blank"><i class="fab fa-pinterest"></i></a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="container ma-t">
		<div class="mission-title text-center mt-3">
			<h4>Our Partners</h4>
		</div>
		<div class="row mt-5">
			<div class="col-md-6 col-lg-6 col-xl-3">
				<div class="partner-logo text-center">
					<img class="img-fluid" src="{{url('public/images/41.svg')}}"></img>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-3">
				<div class="partner-logo text-center">
					<img class="img-fluid" src="{{url('public/images/42.svg')}}"></img>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-3">
				<div class="partner-logo text-center">
					<img class="img-fluid" src="{{url('public/images/43.svg')}}"></img>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-3">
				<div class="partner-logo text-center">
					<img class="img-fluid" src="{{url('public/images/44.svg')}}"></img>
				</div>
			</div>
		</div>
	</div>

	<div class="choose-us our-guarante ma-t">
		<div class="container">
			<div class="mission-title text-center">
				<h4>Our Guarantee</h4>
			</div>	
			<div class="row mt-5">
				<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="choose-card text-center">
						<div class="gaurante-box">
							<div class="choose-card-img">
								<img class="img-fluid" src="{{url('public/images/28.png')}}" alt=""></img>
							</div>
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
					<div class="choose-card text-center">
						<div class="gaurante-box">
							<div class="choose-card-img">
								<img class="img-fluid" src="{{url('public/images/25.png')}}" alt=""></img>
							</div>
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
					<div class="choose-card text-center">
						<div class="gaurante-box">
							<div class="choose-card-img">
								<img class="img-fluid" src="{{url('public/images/27.png')}}" alt=""></img>
							</div>
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
					<div class="choose-card text-center">
						<div class="gaurante-box">
							<div class="choose-card-img">
								<img class="img-fluid" src="{{url('public/images/26.png')}}" alt=""></img>
							</div>
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
</div>



@endsection