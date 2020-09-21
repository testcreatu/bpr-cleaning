<?php
namespace App\Traits;

use Carbon\Carbon;
use App\Consultant;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Mail\acceptbooking;
use App\Mail\rejectbooking;
use Illuminate\Support\Facades\Mail;
trait consultanttrait
{
	public function store(){
		  $data = Request()->validate([
      'name' => 'required',
      'email' => 'required|email',
      'date'=>'required',
    ]);

    $a = [];
    $a['created_at'] = Carbon::now('Asia/Kathmandu');
    $final = array_merge($a,$data);
    DB::table('consultants')->insert($final);
   //Session::flash('success');
    return redirect('/');

	}

  public function view(){
    $getconsultant = Consultant::get();
    return view('cd-admin.enquiry.view-inquiry-request',compact('getconsultant'));
  }

  public function astore($id){
        $data = request()->validate([
            'email' => 'required',
            'active'=>'required',
            'status' => 'required'
        ]);
        $a = [];
        $a['created_at'] = Carbon::now('Asia/Kathmandu');
        $a['contact_id'] = $id;
        $final = array_merge($a,$data);
        DB::table('approved_consultants')->insert($final);
    
        
         Mail::to($data['email'])->send(new acceptbooking($data));
       return redirect('/cd-admin/enquiry-request');
  }

   public function rstore($id){
        $data = request()->validate([
            'email' => 'required',
            'active'=>'required',
            'status' => 'required'
        ]);
        $a = [];
        $a['created_at'] = Carbon::now('Asia/Kathmandu');
        $a['contact_id'] = $id;
        $final = array_merge($a,$data);
         DB::table('approved_consultants')->insert($final);
    
        
         Mail::to($data['email'])->send(new rejectbooking($data));
       return redirect('/cd-admin/enquiry-request');

    }
    public function deletecon($id){
      DB::table('consultants')->where('id',$id)->delete();
        Session::flash('failure');
       return redirect('/cd-admin/enquiry-request');
    }


  


}

?>