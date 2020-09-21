<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\About;
use App\Http\Controllers\backend\ImageController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class AboutController extends Controller
{
	use ImageController;
	public function addAboutForm(){
		return view('cd-admin.about.add-new-about');
	}

	public function viewAbout(){
		$about = About::get()->first();
		return view('cd-admin.about.view-all-about',compact('about'));
	}

	public function editAboutForm($id){
		$data =  About::find($id);
		return view('cd-admin.about.edit-about',compact('data'));
	}

	public function addAbout(){
		$a=[];
		$data = $this->addValidate();
		$a['image'] = $this->uploadImage($data['image'],'uploads/about/images');
		$a['background_image'] = $this->uploadImage($data['background_image'],'uploads/about/images');
		$a['created_at'] =Carbon::now('Asia/Kathmandu');
		$replace = array_replace($data,$a);
		DB::table('abouts')->Insert($replace);
		Session::flash('success');
		return redirect('/cd-admin/view-about');
	}

	public function editAbout($id){
		$data = $this->editValidate();
		$test = About::find($id);
		$sub_title = Request()->sub_title;
		$sub_description = Request()->sub_description;
		$section_image = Request()->section_image;
		$encode = [];
		
		if(isset($data['image']))
		{
			$this->unlinkImage('uploads/about/images/'.$test['image']);
			$this->unlinkImage('uploads/thumbnail/'.$test['image']);
			$a['image'] = $this->uploadImage($data['image'],'uploads/about/images');
		}
		if(isset($data['background_image']))
		{
			$this->unlinkImage('uploads/about/images/'.$test['background_image']);
			$this->unlinkImage('uploads/thumbnail/'.$test['background_image']);
			$a['background_image'] = $this->uploadImage($data['background_image'],'uploads/about/images');
		}
		$a['updated_at'] =Carbon::now('Asia/Kathmandu');
		$replace = array_replace($data,$a);

		$data = DB::table('abouts')->update($replace);

		Session::flash('success1');
		return redirect('/cd-admin/view-about');
	}

	public function addValidate()
	{
		$request =Request()->all();
		$data =  Request()->validate([
			'title'=>'required',   
			'sub_text' => '',
			'description' => 'required',
			'summary'=>'required',
			'image' => 'required|image|mimes:jpeg,png,gif,jpg',
			'background_image' => 'required|image|mimes:jpeg,png,gif,jpg',
		]);
		return $data;
	}
	public function editValidate()
	{
		$request =Request()->all();
		$data =  Request()->validate([
			'title'=>'required',   
			'sub_text' => '',
			'description' => 'required',
			'summary'=>'required',
			'image' => 'image|mimes:jpeg,png,gif,jpg',
			'background_image' => 'image|mimes:jpeg,png,gif,jpg',
		]);
		return $data;
	}

}
