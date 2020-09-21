<?php
namespace App\Traits;

use Carbon\Carbon;
use App\Enquery;
use App\EnquiryReply;
use Illuminate\Http\Request;
use App\Mail\EnquiryMail; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
trait enquirytrait
{
	public function store(){

		$data = Request()->validate([
			'name' => 'required',
			'email' => 'required|email',
			'course_name'=>'required',
			'description' => 'required',
			'phone' =>'required',

		]);
		$a = [];
		$a['created_at'] = Carbon::now('Asia/Kathmandu');
		$final = array_merge($a,$data);
		DB::table('enqueries')->insert($final);
  			 //Session::flash('success');
		return redirect('/');



	}

	public function view(){
		 $ers = Enquery::get();
    $c=DB::table('enqueries')->orderBy('id','Desc')->paginate(10);
    return view('cd-admin.enquiry.view-enquiry',compact('ers','c'));
	}

	public function delete($id){
		DB::table('enqueries')->where('id',$id)->delete();
		Session::flash('failure');
		return redirect('/cd-admin/view-all-enquiry');

	}

	public function replyform($id){
		 $n=DB::table('enqueries')->where('id',$id)->get()->first();
    return view('cd-admin.enquiry.replyform',compact('n'));

	}


	public function storereply($id){
		$data = request()->validate([
			'email' => 'required|email',
			'subject' => 'required|',
			'message' => 'required',
			'status' => 'required'
		]);
		$a = [];
		$a['created_at'] = Carbon::now('Asia/Kathmandu');
		$a['contact_id'] = $id;
		$final = array_merge($a,$data);
		DB::table('enquiry_replies')->insert($final);

		Mail::to($data['email'])->send(new EnquiryMail($data));
		return redirect('/cd-admin/enquiry-replies');

	}

	public function viewreply(){
		     $er = EnquiryReply::all();
    $d=DB::table('enquiry_replies')->orderBy('id', 'DESC')->paginate(10);
    return view('cd-admin.enquiry.view-reply',compact('d','er'));  
	}

	public function deletereply($id){

		DB::table('enquiry_replies')->where('id',$id)->delete();
		Session::flash('failure');
		return redirect('/cd-admin/enquiry-replies');
	}


	




}
?>