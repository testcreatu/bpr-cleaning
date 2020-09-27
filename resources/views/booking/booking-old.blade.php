@extends('home-master')



@section('content')

<div class="booking-form container-fluid content-page">
	<div class="booking-form-content">
		<div class="row">
			<div class="col-md-4 left-container">
				<aside class="left-col" id="sticky-anchor">
					<div class="sidebar">
						<div class="booking-sidebar">
							<div class="choose-card text-center">
								<div class="choose-card-img">
									<img class="img-fluid" src="{{url('public/images/46.png')}}" alt=""></img>
								</div>
								<div class="title">
									<h6>SAVES YOU TIME</h6>
								</div>
								<div class="content">
									<p>Our service helps you live smarter, giving you time to focus on what's most important.</p>
								</div>
							</div>
							<div class="choose-card text-center">
								<div class="choose-card-img">
									<img class="img-fluid" src="{{url('public/images/47.png')}}" alt=""></img>
								</div>
								<div class="title">
									<h6>SAFETY FIRST</h6>
								</div>
								<div class="content">
									<p>We rigorously vet all of our Cleaners, who undergo identity checks as well as in-person interviews.</p>
								</div>
							</div>
							<div class="choose-card text-center">
								<div class="choose-card-img">
									<img class="img-fluid" src="{{url('public/images/25.png')}}" alt=""></img>
								</div>
								<div class="title">
									<h6>ONLY THE BEST QUALITY</h6>
								</div>
								<div class="content">
									<p>Our skilled professionals go above and beyond on every job. Cleaners are rated and reviewed after each task.</p>
								</div>
							</div>
							<div class="choose-card text-center">
								<div class="choose-card-img">
									<img class="img-fluid" src="{{url('public/images/28.png')}}" alt=""></img>
								</div>
								<div class="title">
									<h6>EASY TO GET HELP</h6>
								</div>
								<div class="content">
									<p>Select your ZIP code, number of bedrooms and bathrooms, date and relax while we take care of your home.</p>
								</div>
							</div>
							<div class="choose-card text-center">
								<div class="choose-card-img">
									<img class="img-fluid" src="{{url('public/images/48.png')}}" alt=""></img>
								</div>
								<div class="title">
									<h6>SEAMLESS COMMUNICATION</h6>
								</div>
								<div class="content">
									<p>Online communication makes it easy for you to stay in touch with your Cleaners.</p>
								</div>
							</div>
							<div class="choose-card text-center">
								<div class="choose-card-img">
									<img class="img-fluid" src="{{url('public/images/26.png')}}" alt=""></img>
								</div>
								<div class="title">
									<h6>CASH FREE PAYMENT</h6>
								</div>
								<div class="content">
									<p>Pay securely online only when the cleaning is complete.</p>
								</div>
							</div>
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
						<form class="form-content-detail">
							<section>Fields marked with an <small>*</small> are required</section>
							<section class="title text-center">Service Information</section>
							<div class="form-field form-check">
								<div class="form-field-label">
									<p>Studio</p>
								</div>
								<div class="form-field-checkbox">
									<ul class="clearfix">
										<li class="form-check">
											<input class="form-check-input" type="checkbox" value="option1" id="defaultCheck1">
											<label class="form-check-label" for="defaultCheck1">1 Time Cleaning ($105)</label>
										</li>
										<li class="form-check">
											<input class="form-check-input" type="checkbox" value="option2" id="defaultCheck2">
											<label class="form-check-label" for="defaultCheck2">Every 2 Weeks ($95)</label>
										</li>
										<li class="form-check">
											<input class="form-check-input" type="checkbox" value="option3" id="defaultCheck3">
											<label class="form-check-label" for="defaultCheck3">Every 3 Weeks ($102)</label>
										</li>
										<li class="form-check">
											<input class="form-check-input" type="checkbox" value="option4" id="defaultCheck4">
											<label class="form-check-label" for="defaultCheck4">Every Month ($100)</label>
										</li>
									</ul>
								</div>
								<div class="field-label-quantity mt-4 col-md-4 p-0">
									<p>Studio Quantity</p>
									<input type="number" name="quantity" min="0" class="form-control quantity-increment" id="quantityNumber" placeholder="Enter quantity" value="" aria-describedby="emailHelp">
								</div>
							</div>
							<div class="form-field form-check">
								<div class="form-field-label">
									<p>One Bedroom</p>
								</div>
								<div class="form-field-checkbox">
									<ul class="clearfix">
										<li class="form-check">
											<input class="form-check-input" type="checkbox" value="option1" id="defaultCheck1">
											<label class="form-check-label" for="defaultCheck1">1 Time Cleaning ($110)</label>
										</li>
										<li class="form-check">
											<input class="form-check-input" type="checkbox" value="option2" id="defaultCheck2">
											<label class="form-check-label" for="defaultCheck2">Every 2 Weeks ($105)</label>
										</li>
										<li class="form-check">
											<input class="form-check-input" type="checkbox" value="option3" id="defaultCheck3">
											<label class="form-check-label" for="defaultCheck3">Every 3 Weeks ($115)</label>
										</li>
										<li class="form-check">
											<input class="form-check-input" type="checkbox" value="option4" id="defaultCheck4">
											<label class="form-check-label" for="defaultCheck4">Every Month ($120)</label>
										</li>
									</ul>
								</div>
								<div class="field-label-quantity mt-4 col-md-4 p-0">
									<p>One Bedroom Quantity</p>
									<input type="number" name="quantity" min="0" class="form-control quantity-increment" id="quantityNumber" placeholder="Enter quantity" value="" aria-describedby="emailHelp">
								</div>
							</div>
							<div class="form-field form-check">
								<div class="form-field-label">
									<p>Two Bedroom</p>
								</div>
								<div class="form-field-checkbox">
									<ul class="clearfix">
										<li class="form-check">
											<input class="form-check-input" type="checkbox" value="option1" id="defaultCheck1">
											<label class="form-check-label" for="defaultCheck1">1 Time Cleaning ($120)</label>
										</li>
										<li class="form-check">
											<input class="form-check-input" type="checkbox" value="option2" id="defaultCheck2">
											<label class="form-check-label" for="defaultCheck2">Every 2 Weeks ($115)</label>
										</li>
										<li class="form-check">
											<input class="form-check-input" type="checkbox" value="option3" id="defaultCheck3">
											<label class="form-check-label" for="defaultCheck3">Every 3 Weeks ($135)</label>
										</li>
										<li class="form-check">
											<input class="form-check-input" type="checkbox" value="option4" id="defaultCheck4">
											<label class="form-check-label" for="defaultCheck4">Every Month ($100)</label>
										</li>
									</ul>
								</div>
								<div class="field-label-quantity mt-4 col-md-4 p-0">
									<p>Two Bedroom Quantity</p>
									<input type="number" name="quantity" min="0" class="form-control quantity-increment" id="quantityNumber" placeholder="Enter quantity" value="" aria-describedby="emailHelp">
								</div>
							</div>
							<div class="form-field form-check">
								<div class="form-field-label">
									<p>Three Bedroom</p>
								</div>
								<div class="form-field-checkbox">
									<ul class="clearfix">
										<li class="form-check">
											<input class="form-check-input" type="checkbox" value="option1" id="defaultCheck1">
											<label class="form-check-label" for="defaultCheck1">1 Time Cleaning ($130)</label>
										</li>
										<li class="form-check">
											<input class="form-check-input" type="checkbox" value="option2" id="defaultCheck2">
											<label class="form-check-label" for="defaultCheck2">Every 2 Weeks ($125)</label>
										</li>
										<li class="form-check">
											<input class="form-check-input" type="checkbox" value="option3" id="defaultCheck3">
											<label class="form-check-label" for="defaultCheck3">Every 3 Weeks ($15)</label>
										</li>
										<li class="form-check">
											<input class="form-check-input" type="checkbox" value="option4" id="defaultCheck4">
											<label class="form-check-label" for="defaultCheck4">Every Month ($120)</label>
										</li>
									</ul>
								</div>
								<div class="field-label-quantity mt-4 col-md-4 p-0">
									<p>Three Bedroom Quantity</p>
									<input type="number" name="quantity" min="0" class="form-control quantity-increment" id="quantityNumber" placeholder="Enter quantity" value="" aria-describedby="emailHelp">
								</div>
							</div>
							<div class="form-field form-check">
								<div class="form-field-label">
									<p>Hourly Rated</p>
								</div>
								<div class="form-field-checkbox">
									<ul class="clearfix">
										<li class="form-check">
											<input class="form-check-input" type="checkbox" value="option1" id="defaultCheck1">
											<label class="form-check-label" for="defaultCheck1">1 Time Cleaning ($100)</label>
										</li>
										<li class="form-check">
											<input class="form-check-input" type="checkbox" value="option2" id="defaultCheck2">
											<label class="form-check-label" for="defaultCheck2">Every 2 Weeks ($105)</label>
										</li>
										<li class="form-check">
											<input class="form-check-input" type="checkbox" value="option3" id="defaultCheck3">
											<label class="form-check-label" for="defaultCheck3">Every 3 Weeks ($110)</label>
										</li>
										<li class="form-check">
											<input class="form-check-input" type="checkbox" value="option4" id="defaultCheck4">
											<label class="form-check-label" for="defaultCheck4">Every Month ($120)</label>
										</li>
									</ul>
								</div>
								<div class="field-label-quantity mt-4 col-md-4 p-0">
									<p>Hourly Rated</p>
									<input type="number" name="quantity" min="0" class="form-control quantity-increment" id="quantityNumber" placeholder="Enter quantity" value="" aria-describedby="emailHelp">
								</div>
							</div>
							<div class="form-field form-check">
								<div class="form-field-label">
									<p>Select Extra</p>
								</div>
								<div class="form-field-checkbox">
									<ul class="clearfix">
										<li class="form-check">
											<input class="form-check-input" type="radio" value="option1" id="defaultCheck1">
											<label class="form-check-label" for="defaultCheck1">Bathrooms (+$40)</label>
										</li>
										<li class="form-check">
											<input class="form-check-input" type="radio" value="option2" id="defaultCheck2">
											<label class="form-check-label" for="defaultCheck2">Inside Windows (+$35)</label>
										</li>
										<li class="form-check">
											<input class="form-check-input" type="radio" value="option3" id="defaultCheck3">
											<label class="form-check-label" for="defaultCheck3">Inside Cabinets (+$45)</label>
										</li>
										<li class="form-check">
											<input class="form-check-input" type="radio" value="option4" id="defaultCheck4">
											<label class="form-check-label" for="defaultCheck4">Deep Cleaning (+$80)</label>
										</li>
									</ul>
								</div>
							</div>
							<div class="field-label-total mt-4 col-md-4">
								<p>Total : 00.00</p>
							</div>
							<h5>Personal Information</h5>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputName">Name <small>*</small></label>
									<input type="text-center" class="form-control" id="inputName">
								</div>
								<div class="form-group col-md-6">
									<label for="inputPhone">Phone <small>*</small></label>
									<input type="nummber" class="form-control" id="inputPhone">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputEmail4">Email <small>*</small></label>
									<input type="email" class="form-control" id="inputEmail4">
								</div>
								<div class="form-group col-md-6">
									<label for="inputPets">Pets?</label>
									<select id="inputPets" class="form-control">
										<option selected>Yes, I have Pets</option>
										<option>No, I don't have Pets</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="inputAddress">Address <small>*</small></label>
								<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputCity">City <small>*</small></label>
									<input type="text" class="form-control" id="inputCity">
								</div>
								<div class="form-group col-md-6">
									<label for="inputZip">Zip <small>*</small></label>
									<input type="text" class="form-control" id="inputZip">
								</div>
							</div>
							<div class="form-group">
								<label>Message <small>*</small></label>
								<textarea class="form-control col-md-12"></textarea>
							</div>
							<button type="submit" class="btn btn-outline-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection