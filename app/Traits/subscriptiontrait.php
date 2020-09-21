<?php
namespace App\Traits;

use Carbon\Carbon;
use App\CourseRegistration;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


trait subscriptiontrait{
	public function store(){
		$data = Request()->validate([
			'email' => 'required|email',
		]);

		$a = [];
		$a['created_at'] = Carbon::now('Asia/Kathmandu');
		$final = array_merge($a,$data);
		DB::table('course_registrations')->insert($final);
		Session::flash('Subscribtionsuccess');
		return redirect()->back();

	}



	public function view(){
		$subs = CourseRegistration::get()->all();
		return view('cd-admin.registration.view-registration',compact('subs'));
	}

	public function deletesubs($id){
		CourseRegistration::where('id',$id)->delete();
		Session::flash('failure');
		return redirect('/cd-admin/view-all-Subscription');
	}
}
?>