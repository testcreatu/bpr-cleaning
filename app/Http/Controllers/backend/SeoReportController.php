<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\SeoReport;
use DB;
use Carbon\Carbon;
use App\Mail\SeoReportMail;
use Illuminate\Support\Facades\Mail;

class SeoReportController extends Controller
{

	public function view(){
		// $ers = SeoReport::where('reply','==', NULL)->get();
		$c=SeoReport::where('reply',NULL)->get();
		return view('cd-admin.seo_report.view-seo-report',compact('c'));
	}

	public function delete($id){
		DB::table('seo_reports')->where('id',$id)->delete();
		Session::flash('failure');
		return redirect('/cd-admin/view-all-seo-report');
	}

	public function replyform($id){
		$n=DB::table('seo_reports')->where('id',$id)->get()->first();
		return view('cd-admin.seo_report.replyform',compact('n'));
	}

	public function storereply($id){
		$data = request()->validate([
			'email' => 'required|email',
			'subject' => 'required|',
			'message' => 'required',
			'file_upload' => '',
			'file_upload.*' => 'mimes:pdf,docx,doc,xps',
			'status' => 'required'
		]);
		$file_name = [];
		foreach($data['file_upload'] as $key=>$f)
		{
			$file = $f;
			$file_name[$key] = time().$file->getClientOriginalName();
			$file->move('uploads/seo_reports/files',$file_name[$key]);
		}
		$user_message = SeoReport::find($id);
		Mail::to($data['email'])->send(new SeoReportMail($data,$user_message,$file_name));
		$finalArray['1']['subject'] = $data['subject'];
		$finalArray['1']['message'] = $data['message'];
		$finalArray = json_encode($finalArray);
		$finalFiles = json_encode($file_name);
		$a = [];
		$a['created_at'] = Carbon::now('Asia/Kathmandu');
		$a['files'] = $finalFiles;
		$a['reply'] = $finalArray;
		unset($data['file_upload']);
		unset($data['subject']);
		unset($data['message']);
		unset($data['status']);
		$final = array_merge($a,$data);
		DB::table('seo_reports')->where('id',$id)->update($final);
		Session::flash('success');
		return redirect('/cd-admin/seo-report-replies');

	}
	public function deletereply($id){

		DB::table('seo_report_replies')->where('id',$id)->delete();
		Session::flash('failure');
		return redirect('/cd-admin/seo-report-replies');
	}

	public function viewreply(){
		$er = SeoReport::where('reply','!=',NULL)->get();
		return view('cd-admin.seo_report.view-reply',compact('er'));  
	}

}
