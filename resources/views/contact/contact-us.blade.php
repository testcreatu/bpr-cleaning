@extends('home-master')

@section('seo_title')	
{{$finalContact['seo']['title']}}
@endsection

@section('seo_description')	
{{$finalContact['seo']['description']}}
@endsection

@section('seo_keyword')	
{{$finalContact['seo']['keywords']}}
@endsection

@section('content')

<div class="contact-us content-page">
	<div class="banner">
		<div class="banner-img" data-aos="zoom-in" data-aos-duration="3000">
			<img class="img-fluid" src="{{url('public/images/58.jpg')}}" alt=""></img>
		</div>
		<div class="page-title title" data-aos="fade-right" data-aos-duration="3000">
			<h2>Contact</h2>
		</div>
	</div>

	<div class="contact-content pa-tb">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="mission-title" data-aos="fade-down" data-aos-duration="3000">
						<h4>Get an emergency call or appoinment.</h4>
					</div>
					<form class="contact-form mt-5" action="{{url('store-contact')}}" method="POST">
						@csrf
						<div class="form-row">
							<div class="form-group col-md-6" data-aos="fade-right" data-aos-duration="3000">
								<input type="text" name="name" class="form-control" id="inputName" placeholder="Enter your name">
								<i class="fas fa-user"></i>
							</div>
							<div class="form-group col-md-6" data-aos="fade-right" data-aos-duration="2000">
								<input type="email" name="email" class="form-control" id="inputPhone" placeholder="Enter your email">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6" data-aos="fade-right" data-aos-duration="3000">
								<input type="text" name="subject" class="form-control" id="inputSubject" placeholder="Subject">
							</div>
							<div class="form-group col-md-6" data-aos="fade-right" data-aos-duration="3000">
								<input type="number" name="phone_no" class="form-control" id="inputPhone" placeholder="Phone number">
							</div>
							{{-- <div class="form-group col-md-6" data-aos="fade-right" data-aos-duration="2000">
								<select id="inputSubject" class="form-control">
									<option selected>Subject</option>
									<option>Commercial Cleaning</option>
									<option>Office Cleaning</option>
									<option>Hotel Cleaning</option>
									<option>Resturant Cleaning</option>
								</select>
							</div> --}}

						</div>
						<div class="form-row">
							<div class="form-group col-12" data-aos="fade-right" data-aos-duration="3000">
								<textarea class="form-control" type="text" name="message"></textarea>
							</div>
						</div>
						<div class="col-auto text-center mt-4" data-aos="fade-right" data-aos-duration="3000">
							<button class="btn btn1 mx-auto">Submit</button>
						</div>
					</form>
				</div>
				<div class="col-md-6">
					<div class="map" data-aos="fade-left" data-aos-duration="3000">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14132.058636846925!2d85.3450849!3d27.6859418!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6064967133397f28!2sCreatu%20Developers!5e0!3m2!1sen!2snp!4v1599718588450!5m2!1sen!2snp" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>

			<div class="contact-detail ma-t">
				<div class="row">
					<div class="col-md-6">
						<div class="contact-detail-img" data-aos="zoom-in" data-aos-duration="3000">
							<img class="img-fluid" src="{{url('public/images/45.jpg')}}" alt=""></img>
						</div>
					</div>
					<div class="col-md-6 contact-detail-content pa-tb"  data-aos="zoom-out" data-aos-duration="3000">
						<div class="service-title">
							<h4>BPR Cleaning Service Center</h4>
						</div>
						<p class="location">
							<i class="fas fa-map-marker-alt"></i>
							{{$finalHeader['contact']['address']}}
						</p>
						<div class="row mt-4">
							<div class="col-lg-6 mb-4">
								<div class="contact-media clearfix">
									<div class="icon float-left">
										<i class="fas fa-phone-volume"></i>
									</div>
									<div class="icon-body float-left">
										<h5>Get In Touch</h5>
										<a href="tel:{{$finalHeader['contact']['contact_no']}}">{{$finalHeader['contact']['contact_no']}}</a>
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
										<a href="mailto:{{$finalHeader['contact']['email']}}">{{$finalHeader['contact']['email']}}</a>
									</div>
								</div>
							</div>
						</div>
						<p>{{$finalHeader['about']['summary']}}</p>
					</div>
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
					<form class="subscribe-form mt-3" action="{{url('add-subscriptions')}}" method="POST">
						@csrf
						<div class="form-row">
							<div class="form-group col-md-4">
								<input type="text" class="form-control" name="name" placeholder="Name">
							</div>
							<div class="form-group col-md-4">
								<input type="email" class="form-control" name="email" placeholder="Email Address">
							</div>
							<div class="form-group col-md-4 text-center">
								<button type="submit" class="btn btn-outline-dark">Subscribe</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-3" data-aos="fade-left" data-aos-duration="3000">
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