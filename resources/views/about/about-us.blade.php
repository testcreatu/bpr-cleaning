@extends('home-master')

@section('seo_title')	
{{$finalAbout['seo']['title']}}
@endsection

@section('seo_description')	
{{$finalAbout['seo']['description']}}
@endsection

@section('seo_keyword')	
{{$finalAbout['seo']['keywords']}}
@endsection


@section('content')

<div class="about-us content-page">
	<div class="banner">
		<div class="banner-img" data-aos="fade-up" data-aos-duration="3000">
			<img class="img-fluid" src="{{url('uploads/about/images/'.$finalAbout['about']['background_image'])}}" alt=""></img>
		</div>
		<div class="page-title title" data-aos="fade-right" data-aos-duration="3000">
			<h2>About</h2>
		</div>
	</div>

	<div class="container">
		<div class="row ma-t">
			<div class="offset-lg-1 col-lg-10 text-center title-content">
				<div class="title" data-aos="fade-right" data-aos-duration="3000">
					<h2>{{$finalAbout['about']['quote']}}</h2>
				</div>
				<p class="mt-4" data-aos="fade-left" data-aos-duration="3000">{{$finalAbout['about']['sub_text']}}</p>
			</div>
		</div>

		<div class="row mission mt-5">
			<div class="col-lg-5">
				<div class="mission-img" data-aos="zoom-in-down" data-aos-duration="3000">
					<img class="img-fluid" src="{{url('uploads/about/images/'.$finalAbout['about']['image'])}}" alt=""></img>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="mission-content" data-aos="zoom-in-up" data-aos-duration="3000">
					<div class="mission-icon text-center">
						<img class="img-fluid" src="{{url('public/images/28.png')}}" alt=""></img>
					</div>
					<div class="mission-title text-center mt-3">
						<h4>{{$finalAbout['about']['title']}}</h4>
					</div>
					<div class="content">
						<p>{!!$finalAbout['about']['description']!!}</p>
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
					<div class="title"data-aos="fade-right" data-aos-duration="3000">
						<h4>Subscribe for the Latest News:</h4>
					</div>
					<form class="subscribe-form mt-3"data-aos="fade-left" data-aos-duration="3000" action="{{url('add-subscriptions')}}" method="POST">
						@csrf
						<div class="form-row">
							<div class="form-group col-md-4">
								<input type="text" name="name" class="form-control" placeholder="Name">
							</div>
							<div class="form-group col-md-4">
								<input type="email" name="email" class="form-control" placeholder="Email Address">
							</div>
							<div class="form-group col-md-4 text-center">
								<button type="submit" class="btn btn1">Subscribe</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-3">
					<div class="subscribe-link"data-aos="zoom-out" data-aos-duration="3000">
						<p>
							{{$finalHeader['contact']['address']}}
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
		<div class="mission-title text-center mt-3" data-aos="fade-down" data-aos-duration="3000">
			<h4>Our Partners</h4>
		</div>
		<div class="row mt-5" data-aos="fade-up" data-aos-duration="3000">
			@foreach($finalAbout['partners'] as $p)
			<div class="col-md-6 col-lg-6 col-xl-3">
				<a href="{{$p['url']}}">
					<div class="partner-logo text-center">
						<img class="img-fluid" src="{{url('uploads/partners/'.$p['logo_image'])}}"></img>
					</div>
				</a>
			</div>
			@endforeach
			{{-- <div class="col-md-6 col-lg-6 col-xl-3">
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
			</div> --}}
		</div>
	</div>

	<div class="choose-us our-guarante ma-t">
		<div class="container">
			<div class="mission-title text-center" data-aos="fade-left" data-aos-duration="3000">
				<h4>Our Guarantee</h4>
			</div>	
			<div class="row mt-5">
				@foreach($finalAbout['features'] as $f)
				<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="choose-card text-center" data-aos="fade-right" data-aos-duration="3000">
						<div class="gaurante-box">
							<div class="choose-card-img">
								<img class="img-fluid" src="{{url('uploads/features/'.$f['image'])}}" alt=""></img>
							</div>
						</div>
						<div class="choose-card-title">
							<h4>
								{{-- Over
									<span>250,000 cleans</span> --}}
									{{$f['title']}}
								</h4>
							</div>
							<div class="content">
								<p>{{$f['summary']}}</p>
							</div>
						</div>
					</div>	
					@endforeach	
				{{-- <div class="col-md-6 col-lg-6 col-xl-3">
					<div class="choose-card text-center" data-aos="fade-right" data-aos-duration="2000">
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
					<div class="choose-card text-center" data-aos="fade-right" data-aos-duration="1500">
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
					<div class="choose-card text-center" data-aos="fade-right" data-aos-duration="1000">
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
				</div> --}}	
			</div>
		</div>
	</div>
</div>



@endsection