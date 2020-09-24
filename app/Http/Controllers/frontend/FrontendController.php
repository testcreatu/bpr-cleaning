<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Carousel;
use App\About;
use App\Partners;
use App\Features;
use App\Objective;
use App\Compliments;
class FrontendController extends Controller
{
	public function home()
	{
		$finalResult = [];
		$finalResult['carousel'] = Carousel::where('status','active')->get();
		return view('home.home',compact('finalResult'));
	}

	public function about()
	{
		$finalAbout = [];
		$finalAbout['about'] = About::get()->first();
		$finalAbout['partners'] = Partners::where('status','active')->get();
		$finalAbout['features'] = Features::where('status','active')->get()->take(4);
		return view('about.about-us',compact('finalAbout'));
	}

	public function whyUs()
	{
		$finalWhyUs = [];
		$finalWhyUs['why_us'] = Objective::get()->first();
		$finalWhyUs['features'] = Features::where('status','active')->get()->take(4);
		$finalWhyUs['compliments'] = Compliments::where('status','active')->get();
		return view('about.why-us',compact('finalWhyUs'));

	}

	public function compliments($slug)
	{
		$finalCompliments = [];
		$finalCompliments['compliments'] = Compliments::where('slug',$slug)->get()->first();
		return view('about.why-us-subpage',compact('finalCompliments'));
	}
}
