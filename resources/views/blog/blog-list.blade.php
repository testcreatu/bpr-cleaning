@extends('home-master')



@section('content')

<div class="content-page">
	<div class="banner pa-tb">
		<div class="container">	
			<div class="title">
				<h2>Blog</h2>
			</div>
		</div>	
	</div>
</div>

<div class="container blog ma-t">
	<div class="row mt-5">
		<div class="col-md-6 col-lg-4 col-xl-4 mb-5">
			<a href="{{url('blog_detail')}}">
				<div class="blog-card" data-aos="fade-right" data-aos-duration="3000">
					<div class="blog-card-img">
						<img class="img-fluid" src="{{url('public/images/50.jpg')}}" alt=""></img>
					</div>
					<div class="home-card-title">
						<h4>Why Clany’s a life-saver for my flatshare!</h4>
					</div>
					<span class="linear-border"></span>
					<div class="blog-date">
						<a href="{{url('blog_detail')}}"><i class="far fa-calendar-alt pr-3"></i>March 21, 2020</a>
					</div>
					<div class="content">
						<p>We've extensive experience of providing cleaning solutions within a variety of housing projects.</p>
					</div>
					<a href="{{url('blog_detail')}}" class="more">READ MORE</a>
				</div>
			</a>
		</div>
		<div class="col-md-6 col-lg-4 col-xl-4 mb-5">
			<a href="{{url('blog_detail')}}">
				<div class="blog-card" data-aos="fade-right" data-aos-duration="2000">
					<div class="blog-card-img">
						<img class="img-fluid" src="{{url('public/images/45.jpg')}}" alt=""></img>
					</div>
					<div class="home-card-title">
						<h4>Plants that keep the air clean</h4>
					</div>
					<span class="linear-border"></span>
					<div class="blog-date">
						<a href="{{url('blog_detail')}}"><i class="far fa-calendar-alt pr-3"></i>March 21, 2020</a>
					</div>
					<div class="content">
						<p>Providing a clean office environment is a key component to a modern, effective organisation.</p>
					</div>
					<a href="{{url('blog_detail')}}" class="more">READ MORE</a>
				</div>
			</a>
		</div>
		<div class="col-md-6 col-lg-4 col-xl-4 mb-5">
			<a href="{{url('blog_detail')}}">
				<div class="blog-card" data-aos="fade-right" data-aos-duration="1000">
					<div class="blog-card-img">
						<img class="img-fluid" src="{{url('public/images/36.jpg')}}" alt=""></img>
					</div>
					<div class="home-card-title">
						<h4>Clany Super Bowl Party Prep Guide</h4>
					</div>
					<span class="linear-border"></span>
					<div class="blog-date">
						<a href="{{url('blog_detail')}}"><i class="far fa-calendar-alt pr-3"></i>March 21, 2020</a>
					</div>
					<div class="content">
						<p>We have extensive experience of working with a variety of healthcare establishments. </p>
					</div>
					<a href="{{url('blog_detail')}}" class="more">READ MORE</a>
				</div>
			</a>
		</div>
		<div class="col-md-6 col-lg-4 col-xl-4 mb-5">
			<a href="{{url('blog_detail')}}">
				<div class="blog-card" data-aos="fade-right" data-aos-duration="3000">
					<div class="blog-card-img">
						<img class="img-fluid" src="{{url('public/images/37.jpg')}}" alt=""></img>
					</div>
					<div class="home-card-title">
						<h4>The Science of Spring Cleaning!</h4>
					</div>
					<span class="linear-border"></span>
					<div class="blog-date">
						<a href="{{url('blog_detail')}}"><i class="far fa-calendar-alt pr-3"></i>March 21, 2020</a>
					</div>
					<div class="content">
						<p>As specialist cleaning contractors, we are adept at carrying out high-quality cleaning. </p>
					</div>
					<a href="{{url('blog_detail')}}" class="more">READ MORE</a>
				</div>
			</a>
		</div>
		<div class="col-md-6 col-lg-4 col-xl-4 mb-5">
			<a href="{{url('blog_detail')}}">
				<div class="blog-card" data-aos="fade-right" data-aos-duration="2000">
					<div class="blog-card-img">
						<img class="img-fluid" src="{{url('public/images/38.jpg')}}" alt=""></img>
					</div>
					<div class="home-card-title">
						<h4>Carpet cleaning to remove flea infestation</h4>
					</div>
					<span class="linear-border"></span>
					<div class="blog-date">
						<a href="{{url('blog_detail')}}"><i class="far fa-calendar-alt pr-3"></i>March 21, 2020</a>
					</div>
					<div class="content">
						<p>Our industrial cleaning services are fully health & safety compliant. </p>
					</div>
					<a href="{{url('blog_detail')}}" class="more">READ MORE</a>
				</div>
			</a>
		</div>
		<div class="col-md-6 col-lg-4 col-xl-4 mb-5">
			<a href="{{url('blog_detail')}}">
				<div class="blog-card" data-aos="fade-right" data-aos-duration="1000">
					<div class="blog-card-img">
						<img class="img-fluid" src="{{url('public/images/57.jpg')}}" alt=""></img>
					</div>
					<div class="home-card-title">
						<h4>Get CleanEnergy for your (clean) home!</h4>
					</div>
					<span class="linear-border"></span>
					<div class="blog-date">
						<a href="{{url('blog_detail')}}"><i class="far fa-calendar-alt pr-3"></i>March 21, 2020</a>
					</div>
					<div class="content">
						<p>We have the training, years of experience and efficient work flow that blends perfectly into your business schedule.</p>
					</div>
					<a href="{{url('blog_detail')}}" class="more">READ MORE</a>
				</div>
			</a>
		</div>
	</div>
</div>

<div class="container ma-b">
	<nav aria-label="Page navigation example">
		<ul class="pagination justify-content-center">
			<li class="page-item {{ (request()->is('blog_list*')) ? 'active' : '' }}">
				<a class="page-link" href="#"><span>1</span></a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#"><span>2</span></a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#"><span>3</span></a>
			</li>
		</ul>
	</nav>
</div>
@endsection