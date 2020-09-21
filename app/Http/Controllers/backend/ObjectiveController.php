<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\backend\ImageController;
use Session;
use App\Objective;
use DB;
use Carbon\Carbon;
class ObjectiveController extends Controller
{
	use ImageController;
	public function addWhyUsForm(){
		return view('cd-admin.objective.add-objective');
	}

	public function viewWhyUs(){
		$why_us = Objective::get()->first();
		return view('cd-admin.objective.view-objective',compact('why_us'));
	}

	public function editWhyUsForm($id){
		$data =  Objective::find($id);
		return view('cd-admin.objective.edit-objective',compact('data'));
	}

	public function addWhyUs(){
		$a=[];
		$data = $this->addValidate();
		$a['image'] = $this->uploadImage($data['image'],'uploads/why_us');
		$a['why_choose_us_image'] = $this->uploadImage($data['why_choose_us_image'],'uploads/why_us');
		$a['form_image'] = $this->uploadImage($data['form_image'],'uploads/why_us');
		$a['created_at'] =Carbon::now('Asia/Kathmandu');
		unset($data['image']);
		unset($data['form_image']);
		unset($data['why_choose_us_image']);
		$replace = array_replace($data,$a);
		DB::table('objectives')->Insert($replace);
		Session::flash('success');
		return redirect('/cd-admin/view-why-us');
	}

	public function editWhyUs($id){
		$data = $this-> editValidate();
		$test = Objective::find($id);
		if(isset($data['image'])){
			$this->unlinkImage('uploads/why_us/'.$test['image']);
			$this->unlinkImage('uploads/thumbnail/'.$test['image']);
			$a['image'] =  $this->uploadImage($data['image'],'uploads/why_us');
		}
		if(isset($data['why_choose_us_image'])){
			$this->unlinkImage('uploads/why_us/'.$test['why_choose_us_image']);
			$this->unlinkImage('uploads/thumbnail/'.$test['why_choose_us_image']);
			$a['why_choose_us_image'] = $this->uploadImage($data['why_choose_us_image'],'uploads/why_us');
		}
		if(isset($data['form_image'])){
			$this->unlinkImage('uploads/why_us/'.$test['form_image']);
			$this->unlinkImage('uploads/thumbnail/'.$test['form_image']);
			$a['form_image'] = $this->uploadImage($data['form_image'],'uploads/why_us');
		}
		$a['updated_at'] =Carbon::now('Asia/Kathmandu');
		$replace = array_replace($data,$a);
		$data = DB::table('objectives')->where('id',$id)->update($replace);

		Session::flash('success1');
		return redirect('/cd-admin/view-why-us');
	}

	public function addValidate()
	{
		$request =Request()->all();
		$data =  Request()->validate([
			'title'=>'required',   
			'summary'=>'required',
			// 'altimage' => 'required',
			'image' => 'required|image|mimes:jpeg,png,gif,jpg',
			'description' => 'required',
			// 'status' => 'required',
			'why_choose_us' => 'required',
			'why_choose_us_image' => 'required|mimes:jpeg,png,gif,jpg|image',
			'form_image' => 'required|image|mimes:jpeg,png,gif,jpg',
		]);
		return $data;
	}
	public function editValidate()
	{
		$request =Request()->all();
		$data =  Request()->validate([
			'title'=>'required',   
			'summary'=>'required',
			// 'altimage' => 'required',
			'image' => 'image|mimes:jpeg,png,gif,jpg',
			'description' => 'required',
			// 'status' => 'required',
			'why_choose_us' => 'required',
			'why_choose_us_image' => 'mimes:jpeg,png,gif,jpg|image',
			'form_image' => 'image|mimes:jpeg,png,gif,jpg',
		]);
		return $data;
	}

	public function delete($id)
	{
		$why = Objective::find($id);
		$this->unlinkImage('uploads/why_us/'.$why['image']);
		$this->unlinkImage('uploads/thumbnail/'.$why['image']);
		$this->unlinkImage('uploads/why_us/'.$why['why_choose_us_image']);
		$this->unlinkImage('uploads/thumbnail/'.$why['why_choose_us_image']);	
		$this->unlinkImage('uploads/why_us/'.$why['form_image']);
		$this->unlinkImage('uploads/thumbnail/'.$why['form_image']);
		$why->delete();
		Session::flash('failure');
		return redirect('/cd-admin/view-why-us');
	}


}
