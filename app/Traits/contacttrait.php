<?php
namespace App\Traits;

use Carbon\Carbon;
use App\Contact;
use App\ContactReply;
use Illuminate\Http\Request;
use App\Mail\ContactMail; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

trait contacttrait
{
	public function store(){
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
    return redirect()->back();

  }

  public function view(){
    $ers = Contact::get();
    $c=DB::table('contacts')->orderBy('id','Desc')->paginate(10);
    return view('cd-admin.contact.view-contact',compact('ers','c'));
  }

  public function delete($id){
    DB::table('contacts')->where('id',$id)->delete();
    Session::flash('failure');
    return redirect('/cd-admin/view-all-contact');
  }

  public function replyform($id){
    $n=DB::table('contacts')->where('id',$id)->get()->first();
    return view('cd-admin.contact.replyform',compact('n'));
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

    DB::table('contact_replies')->insert($final);
    Mail::to($data['email'])->send(new ContactMail($data));
    Session::flash('success');
    return redirect('/cd-admin/contact-replies');
    
  }
  public function deletereply($id){

    DB::table('contact_replies')->where('id',$id)->delete();
    Session::flash('failure');
    return redirect('/cd-admin/contact-replies');
  }

  public function viewreply(){
    $er = ContactReply::all();
    $d=DB::table('contact_replies')->orderBy('id', 'DESC')->paginate(10);
    return view('cd-admin.contact.view-reply',compact('d','er'));  
  }


}
?>