@extends('home-master')



@section('content')

<div class="booking-form container-fluid content-page">
	@if(Session::has('BookingSuccess'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Your Booking has been Saved | We Will Contact You Soon</strong> {{ Session::get('message', '') }}
	</div>
	@endif
	<div class="booking-form-content">
		<div class="row">
			<div class="col-md-4 left-container">
				<aside class="left-col" id="sticky-anchor">
					<div class="sidebar">
						<div class="booking-sidebar">
							@foreach($finalBookingForm['features'] as $features)
							<div class="choose-card text-center">
								<div class="choose-card-img">
									<img class="img-fluid" src="{{url('uploads/thumbnail/'.$features['image'])}}" alt=""></img>
								</div>
								<div class="title">
									<h6>{{$features['title']}}</h6>
								</div>
								<div class="content">
									<p>{{$features['summary']}}</p>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</aside>
			</div>
			<div class="col-md-8 right-conatainer">
				<div class="right-col ">
					<div class="form-content">
						<div class="mission-title text-center">
							<h4>
								Complete your booking
								<span>Great! Few details and we can complete your booking.</span>
							</h4>
						</div>
						<form class="form-content-detail" action="{{url('submit-booking-form')}}" method="POST">
							@csrf
							<section>Fields marked with an <small>*</small> are required</section>
							<section class="title text-center">Service Information</section>
							<div class="form-field form-check">
								<div class="form-field-label">
									<p>{{$finalBookingForm['service']['name']}}</p>
								</div>
								<div class="form-field-checkbox">
									<ul class="clearfix">
										<?php $pricings = json_decode($finalBookingForm['service']['pricing']);
										?>
										@foreach($pricings as $key=>$p)
										<li class="form-check" >
											<input  class="form-check-input sum" id="{{'service'.$key}}" type="checkbox" value="{{'service'.$key}}" id="defaultCheck{{$key}}" onclick="showTotalPrice('{{$p->price}}','{{$p->duration}}','{{'service'.$key}}')" name="services[]" multiple>
											<label class="form-check-label" for="defaultCheck{{$key}}">{{$p->duration}}({{$p->price}})</label>
										</li>
										@endforeach
										
									</ul>
								</div>
								{{-- <div class="field-label-quantity mt-4 col-md-4 p-0">
									<p>Studio Quantity</p>
									<input type="number" name="quantity" min="0" class="form-control quantity-increment" id="quantityNumber" placeholder="Enter quantity" value="" aria-describedby="emailHelp">
								</div> --}}
							</div>
							<div class="form-field form-check">
								<div class="form-field-label">
									<p>Select Extra</p>
								</div>
								<div class="form-field-checkbox">
									<ul class="clearfix">
										<?php $extra = json_decode($finalBookingForm['service']['extras']);
										?>			
										@foreach($extra as $key1=>$e)
										<li class="form-check" >
											<input  class="form-check-input sum" id="{{'extra'.$key1}}" type="checkbox" value="{{'extra'.$key1}}" id="defaultCheckExtra{{$key1}}" onclick="showTotalPrice('{{$e->extra_price}}','{{$e->extra_title}}','{{'extra'.$key1}}')" name="extras[]" multiple>
											<label class="form-check-label" for="defaultCheckExtra{{$key1}}" >{{$e->extra_title}}({{$e->extra_price}})</label>
										</li>
										@endforeach
										
									</ul>
								</div>
							</div>
							<div class="field-label-total mt-4 col-md-4">
								<p id="show-price">Total : <span id="showPrice"></span></p>
								<input type="hidden" name="totalPrice" id="total" value="">
								<input type="hidden" name="service_id" value="{{$finalBookingForm['service']['id']}}">

							</div>
							<h5>Personal Information</h5>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputName">Name <small>*</small></label>
									<input type="text-center" class="form-control" name="name" id="inputName">
								</div>
								<div class="form-group col-md-6">
									<label for="inputPhone">Phone <small>*</small></label>
									<input type="number" class="form-control" name="phone_no" id="inputPhone">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputEmail4">Email <small>*</small></label>
									<input type="email" class="form-control" name="email" id="inputEmail4">
								</div>
								<div class="form-group col-md-6">
									<label for="inputPets">Pets?</label>
									<select id="inputPets" name="have_pets" class="form-control">
										<option value="Yes" selected>Yes, I have Pets</option>
										<option value="No">No, I don't have Pets</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="inputAddress">Address <small>*</small></label>
								<input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputCity">City <small>*</small></label>
									<input type="text" class="form-control" name="city" id="inputCity">
								</div>
								<div class="form-group col-md-6">
									<label for="inputZip">Zip <small>*</small></label>
									<input type="text" name="zip" class="form-control" id="inputZip">
								</div>
							</div>
							<div class="form-group">
								<label>Message <small>*</small></label>
								<textarea class="form-control col-md-12" type="text" name="message"></textarea>
							</div>
							<button type="submit" class="btn btn-outline-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript">
	let totalValue = 0;
	function showTotalPrice(price,name,key) {
		var x = document.getElementById(key).checked;
		if(x)
		{
			totalValue = totalValue + parseFloat(price);
		}
		else
		{
			totalValue = totalValue - price;
		}
		if(totalValue >= 0)
		{
			document.getElementById('showPrice').innerHTML = totalValue;
			document.getElementById('total').value = totalValue;
		}
		else
		{
			totalValue = 0;
			document.getElementById('showPrice').innerHTML = totalValue;
			document.getElementById('total').value = totalValue;
		}
	}
</script>

@endsection