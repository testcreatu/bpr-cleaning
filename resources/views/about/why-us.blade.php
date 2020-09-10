@extends('home-master')



@section('content')

<div class="why-us content-page">
	<div class="banner">
		<div class="banner-img">
			<img class="img-fluid" src="{{url('public/images/49.jpg')}}" alt=""></img>
		</div>
		<div class="page-title title">
			<h2>Why Us</h2>
		</div>
	</div>

	<div class="container pa-tb">
		<div class="row">
			<div class="col-md-6">
				<div class="mission-title">
					<h4>Our Passion Is Building Value, for You and Your Customers</h4>
				</div>
			</div>
			<div class="col-md-6 title-content">
				<p>Each and every day, our mission is to build value for your business by helping you decrease operating costs, reduce customer complaints, and improve your customer’s overall experience..</p>
			</div>
		</div>	
	</div>

	<div class="container-fluid pl-5 pr-5 ma-t">
		<div class="our-work-carousel owl-carousel owl-theme">
			<div class="item">
				<a href="{{url('why_us_subpage')}}">
					<div class="our-work">
						<div class="work-img">
							<img class="img-fluid" src="{{url('public/images/9.jpg')}}"></img>
						</div>
						<div class="work-title">
							<h2>Studio One</h2>
						</div>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="{{url('why_us_subpage')}}">
					<div class="our-work">
						<div class="work-img">
							<img class="img-fluid" src="{{url('public/images/40.jpg')}}"></img>
						</div>
						<div class="work-title">
							<h2>Drake House</h2>
						</div>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="{{url('why_us_subpage')}}">
					<div class="our-work">
						<div class="work-img">
							<img class="img-fluid" src="{{url('public/images/50.jpg')}}"></img>
						</div>
						<div class="work-title">
							<h2>Clany Kitchen</h2>
						</div>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="{{url('why_us_subpage')}}">
					<div class="our-work">
						<div class="work-img">
							<img class="img-fluid" src="{{url('public/images/51.jpg')}}"></img>
						</div>
						<div class="work-title">
							<h2>Crisp</h2>
						</div>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="{{url('why_us_subpage')}}">
					<div class="our-work">
						<div class="work-img">
							<img class="img-fluid" src="{{url('public/images/52.jpg')}}"></img>
						</div>
						<div class="work-title">
							<h2>Kitchen Story</h2>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div class="container ma-t">
		<div class="row why-us">
			<div class="col-md-7">
				<div class="mission-img">
					<img class="img-fluid" src="{{url('public/images/53.jpg')}}" alt=""></img>
				</div>
			</div>
			<div class="col-md-5">
				<div class="mission-img-content">
					<div class="mission-title">
						<h4>Our Mission</h4>
					</div>
					<div class="content mt-4">
						<p>We know what it takes to set ourselves apart and build loyalty: A proven business model, built on excellent customer service, which you can put to work immediately.</p>

						<p>Our exclusive territories avoid competition among franchisees, and our brick and mortar storefronts establish a strong local presence, separating you from mobile maid services.</p>

						<p>Don’t start from scratch. Adopt a business model with a proven track record and a ready-made network dedicated to your support.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container ma-t">
		<div class="choose-us">
			<div class="title text-center">
				<h2>Why Choose Us</h2>
			</div>	
			<div class="row mt-5">
				<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="choose-card text-center">
						<div class="choose-card-img">
							<img class="img-fluid" src="{{url('public/images/28.png')}}" alt="">
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
						<div class="choose-card-img">
							<img class="img-fluid" src="{{url('public/images/25.png')}}" alt="">
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
						<div class="choose-card-img">
							<img class="img-fluid" src="{{url('public/images/27.png')}}" alt="">
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
						<div class="choose-card-img">
							<img class="img-fluid" src="{{url('public/images/26.png')}}" alt="">
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
		<div class="row">
			<div class="col-md-6 light-bg">
				<div class="row">
					<div class="offset-lg-1 col-lg-10">
						<div class="title">
							<h2>Why choose us?</h2>
						</div>
						<div class="content mt-4">
							<p>Our professional home cleaning system combines efficient two-person cleaning teams, capable of cleaning three to four homes a day, with effective management and proven marketing procedures. Regardless of your experience, our systematic approach to training, cleaning, office management, and developing your customer base can give you the confidenc</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 p-0">
				<div class="light-image">
					<img class="img-fluid" src="{{url('public/images/40.jpg')}}" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid mission-form pa-tb">
		<div class="row">
			<div class="col-md-6">
				<div class="mission-form-content">
					<div class="mission-title">
						<h4>A clean that measures up.</h4>
					</div>
					<div class="title-content">
						<p>Submit your request online by filling out the form</p>
					</div>
					<form class="form-content-detail mt-4">
						<section class="mb-3">Fields marked with an <small>*</small> are required</section>
						<div class="form-row mb-3">
							<div class="form-group col-md-6">
								<input type="text-center" class="form-control" id="inputName" placeholder="Name">
							</div>
							<div class="form-group col-md-6">
								<input type="nummber" class="form-control" id="inputPhone" placeholder="Company">
							</div>
						</div>
						<div class="form-row mb-3">
							<div class="form-group col-md-6">
								<input type="email" class="form-control" id="inputEmail4" placeholder="Email Address">
							</div>
							<div class="form-group col-md-6">
								<input type="nummber" class="form-control" id="inputPhone" placeholder="Phone No">
							</div>
						</div>
						<div class="form-group">
							<label>Message <small>*</small></label>
							<textarea class="form-control col-md-12" placeholder="How can we help"></textarea>
						</div>
						<button type="submit" class="btn btn1">Submit</button>
					</form>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-side-img">
					<img class="img-fluid" src="{{url('public/images/31.jpg')}}" alt="">
				</div>
			</div>
		</div>
	</div>
</div>



@endsection