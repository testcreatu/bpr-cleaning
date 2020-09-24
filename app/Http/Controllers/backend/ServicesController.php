<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services;
use Session;
use App\Http\Controllers\backend\ImageController;
use Illuminate\Support\Str;

class ServicesController extends Controller
{
	use ImageController;
	public function viewServices()
	{
		$service = Services::get();
		return view('cd-admin.services.view-services',compact('service'));
	}
	public function addServicesForm()
	{
		return view("cd-admin.services.add-services");
	}

	public function editServicesForm($id)
	{
		$data = Services::find($id);
		return view("cd-admin.services.edit-services",compact('data'));
	}

	public function addServices()
	{
		$data = Request()->validate([
			'name' => 'required',
			'sub_text' => 'required',
			'service_image' => 'required|mimes:jpg,jpeg,png,svg,gif|image',
			'status' => 'required',
			'features' => 'required',
			'sub_title' => '',
			'sub_description' => '',
			'seo_title' => 'required',
			'seo_keyword' => 'required',
			'seo_description' => 'required',
		]);
		$encode = [];
		foreach($data['sub_title'] as $key=>$sub)
		{
			$encode[$key]['sub_title'] = $sub;
			$encode[$key]['sub_description'] = $data['sub_description'][$key]?$data['sub_description'][$key]:'';
			unset($data['sub_title'][$key]);
		}
		$service = new Services();
		$service->name = $data['name'];
		$service->image = $this->uploadImage($data['service_image'],'uploads/services');
		$service->status = $data['status'];
		$service->features = json_encode($data['features']);
		$service->section = json_encode($encode);
		$service->sub_text = $data['sub_text'];
		$service->seo_description = $data['seo_description'];
		$service->seo_title = $data['seo_title'];
		$service->seo_keyword = $data['seo_keyword'];
		$service->slug = Str::slug($data['name']);
		$service->save();
		Session::flash('ServiceSuccess');
		return redirect('cd-admin/view-services');
	}


	public function editServices($id)
	{
		$data = Request()->validate([
			'name' => 'required',
			'sub_text' => 'required',
			'service_image' => 'mimes:jpg,jpeg,png,svg,gif|image',
			'status' => 'required',
			'features' => 'required',
			'sub_title' => '',
			'sub_description' => '',
			'seo_title' => 'required',
			'seo_keyword' => 'required',
			'seo_description' => 'required',
		]);
		$encode = [];
		foreach($data['sub_title'] as $key=>$sub)
		{
			$encode[$key]['sub_title'] = $sub;
			$encode[$key]['sub_description'] = $data['sub_description'][$key]?$data['sub_description'][$key]:'';
			unset($data['sub_title'][$key]);
		}
		$service = Services::find($id);
		$service->name = $data['name'];
		if(isset($data['service_image']))
		{
			$this->unlinkImage('uploads/services/'.$service['image']);
			$this->unlinkImage('uploads/thumbnail/'.$service['image']);
			$service->image = $this->uploadImage($data['service_image'],'uploads/services');
		}
		$service->status = $data['status'];
		$service->features = json_encode($data['features']);
		$service->section = json_encode($encode);
		$service->sub_text = $data['sub_text'];
		$service->seo_description = $data['seo_description'];
		$service->seo_title = $data['seo_title'];
		$service->seo_keyword = $data['seo_keyword'];
		$service->slug = Str::slug($data['name']);

		$service->save();
		Session::flash('ServiceUpdateSuccess');
		return redirect('cd-admin/view-services');
	}

	public function deleteServices($id)
	{
		$service = Services::find($id);
		$this->unlinkImage('uploads/services/'.$service['image']);
		$this->unlinkImage('uploads/thumbnail/'.$service['image']);
		$service->delete();
		Session::flash('ServiceDeleteSuccess');
		return redirect('cd-admin/view-services');
	}
}
