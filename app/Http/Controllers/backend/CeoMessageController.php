<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\CeoMessage;
use App\Http\Controllers\backend\ImageController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class CeoMessageController extends Controller
{
	use ImageController;
	public function addCeoMessageForm(){
		return view('cd-admin.ceo_message.add-new-ceo_message');
	}

	public function viewCeoMessage(){
		$ceo_message = CeoMessage::get()->first();
		return view('cd-admin.ceo_message.view-ceo_message',compact('ceo_message'));
	}

	public function editCeoMessageForm($id){
		$data =  CeoMessage::find($id);
		return view('cd-admin.ceo_message.edit-ceo_message',compact('data'));
	}

	public function addCeoMessage(){
		$a=[];
		$data = $this->addValidate();
		$a['image'] = $this->uploadImage($data['image'],'uploads/ceo_message');
		$a['created_at'] =Carbon::now('Asia/Kathmandu');
		$replace = array_replace($data,$a);
		DB::table('ceo_messages')->Insert($replace);
		Session::flash('success');
		return redirect('/cd-admin/view-ceo-message');
	}

	public function editCeoMessage($id){
		$a=[];
		$data = $this->editValidate();
		$ceo = CeoMessage::find($id);
		if(isset($data['image']))
		{
			$this->unlinkImage('uploads/thumbnail/'.$ceo['image']);
			$this->unlinkImage('uploads/ceo_message/'.$ceo['image']);
			$a['image'] = $this->uploadImage($data['image'],'uploads/ceo_message');
		}
		$a['created_at'] =Carbon::now('Asia/Kathmandu');
		$replace = array_replace($data,$a);
		DB::table('ceo_messages')->where('id',$id)->update($replace);
		Session::flash('success1');
		return redirect('/cd-admin/view-ceo-message');
	}

	public function addValidate()
	{
		$request =Request()->all();
		$data =  Request()->validate([
			'name'=>'required',   
			'designation' => '',
			'title' => 'required',
			'summary'=>'required',
			'image' => 'required|image|mimes:jpeg,png,gif,jpg',
		]);
		return $data;
	}
	public function editValidate()
	{
		$request =Request()->all();
		$data =  Request()->validate([
			'name'=>'required',   
			'designation' => '',
			'title' => 'required',
			'summary'=>'required',
			'image' => 'image|mimes:jpeg,png,gif,jpg',
		]);
		return $data;
	}

}
