@extends('home-master')



@section('content')

<div class="why-us subpage content-page">
	<div class="container">
		<div class="subpage-banner" data-aos="zoom-in" data-aos-duration="3000">
			<div class="subpage-img">
				<img class="img-fluid" src="{{url('uploads/compliments/'.$finalCompliments['compliments']['image'])}}"></img>
			</div>
			<div class="subpage-overlay">
				<div class="subpage-overlay-img">
					<img class="img-fluid" src="{{url('public/images/59.png')}}"></img>
				</div>
			</div>
		</div>

		<div class="subpage-overlay-text text-center ma-t" data-aos="zoom-out" data-aos-duration="3000">
			<h5>
				{{$finalCompliments['compliments']['title']}}
				<?php $date = Carbon\Carbon::parse($finalCompliments['compliments']['created_at'])->format('F d, Y') ?>
				<span>{{$date}}</span>
			</h5>
		</div>

		<div class="row ma-t">
			<?php $measures = json_decode($finalCompliments['compliments']['measures']); ?>
			@foreach($measures as $m)
			<div class="col-md-4 mb-3">
				<div class="subpage-measures" data-aos="fade-right" data-aos-duration="3000">
					<div class="title">
						<h4>{{$m->title}}</h4>
					</div>
					<div class="content mt-2 ">
						<p>{{$m->summary}}</p>
					</div>
				</div>
			</div>
			@endforeach
			{{-- <div class="col-md-4 mb-3">
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
			</div> --}}
		</div>	
	</div>

	<div class="parallel-img" style=" background-image: url('{{url('uploads/compliments/'.$finalCompliments['compliments']['quote_image'])}}');">
		<div class="container">
			<div class="row">
				<div class="offset-md-6 col-md-6">
					<div class="mission-title">
						<h4>{{$finalCompliments['compliments']['quote']}}</h4>
					</div>
					<div class="content">
						<p>{{$finalCompliments['compliments']['sub_text']}}</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<?php $reasons = json_decode($finalCompliments['compliments']['reasons']); ?>
		<div class="row mission sub-page ma-t">
			@foreach($reasons as $key=>$r)
			@if($key % 2 == 0)
			<div class="col-lg-6">
				<div class="mission-img" data-aos="zoom-out" data-aos-duration="3000">
					<img class="img-fluid" src="{{url('uploads/compliments/'.$r->image)}}" alt="">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="mission-content sub-page-content" data-aos="fade-left" data-aos-duration="3000">
					<div class="mission-title text-center mt-3">
						<h4>{{$r->sub_title}}</h4>
					</div>
					<div class="content">
						<p>{{$r->sub_summary}}</p>
					</div>
				</div>
			</div>
		</div>
		@else
		<div class="row">
			<div class="col-lg-4">
				<div class="mission-content sub-page-content" data-aos="fade-right" data-aos-duration="3000">
					<div class="mission-title text-center mt-3">
						<h4>{{$r->sub_title}}</h4>
					</div>
					<div class="content">
						<p>{{$r->sub_summary}}</p>
					</div>
				</div>
			</div>
			<div class=" offset-lg-2 col-lg-6" data-aos="zoom-in" data-aos-duration="3000">
				<div class="mission-img">
					<img class="img-fluid" src="{{url('uploads/compliments/'.$r->image)}}" alt="">
				</div>
			</div>
		</div>
		@endif
		@endforeach
		
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
							@if($finalCompliments['contact']['fb_link'] != NULL)
							<a href="{{$finalCompliments['contact']['fb_link']}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
							@endif
							@if($finalCompliments['contact']['twitter_link'] != NULL)
							<a href="{{$finalCompliments['contact']['twitter_link']}}" target="_blank"><i class="fab fa-twitter"></i></a>
							@endif
							@if($finalCompliments['contact']['insta_link'] != NULL)
							<a href="{{$finalCompliments['contact']['insta_link']}}" target="_blank"><i class="fab fa-instagram"></i></a>
							@endif
							@if($finalCompliments['contact']['pininterest_link'] != NULL)
							<a href="{{$finalCompliments['contact']['pininterest_link']}}" target="_blank"><i class="fab fa-pinterest"></i></a>
							@endif
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
						@foreach($finalCompliments['more_compliments'] as $more)
						<div class="item">
							<a href="{{url('why_us_subpage/'.$more['slug'])}}">
								<div class="our-work">
									<div class="work-img">
										<img class="img-fluid" src="{{url('uploads/thumbnail/'.$more['image'])}}"></img>
									</div>
									<div class="work-title">
										<h2>{{$more['title']}}</h2>
									</div>
								</div>
							</a>
						</div>
						@endforeach
						{{-- <div class="item">
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
						</div> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




@endsection