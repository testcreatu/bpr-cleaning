@extends('home-master')



@section('content')

<div class="booking-service content-page">
	<div class="container">
		<div class="title text-center pa-t" data-aos="fade-down" data-aos-duration="3000">
			<h2>
				Choose your service
				<span>Find the perfect plan for you — 100% Money Back Guarantee</span>
			</h2>
		</div>
		<div class="row booking-service-list ma-t ma-b">
			@foreach($finalServiceList['services'] as $key => $service)
			<div class="col-md-6 col-lg-4 col-xl-3 mb-4">
				<div class="service-list-content" data-aos="fade-right" data-aos-duration="3000">
					<div class="service-list-img">
						<img class="img-fluid" src="{{url('uploads/thumbnail/'.$service['image'])}}"></img>
					</div>
					<div class="service-list-dtl">
						<div class="home-card-title">
							<h4>{{$service['name']}}</h4>
						</div>
						<?php $features = json_decode($service['features']); ?>
						<ul class="service-list-option mt-4">
							@foreach($features as $f)
							<li>{{$f}} </li>
							@endforeach
							
						</ul>
						<div class="service-btn text-center mt-3">
							<a href="{{url('booking_form/'.$service['slug'])}}" class="btn btn1">Book Now</a>
							<a href="{{url('service_detail/'.$service['slug'])}}" class="more mt-2 ">Or Learn More</a>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>



@endsection