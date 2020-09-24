<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Carousel;
use App\About;
use App\Partners;
use App\Features;
use App\Objective;
use App\SocialLinks;
use App\Compliments;
use App\Faq;
use App\Services;
use App\Blog;
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
		$finalCompliments['contact'] = SocialLinks::get()->first();
		$finalCompliments['more_compliments'] = Compliments::where('status','active')->where('id','!=',$finalCompliments['compliments']['id'])->get();
		return view('about.why-us-subpage',compact('finalCompliments'));
	}

	public function faq()
	{
		$finalFaq = [];
		$finalFaq['faq'] = Faq::get()->first();
		return view('about.faq',compact('finalFaq'));

	}

	public function serviceDetail($slug)
	{
		$finalServiceDetail = [];
		$finalServiceDetail['service_detail'] = Services::where('slug',$slug)->get()->first();
		$finalServiceDetail['other_services'] =Services::where('status','active')->where('id','!=',$finalServiceDetail['service_detail']['id'])->get();
		$finalServiceDetail['features'] = Features::where('status','active')->get();
		$finalServiceDetail['recent_blogs'] = Blog::where('status','active')->orderBy('id','desc')->get();
		return view('service.service-detail',compact('finalServiceDetail'));
	}

	public function BlogDetail($slug)
	{
		$finalBlogDetail = [];
		$finalBlogDetail['blog_detail'] = Blog::where('slug',$slug)->get()->first();
		$finalBlogDetail['other_blogs'] =Blog::where('status','active')->where('id','!=',$finalBlogDetail['blog_detail']['id'])->get();

		return view('blog.blog-detail',compact('finalBlogDetail'));
	}

	public function BlogList()
	{
		$finalBlogList = [];
		$finalBlogList['list'] = Blog::where('status','active')->orderBy('id','desc')->paginate(1);
		return view('blog.blog-list',compact('finalBlogList'));
	}

	public function BookingList()
	{
		$finalServiceList = [];
		$finalServiceList['services'] = Services::where('status','active')->orderBy('id','desc')->get();
		return view('booking.booking-services',compact('finalServiceList'));
	}
}
