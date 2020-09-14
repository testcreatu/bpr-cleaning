@extends('home-master')



@section('content')

<div class="why-us subpage content-page">
	<div class="container">
		<div class="subpage-banner" data-aos="zoom-in" data-aos-duration="3000">
			<div class="subpage-img">
				<img class="img-fluid" src="{{url('public/images/9.jpg')}}"></img>
			</div>
			<div class="subpage-overlay">
				<div class="subpage-overlay-img">
					<img class="img-fluid" src="{{url('public/images/59.png')}}"></img>
				</div>
			</div>
		</div>

		<div class="subpage-overlay-text text-center ma-t" data-aos="zoom-out" data-aos-duration="3000">
			<h5>
				Eco
				<span>January 1, 2017 — Studio One</span>
			</h5>
		</div>

		<div class="row ma-t">
			<div class="col-md-4 mb-3">
				<div class="subpage-measures" data-aos="fade-right" data-aos-duration="3000">
					<div class="title">
						<h4>Health and safety</h4>
					</div>
					<div class="content mt-2 ">
						<p>Health and safety managers in a hospital decided that they needed to replace an old floor in a kitchen area following a number of slipping accidents.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<div class="subpage-measures" data-aos="fade-up" data-aos-duration="3000">
					<div class="title">
						<h4>New bespoke epoxy</h4>
					</div>
					<div class="content mt-2 ">
						<p>They decided on a new bespoke epoxy based floor with specialist anti slip surface. The cleaners were amazed to see, almost immediately.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<div class="subpage-measures" data-aos="fade-left" data-aos-duration="3000">
					<div class="title">
						<h4>Keeping the floor clean.</h4>
					</div>
					<div class="content mt-2 ">
						<p>The floor was duly laid and some time afterwards the flooring supplier was asked to visit the site because they were having problems keeping the floor clean.</p>
					</div>
				</div>
			</div>
		</div>	
	</div>

	<div class="parallel-img">
		<div class="container">
			<div class="row">
				<div class="offset-md-6 col-md-6">
					<div class="mission-title">
						<h4>You Should Know</h4>
					</div>
					<div class="content">
						<p>All this could have been avoided if someone had bothered to tell the cleaners about the appropriate cleaning regime for the new floor!</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row mission sub-page ma-t">
			<div class="col-lg-6">
				<div class="mission-img" data-aos="zoom-out" data-aos-duration="3000">
					<img class="img-fluid" src="{{url('public/images/34.jpg')}}" alt="">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="mission-content sub-page-content" data-aos="fade-left" data-aos-duration="3000">
					<div class="mission-title text-center mt-3">
						<h4>The Challenege</h4>
					</div>
					<div class="content">
						<p>The owner/operator of a high volume restaurant stepped away from the day-to-day activities of running the restaurant. After a few online reviews about the cleanliness of the restaurant, the owner needed to check things out. The owner was not thoroughly satisfied with the performance of the previous cleaning vendor. Among other things, the state of the floors and equipment use to clean said floors were unsatisfactory. Over time, the grout lines and floors became intolerable.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="mission-content sub-page-content" data-aos="fade-right" data-aos-duration="3000">
					<div class="mission-title text-center mt-3">
						<h4>The Solution</h4>
					</div>
					<div class="content">
						<p>Excel Cleaning Service was called in for a quote. After the walk thru the client received a list of chemicals and equipment used on their behalf. Very impressed by the aforementioned listing, the client felt assured and comfortable with the capabilities of Excel Cleaning Services.</p>
					</div>
				</div>
			</div>
			<div class=" offset-lg-2 col-lg-6" data-aos="zoom-in" data-aos-duration="3000">
				<div class="mission-img">
					<img class="img-fluid" src="{{url('public/images/45.jpg')}}" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="subscriber">
		<div class="container">
			<div class="row">
				<div class="col-md-9" data-aos="fade-right" data-aos-duration="3000">
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
					<div class="subscribe-link" data-aos="fade-left" data-aos-duration="3000">
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

	<div class="related-story">
		<div class="container">
			<div class="mission-title text-center">
				<h4>More Cases</h4>
			</div>
			<div class="row mt-4">
				<div class="col-12">
					<div class="more-cases-carousel owl-carousel owl-theme">
						<div class="item">
							<a href="{{url('why_us_subpage')}}">
								<div class="blog-card" data-aos="fade-right" data-aos-duration="3000">
									<div class="blog-card-img">
										<img class="img-fluid" src="{{url('public/images/33.jpg')}}" alt=""></img>
									</div>
									<div class="home-card-title">
										<h4>Kitchen Story</h4>
									</div>
									<span class="linear-border"></span>
									<div class="content">
										<p>Regular warehouse cleaning leads to greater operational efficiency.</p>
									</div>
									<a href="{{url('why_us_subpage')}}" class="more">READ MORE</a>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="{{url('why_us_subpage')}}">
								<div class="blog-card" data-aos="fade-down" data-aos-duration="3000">
									<div class="blog-card-img">
										<img class="img-fluid" src="{{url('public/images/50.jpg')}}" alt=""></img>
									</div>
									<div class="home-card-title">
										<h4>Clany Kitchen </h4>
									</div>
									<span class="linear-border"></span>
									<div class="content">
										<p>Cleanliness is of paramount importance to a company's brand persona and client perception.</p>
									</div>
									<a href="{{url('why_us_subpage')}}" class="more">READ MORE</a>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="{{url('why_us_subpage')}}">
								<div class="blog-card" data-aos="fade-left" data-aos-duration="3000">
									<div class="blog-card-img">
										<img class="img-fluid" src="{{url('public/images/10.jpg')}}" alt=""></img>
									</div>
									<div class="home-card-title">
										<h4>Crisp</h4>
									</div>
									<span class="linear-border"></span>
									<div class="content">
										<p>We have an environmentally friendly approach to cleaning. </p>
									</div>
									<a href="{{url('why_us_subpage')}}" class="more">READ MORE</a>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="{{url('why_us_subpage')}}">
								<div class="blog-card">
									<div class="blog-card-img">
										<img class="img-fluid" src="{{url('public/images/37.jpg')}}" alt=""></img>
									</div>
									<div class="home-card-title">
										<h4>larity</h4>
									</div>
									<span class="linear-border"></span>
									<div class="content">
										<p>Our industrial cleaning services are fully health & safety compliant.</p>
									</div>
									<a href="{{url('why_us_subpage')}}" class="more">READ MORE</a>
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