@extends('home-master')



@section('content')

<div class="why-us content-page">
	<div class="banner">
		<div class="banner-img" data-aos="fade-up" data-aos-duration="3000">
			<img class="img-fluid" src="{{url('public/images/9.jpg')}}" alt=""></img>
		</div>
		<div class="page-title title" data-aos="fade-right" data-aos-duration="3000">
			<h2>Why Us</h2>
		</div>
	</div>

	<div class="container pa-tb">
		<div class="row">
			<div class="col-md-6">
				<div class="mission-title" data-aos="fade-left" data-aos-duration="3000">
					<h4>{{$finalWhyUs['why_us']['title']}}</h4>
				</div>
			</div>
			<div class="col-md-6 title-content" data-aos="fade-right" data-aos-duration="3000">
				<p>{!!$finalWhyUs['why_us']['summary']!!}</p>
			</div>
		</div>	
	</div>

	<div class="container-fluid">
		<div class="our-work-carousel owl-carousel owl-theme">
			@foreach($finalWhyUs['compliments'] as $compliments)
			<div class="item">
				<a href="{{url('why_us_subpage/'.$compliments['slug'])}}">
					<div class="our-work">
						<div class="work-img">
							<img class="img-fluid" src="{{url('uploads/thumbnail/'.$compliments['image'])}}"></img>
						</div>
						<div class="work-title">
							<h2>{{$compliments['title']}}</h2>
						</div>
					</div>
				</a>
			</div>
			@endforeach
			{{-- <div class="item">
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
			div
			class
			item
			a
			href
			url(
			why
			us
			subpage
			)
			div
			class
			our-work
			div
			class
			work-img
			img
			class
			img-fluid
			src
			url(
			public/images/50.jpg
			)
			/img
			/div
			div
			class
			work-title
			h2
			Clany
			Kitchen
			/h2
			/div
			/div
			/a
			/div
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
			</div> --}}
		</div>
	</div>

	<div class="container ma-t">
		<div class="row why-us">
			<div class="col-lg-7">
				<div class="mission-img" data-aos="zoom-out-up" data-aos-duration="3000">
					<img class="img-fluid" src="{{url('uploads/why_us/'.$finalWhyUs['why_us']['image'])}}" alt=""></img>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="mission-img-content" data-aos="zoom-out-down" data-aos-duration="3000">
					<div class="mission-title">
						<h4>Our Mission</h4>
					</div>
					<div class="content mt-4">
						<p>
							{!!$finalWhyUs['why_us']['description']!!}
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container ma-t">
		<div class="choose-us">
			<div class="title text-center"  data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-duration="3000">
				<h2>Why Choose Us</h2>
			</div>	
			<div class="row mt-5">
				@foreach($finalWhyUs['features'] as $feature)
				<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="choose-card text-center" data-aos="fade-right" data-aos-duration="3000">
						<div class="choose-card-img">
							<img class="img-fluid" src="{{url('uploads/features/'.$feature['image'])}}" alt="">
						</div>
						<div class="choose-card-title">
							<h4>
								{{$feature['title']}}
							</h4>
						</div>
						<div class="content">
							<p>
								{{$feature['summary']}}
							</p>
						</div>
					</div>
				</div>	
				@endforeach	
			{{-- 	<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="choose-card text-center" data-aos="fade-up" data-aos-duration="3000">
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
					<div class="choose-card text-center" data-aos="fade-down" data-aos-duration="3000">
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
					<div class="choose-card text-center" data-aos="fade-left" data-aos-duration="3000">
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
				</div>	 --}}
			</div>
		</div>
	</div>

	<div class="container-fluid ma-t">
		<div class="row">
			<div class="col-md-6 light-bg">
				<div class="row">
					<div class="offset-lg-1 col-lg-10 why-choose-us" data-aos="zoom-in-down" data-aos-duration="3000">
						<div class="title">
							<h2>Why choose us?</h2>
						</div>
						<div class="content mt-4">
							<p>{!!$finalWhyUs['why_us']['why_choose_us']!!}</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 p-0">
				<div class="light-image" data-aos="zoom-in-up" data-aos-duration="3000">
					<img class="img-fluid" src="{{url('uploads/why_us/'.$finalWhyUs['why_us']['why_choose_us_image'])}}" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid mission-form pa-tb">
		<div class="row">
			<div class="col-md-6" data-aos="zoom-in-up" data-aos-duration="3000">
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
			<div class="col-md-6" data-aos="zoom-in-down" data-aos-duration="3000">
				<div class="form-side-img">
					<img class="img-fluid" src="{{url('uploads/why_us/'.$finalWhyUs['why_us']['form_image'])}}" alt="">
				</div>
			</div>
		</div>
	</div>
</div>



@endsection