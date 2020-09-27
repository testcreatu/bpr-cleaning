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
use App\Testimonial;
use App\CeoMessage;
use App\FreeCallRequests;
use Session;
use App\Subscriptions;
use Carbon\Carbon;
use App\Contact;
use DB;
use App\Bookings;
use App\Seo;
class FrontendController extends Controller
{
	public function home()
	{
		$finalResult = [];
		$finalResult['carousel'] = Carousel::where('status','active')->get();
		$finalResult['services'] = Services::where('status','active')->where('show_in_homepage','show')->orderBy('id','desc')->get();
		$finalResult['features'] = Features::where('status','active')->get()->take(4);
		$finalResult['abouts'] = About::get()->first();
		$finalResult['testimonial'] = Testimonial::where('status','active')->get();
		$finalResult['ceo_message'] = CeoMessage::get()->first();
		$finalResult['blogs'] = Blog::where('status','active')->get()->take(3);
		$finalResult['seo'] = Seo::where('name','Home')->get()->first();
		return view('home.home',compact('finalResult'));
	}

	public function about()
	{
		$finalAbout = [];
		$finalAbout['about'] = About::get()->first();
		$finalAbout['partners'] = Partners::where('status','active')->get();
		$finalAbout['features'] = Features::where('status','active')->get()->take(4);
		$finalAbout['seo'] = Seo::where('name','About')->get()->first();
		return view('about.about-us',compact('finalAbout'));
	}

	public function whyUs()
	{
		$finalWhyUs = [];
		$finalWhyUs['why_us'] = Objective::get()->first();
		$finalWhyUs['features'] = Features::where('status','active')->get()->take(4);
		$finalWhyUs['compliments'] = Compliments::where('status','active')->get();
		$finalWhyUs['seo'] = Seo::where('name','Why Us')->get()->first();
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
		$finalFaq['seo'] = Seo::where('name','Faq')->get()->first();
		return view('about.faq',compact('finalFaq'));

	}

	public function contact()
	{
		$finalContact['seo'] = Seo::where('name','contact')->get()->first();
		return view('contact.contact-us',compact('finalContact'));
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
		$finalBlogList['list'] = Blog::where('status','active')->orderBy('id','desc')->paginate(9);
		$finalBlogList['seo'] = Seo::where('name','Blog')->get()->first();

		return view('blog.blog-list',compact('finalBlogList'));
	}

	public function BookingList()
	{
		$finalServiceList = [];
		$finalServiceList['services'] = Services::where('status','active')->orderBy('id','desc')->get();
		return view('booking.booking-services',compact('finalServiceList'));
	}

	public function BookingForm($slug)
	{	$finalBookingForm = [];
		$finalBookingForm['service'] = Services::where('slug',$slug)->get()->first();
		$finalBookingForm['features'] = Features::where('status','active')->get()->take(5);
		return view('booking.booking-form',compact('finalBookingForm'));
	}

	public function storeFreeCall(Request $request)
	{
		$free = new FreeCallRequests();
		$free->phone_no = $request['phone_no'];
		$free->save();
		Session::flash('CallRequestSuccess');
		return redirect()->back();
	}


	public function addSubscriptions(Request $request)
	{
		$subscribers = new Subscriptions();
		$subscribers->name = $request['name'];
		$subscribers->email = $request['email'];
		$subscribers->save();
		Session::flash('SubscriptionSuccess');
		return redirect('/');
	}

	public function addContactMessage()
	{
		$data = Request()->validate([
			'name' => 'required',
			'email' => 'required|email',
			'message'=>'required',
			'phone_no' => 'required',
			'subject' => 'required',
		]);
		$a = [];
		$a['created_at'] = Carbon::now('Asia/Kathmandu');
		$final = array_merge($a,$data);
		DB::table('contacts')->insert($final);
		Session::flash('ContactSaveSuccess');
		return redirect('/');
	}

	public function submitBookingForm()
	{
		$data = Request()->validate([
			'services' => 'required',
			'extras' => '',
			'totalPrice' => 'required',
			'service_id' => 'required',
			'name' => 'required',
			'phone_no' => 'required',
			'email' => 'required',
			'have_pets' => 'required',
			'address' => 'required',
			'city' => 'required',
			'zip' => '',
			'message' => 'required',
		]);
		$services = Services::find($data['service_id']);
		foreach($data['services'] as $s)
		{
			$service_id = str_replace('service', '',$s);
			foreach(json_decode($services['pricing']) as $key=>$finalService)
			{

				if($key == $service_id)
				{
					$finalPricing['service.'.$key] = $finalService;
				}
			}
		}

		foreach($data['extras'] as $e)
		{
			$extra_id = str_replace('extra', '',$e);
			foreach(json_decode($services['extras']) as $key1=>$extras)
			{
				if($key1 == $extra_id)
				{
					$finalExtras['extra.'.$key1] = $extras;
				}
			}
		}
		$finalBooking = new Bookings();
		$finalBooking->total_price = $data['totalPrice'];
		$finalBooking->service_id = $data['service_id'];
		$finalBooking->name = $data['name'];
		$finalBooking->phone_no = $data['phone_no'];
		$finalBooking->email = $data['email'];
		$finalBooking->have_pets = $data['have_pets'];
		$finalBooking->address = $data['address'];
		$finalBooking->city = $data['city'];
		$finalBooking->zip = $data['zip'];
		$finalBooking->message = $data['message'];
		$finalBooking->extras = json_encode($finalExtras);
		$finalBooking->services = json_encode($finalPricing);
		$finalBooking->status = "Not Replied";
		$finalBooking->save();
		Session::flash('BookingSuccess');
		return redirect()->back();





	}
}
