@extends('home-master')

@section('seo_title')	
{{$finalFaq['seo']['title']}}
@endsection

@section('seo_description')	
{{$finalFaq['seo']['description']}}
@endsection

@section('seo_keyword')	
{{$finalFaq['seo']['keywords']}}
@endsection


@section('content')

<div class="content-page">
	<div class="banner pa-tb">
		<div class="container">	
			<div class="title">
				<h2>FAQ</h2>
			</div>
		</div>	
	</div>

	<div class="about-faq pa-tb">
		<div class="container">
			<div class="mission-title">
				<h4>{{$finalFaq['faq']['main_title']}}</h4>
			</div>
			<div class="accordion mt-5" id="accordionExample">
				<?php $faq = json_decode($finalFaq['faq']['faqs']); ?>
				@foreach($faq as $key => $f)
				<div class="card">
					<div class="card-header" id="{{$key}}">
						<h2 class="mb-0">
							<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#{{'collapse'.$key}}" aria-expanded="true" aria-controls="{{'collapse'.$key}}">
								{{$f->question}}
							</button>
						</h2>
					</div>

					<div id="{{'collapse'.$key}}" class="collapse" aria-labelledby="{{$key}}" data-parent="#accordionExample">
						<div class="card-body">
							<p>								
								{{$f->answer}}
							</p>
						</div>
					</div>
				</div>
				@endforeach
				{{-- <div class="card">
					<div class="card-header" id="headingTwo">
						<h2 class="mb-0">
							<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								How long have you been cleaning homes?
							</button>
						</h2>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="card-body">
							<p>We have been providing professional house cleaning services since 1994.</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingThree">
						<h2 class="mb-0">
							<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Are you insured?
							</button>
						</h2>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="card-body">
							<p>Yes. Clany is fully insured with 1,000,000 liability insurance to protect your home and to give you peace of mind.</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingFour">
						<h2 class="mb-0">
							<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								What towns do you service?
							</button>
						</h2>
					</div>
					<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
						<div class="card-body">
							<p>We provide cleaning services for Chandler, Gilbert, Tempe, Sun Lakes, Scottsdale and surrounding areas.></p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingFive">
						<h2 class="mb-0">
							<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								What all is included in your cleaning service?
							</button>
						</h2>
					</div>
					<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
						<div class="card-body">
							<p>Please review our thorough house cleaning checklist for a list of services we perform for each type of cleaning.</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingSix">
						<h2 class="mb-0">
							<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
								What is green Home Cleaning?
							</button>
						</h2>
					</div>
					<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
						<div class="card-body">
							<p>We pamper all our clients with our Ecofriendly House cleaning. There is no extra charge for this, The difference is that your home is cleaned with Natural Cleaning Products of harsh cleaning chemicals.</p>
						</div>
					</div>
				</div> --}}
				{{-- <div class="card">
					<div class="card-header" id="headingSeven">
						<h2 class="mb-0">
							<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
								Do you furnish the cleaning supplies?
							</button>
						</h2>
					</div>
					<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
						<div class="card-body">
							<p>Yes. We furnish everything needed to clean your home free of charge.</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingEight">
						<h2 class="mb-0">
							<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
								What should I expect on my first appointment?
							</button>
						</h2>
					</div>
					<div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
						<div class="card-body">
							<p>We will arrive at your home we will be equipped with all the cleaning supplies and equipment needed to thoroughly clean your home. Your first appointment generally takes the longest, as we will need time to get acquainted with a new environment. Subsequent appointments will move along faster.</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingNine">
						<h2 class="mb-0">
							<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
								Do I need to do anything before you arrive?
							</button>
						</h2>
					</div>
					<div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
						<div class="card-body">
							<p>The best way to prepare for your cleaners is to straighten up as much as possible. That way the cleaners can focus their efforts on cleaning up dust and grime, not putting things in their places. “It’s best if people pick up or straighten up their items," like toys and clothes.</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingTen">
						<h2 class="mb-0">
							<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
								Will I have the same cleaning person each visit?
							</button>
						</h2>
					</div>
					<div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
						<div class="card-body">
							<p>Yes. You will have the same cleaning professional for each visit. We know how important it is to have someone you know and trust cleaning your home. You will have a team of two cleaners (same team) for each cleaning.</p>
						</div>
					</div>
				</div> --}}
			</div>
		</div>
	</p>

</div>





@endsection