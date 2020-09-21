<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services;
use Session;
class ServicesController extends Controller
{

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
			'summary' => 'required',
			'service_image' => 'required|mimes:jpg,jpeg,png,svg,gif|image',
			'status' => 'required',
		]);

		$file = $data['service_image'];
		$file_name = time().$file->getClientOriginalName();
		$destination = "uploads/services";
		$file->move($destination,$file_name);

		$service = new Services();
		$service->name = $data['name'];
		$service->summary = $data['summary'];
		$service->image = $file_name;
		$service->status = $data['status'];
		$service->save();
		Session::flash('ServiceSuccess');
		return redirect('cd-admin/view-all-services');
	}


	public function editServices($id)
	{
		$data = Request()->validate([
			'name' => 'required',
			'summary' => 'required',
			'service_image' => 'mimes:jpg,jpeg,png,svg,gif|image',
			'status' => 'required',
		]);
		$service = Services::find($id);
		if(isset($data['service_image']))
		{
			if(file_exists('uploads/services/'.$service['image']))
			{
				unlink('uploads/services/'.$service['image']);
			}
			$file = $data['service_image'];
			$file_name = time().$file->getClientOriginalName();
			$destination = "uploads/services";
			$file->move($destination,$file_name);
			$service->image = $file_name;
		}

		$service->name = $data['name'];
		$service->summary = $data['summary'];
		$service->status = $data['status'];
		$service->save();
		Session::flash('ServiceUpdateSuccess');
		return redirect('cd-admin/view-all-services');
	}

	public function deleteServices($id)
	{
		$service = Services::find($id);
		if(file_exists('uploads/services/'.$service['image']))
		{
			unlink('uploads/services/'.$service['image']);
		}
		$service->delete();
		Session::flash('ServiceDeleteSuccess');
		return redirect('cd-admin/view-all-services');
	}
}
