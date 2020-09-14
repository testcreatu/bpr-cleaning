@extends('home-master')



@section('content')

<div class="service-detail content-page">
	<div class="banner">
		<div class="banner-img" data-aos="zoom-in" data-aos-duration="3000">
			<img class="img-fluid" src="{{url('public/images/56.jpg')}}" alt=""></img>
		</div>
		<div class="page-title title" data-aos="fade-right" data-aos-duration="3000">
			<h2>Office Cleaning</h2>
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
						<li><a href="#">Office Cleaning</a></li>
						<li><a href="#">Commercial Cleaning</a></li>
						<li><a href="#">Hotel</a></li>
						<li><a href="#">Resturant</a></li>
						<li><a href="#">Boat Cleaning</a></li>
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
						<div class="choose-card text-center">
							<div class="choose-card-img">
								<img class="img-fluid" src="{{url('public/images/28-1.png')}}" alt=""></img>
							</div>
							<div class="choose-card-title">
								<h4>
									Over
									<span>250,000 cleans</span>
								</h4>
							</div>
						</div>
						<div class="choose-card text-center">
							<div class="choose-card-img">
								<img class="img-fluid" src="{{url('public/images/25-1.png')}}" alt=""></img>
							</div>
							<div class="choose-card-title">
								<h4>
									100%
									<span>Satisfaction</span>
								</h4>
							</div>
						</div>
						<div class="choose-card text-center">
							<div class="choose-card-img">
								<img class="img-fluid" src="{{url('public/images/27-1.png')}}" alt=""></img>
							</div>
							<div class="choose-card-title">
								<h4>
									Eco-Friendly
									<span>Cleaning Products</span>
								</h4>
							</div>
						</div>
						<div class="choose-card text-center">
							<div class="choose-card-img">
								<img class="img-fluid" src="{{url('public/images/26-1.png')}}" alt=""></img>
							</div>
							<div class="choose-card-title">
								<h4>
									Cost
									<span>Effective</span>
								</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="service-content">
					<div class="title-content"  data-aos="fade-down" data-aos-duration="3000">
						<p>The Cleaning Services Group has more than 15 years of office cleaning experience, working with multinational companies as well as smaller independent businesses.</p>
					</div>

					<div class="row mt-4">
						<div class="col-md-6"  data-aos="flip-up" data-aos-duration="3000">
							<div class="service-title mb-4">
								<h4>The importance of commercial office cleaning</h4>
							</div>
							<p>Did you know that:</p>
							<ul class="service-points">
								<li>The average employee loses nine working days a year to sickness, some of which may be attributed to a lack of workplace hygiene.</li>
								<li>A typical office keyboard can carry up to 7,500 bacteria at any given time.</li>
								<li>Viruses such as the flu can linger on unclean surfaces such as work desks or electronic equipment for 24 hours.</li>
								<li>60% of absences from work illnesses are contracted from dirty equipment in the office such as e-coli, staph and bacteria.</li>
								<li>With 65% of office workers sharing phones and computers, and with a whopping 25,127 germs per square inch found on just a telephone, employers need to take cleanliness seriously.</li>
							</ul>
						</div>
						<div class="col-md-6" data-aos="flip-down" data-aos-duration="3000">
							<div class="service-title mb-4">
								<h4>How clean offices can help workplace productivity</h4>
							</div>
							<ul class="service-points">
								<li>Increased focus: In a clean working environment, you are less likely to be distracted by cluttered objects, and that greater level of concentration leads to more and better work being done.</li>
								<li>Less time wasted: A lot of time can be squandered when searching for documents in a messy workspace. In cleaner, well-organised offices, paperwork can be tracked down easily and quickly.</li>
								<li>Less stress: A cluttered desk can result in you trying to focus on too many things at once, which lowers your stress threshold.</li>
								<li>Greater profitability: Instead of wasting time looking for documents, workers in a clean office get more work done, which helps with profitability in the long-term.</li>
							</ul>
						</div>
					</div>

					<div class="subscriber ma-t" data-aos="fade-left" data-aos-duration="3000">
						<div class="row">
							<div class="col-md-12">
								<div class="title">
									<h4>Subscribe for the Latest News:</h4>
								</div>
								<form class="subscribe-form mt-3">
									<div class="form-row">
										<div class="form-group col-md-4 ">
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
						</div>
					</div>

					<div class="row ma-t">
						<div class="col-md-6 recent-post" data-aos="flip-right" data-aos-duration="3000">
							<div class="service-title mb-4">
								<h4>Recent Post</h4>
							</div>
							<ul>
								<li>
									<a href="{{url('service_detail')}}">Get CleanEnergy for your (clean) home!</a>
									<span>April 11, 2020</span>
								</li>
								<li>
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
								</li>
							</ul>
						</div>
						<div class="col-md-6 recent-post-content" data-aos="flip-left" data-aos-duration="3000">
							<a href="{{url('service_detail')}}">
								<div class="blog-card">
									<div class="blog-card-img">
										<img class="img-fluid" src="{{url('public/images/57.jpg')}}" alt=""></img>
									</div>
									<div class="home-card-title">
										<h4>Get CleanEnergy for your (clean) home!</h4>
									</div>
									<span class="linear-border"></span>
									<div class="blog-date">
										<a href="{{url('service_detail')}}"><i class="far fa-calendar-alt pr-3"></i>March 21, 2020</a>
									</div>
									<div class="content">
										<p>Our industrial cleaning services are fully health & safety compliant. </p>
									</div>
									<a href="{{url('service_detail')}}" class="more">READ MORE</a>
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