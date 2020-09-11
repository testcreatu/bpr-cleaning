@extends('home-master')



@section('content')

<div class="contact-us content-page">
	<div class="banner">
		<div class="banner-img">
			<img class="img-fluid" src="{{url('public/images/58.jpg')}}" alt=""></img>
		</div>
		<div class="page-title title">
			<h2>Contact</h2>
		</div>
	</div>

	<div class="contact-content pa-tb">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="mission-title">
						<h4>Get an emergency call or appoinment.</h4>
					</div>
					<form class="contact-form mt-5">
						<div class="form-row">
							<div class="form-group col-md-6">
								<input type="text-center" class="form-control" id="inputName" placeholder="Enter your name">
								<i class="fas fa-user"></i>
							</div>
							<div class="form-group col-md-6">
								<input type="email" class="form-control" id="inputPhone" placeholder="Enter your email">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<input type="nummber" class="form-control" id="inputPhone" placeholder="Phone number">
							</div>
							<div class="form-group col-md-6">
								<select id="inputSubject" class="form-control">
									<option selected>Subject</option>
									<option>Commercial Cleaning</option>
									<option>Office Cleaning</option>
									<option>Hotel Cleaning</option>
									<option>Resturant Cleaning</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-12">
								<textarea class="form-control"></textarea>
							</div>
						</div>
						<div class="col-auto text-center mt-4">
							<button class="btn btn1 mx-auto">Submit</button>
						</div>
					</form>
				</div>
				<div class="col-md-6">
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14132.058636846925!2d85.3450849!3d27.6859418!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6064967133397f28!2sCreatu%20Developers!5e0!3m2!1sen!2snp!4v1599718588450!5m2!1sen!2snp" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>

			<div class="contact-detail ma-t">
				<div class="row">
					<div class="col-md-6">
						<div class="contact-detail-img">
							<img class="img-fluid" src="{{url('public/images/45.jpg')}}" alt=""></img>
						</div>
					</div>
					<div class="col-md-6 contact-detail-content pa-tb">
						<div class="service-title">
							<h4>BPR Cleaning Service Center</h4>
						</div>
						<p class="location">
							<i class="fas fa-map-marker-alt"></i>
							Shop No.1,Underlying Block H Triq Ta'Mezzi, Naxxar, Malta
						</p>
						<div class="row mt-4">
							<div class="col-lg-6 mb-4">
								<div class="contact-media clearfix">
									<div class="icon float-left">
										<i class="fas fa-phone-volume"></i>
									</div>
									<div class="icon-body float-left">
										<h5>Get In Touch</h5>
										<a href="tel:777-877-89">777-877-89</a>
									</div>
								</div>
							</div>
							<div class="col-lg-6 mb-4">
								<div class="contact-media clearfix">
									<div class="icon float-left">
										<i class="fal fa-envelope"></i>
									</div>
									<div class="icon-body float-left">
										<h5>Mail Us</h5>
										<a href="mailto:info@bprcleaning.com">info@bprcleaning.com</a>
									</div>
								</div>
							</div>
						</div>
						<p>Objectively productivate cutting-edge channels without cross functional markets.
                                        Objectively brand enterprise-wide internal.</p>
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
								<button type="submit" class="btn btn-outline-dark">Subscribe</button>
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
					</div>
				</div>
			</div>

		</div>
	</div>
</div>





@endsection