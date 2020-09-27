<footer class="footer none-sticky">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light footer-nav d-none d-lg-block">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('about_us')}}">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('faq')}}">FAQ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('contact_us')}}">Contact</a>
					</li>
				</ul>
				<ul class="footer-icon">
					@if($finalHeader['contact']['fb_link'] != NULL)
					<a href="{{$finalHeader['contact']['fb_link']}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
					@endif
					@if($finalHeader['contact']['twitter_link'] != NULL)
					<a href="{{$finalHeader['contact']['twitter_link']}}" target="_blank"><i class="fab fa-twitter"></i></a>
					@endif
					@if($finalHeader['contact']['insta_link'] != NULL)
					<a href="{{$finalHeader['contact']['insta_link']}}" target="_blank"><i class="fab fa-instagram"></i></a>
					@endif
					@if($finalHeader['contact']['pininterest_link'] != NULL)
					<a href="{{$finalHeader['contact']['pininterest_link']}}" target="_blank"><i class="fab fa-pinterest"></i></a>
					@endif
				</ul>
			</div>
		</nav>

		<div class="footer-content">
			<div class="row pa-t">
				<div class="col-md-2">
					<div class="footer-img">
						<img class="img-fluid" src="{{url('public/images/4.svg')}}" alt=""></img>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-wrap">
						<h5>About Us</h5>
						<p>{{$finalHeader['about']['summary']}} </p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-6">
							<div class="footer-wrap">
								<h5>Contact</h5>
								<p>
									{{$finalHeader['contact']['address']}}
								</p>
								<a href="https://www.google.com/maps/place/Creatu+Developers/@27.6859418,85.3450849,15z/data=!4m5!3m4!1s0x0:0x6064967133397f28!8m2!3d27.6859418!4d85.3450849" class="map-link" target="_blank">Google Map</a>
								<p>
									T: <a href="tel:{{$finalHeader['contact']['contact_no']}}">{{$finalHeader['contact']['contact_no']}}</a><br>
									E:<a href="mailto:{{$finalHeader['contact']['email']}}">{{$finalHeader['contact']['email']}}</a>
								</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="footer-wrap">
								<h5>Working Time</h5>
								<p>
									Sun - Fri: 7am - 4pm
									Satarday: Close
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-wrap">
						<h5>Get Free Estimate</h5>
						<p><a href="tel:{{$finalHeader['contact']['contact_no']}}" class="call">{{$finalHeader['contact']['contact_no']}}</a></p>
						<p>Get Free Estimate</p>
						<a href="{{url('contact_us')}}" class="btn btn1 mt-2">Contact Us</a>
					</div>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="row">
				<div class="offset-md-2 col-md-8 text-center">
					<p class="pt-5"></p>
					<p class="mt-3">© {{date('Y')}} <a href="#">BPR Cleaning</a> by <a href="http://creatudevelopers.com/">Creatu Developers</a> - <a href="#">Terms & Conditions</a></p>
				</div>
			</div>			
		</div>
	</div>
</footer>