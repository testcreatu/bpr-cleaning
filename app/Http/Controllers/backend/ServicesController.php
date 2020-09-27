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
			'room_title' => '',
			'room_summary' => '',
			'room_image' => '',
			'room_image.*' => 'image:mimes:jpg,jpeg,png,svg,gif',
			'duration' => '',
			'price' => '',
			'start_price' => 'required',
			'image' => 'required|mimes:jpg,jpeg,png,svg,gif|image',
			'show_in_homepage' => 'required',
			'extra_title' => '',
			'extra_price' => '',
		]);
		$pricing = [];
		foreach($data['duration'] as $key=>$pr)
		{
			$pricing[$key]['duration'] = $pr;
			$pricing[$key]['price'] = $data['price'][$key]?$data['price'][$key]:'';
			unset($data['duration'][$key]);
		}

		$extras = [];
		foreach($data['extra_title'] as $key=>$ex)
		{
			$extras[$key]['extra_title'] = $ex;
			$extras[$key]['extra_price'] = $data['extra_price'][$key]?$data['extra_price'][$key]:'';
			unset($data['extra_title'][$key]);
		}
		$room = [];
		foreach($data['room_title'] as $key=>$rt)
		{
			$room[$key]['room_title'] = $rt;
			$room[$key]['room_summary'] = $data['room_summary'][$key]?$data['room_summary'][$key]:'';
			$room[$key]['image'] = isset($data['room_image'][$key])?$this->uploadImage($data['room_image'][$key],'uploads/services'):'';
			unset($data['room_title'][$key]);
		}
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
		$service->rooms = json_encode($room);
		$service->pricing = json_encode($pricing);
		$service->slug = Str::slug($data['name']);
		$service->front_image = $this->uploadImage($data['image'],'uploads/services');
		$service->start_price = $data['start_price'];
		$service->show_in_homepage = $data['show_in_homepage'];
		$service->extras = json_encode($extras);
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
			'room_title' => '',
			'room_summary' => '',
			'room_image' => '',
			'room_image.*' => 'image:mimes:jpg,jpeg,png,svg,gif',
			'duration' => '',
			'price' => '',
			'start_price' => 'required',
			'image' => 'mimes:jpg,jpeg,png,svg,gif|image',
			'show_in_homepage' => 'required',
			'extra_title' => '',
			'extra_price' => '',
		]);

		$service = Services::find($id);
		$pricing = [];
		foreach($data['duration'] as $key=>$pr)
		{
			$pricing[$key]['duration'] = $pr;
			$pricing[$key]['price'] = $data['price'][$key]?$data['price'][$key]:'';
			unset($data['duration'][$key]);
		}

		$extras = [];
		foreach($data['extra_title'] as $key=>$pr)
		{
			$extras[$key]['extra_title'] = $pr;
			$extras[$key]['extra_price'] = $data['extra_price'][$key]?$data['extra_price'][$key]:'';
			unset($data['extra_title'][$key]);
		}
		$room = [];
		$rooms = json_decode($service->rooms)?json_decode($service->rooms):'';
		foreach($rooms as $key=>$d)
		{
			$room[$key]['room_title'] = $data['room_title'][$key]?$data['room_title'][$key]:'';
			$room[$key]['room_summary'] = $data['room_summary'][$key]?$data['room_summary'][$key]:NULL;
			if(isset($data['room_image'][$key]))
			{
				if($d->image != NULL)
				{
					$this->unlinkImage('uploads/services/'.$d->image);
					$this->unlinkImage('uploads/thumbnail/'.$d->image);
				}
				$room[$key]['image'] = isset($data['room_image'][$key])?$this->uploadImage($data['room_image'][$key],'uploads/services'):'';
			}
			else
			{
				$room[$key]['image'] = $d->image;
			}
			unset($data['room_title'][$key]);
		}
		foreach($data['room_title'] as $key1=>$sub)
		{
			$count = count($room);
			$room[$count]['room_title'] = $data['room_title'][$key1];
			$room[$count]['room_summary'] = $data['room_summary'][$key1]?$data['room_summary'][$key1]:NULL;
			$room[$count]['image'] = isset($data['room_image'][$key1])?$this->uploadImage($data['room_image'][$key1],'uploads/services'):'';
			unset($data['room_title'][$key1]);
		}
		$encode = [];
		foreach($data['sub_title'] as $key=>$sub)
		{
			$encode[$key]['sub_title'] = $sub;
			$encode[$key]['sub_description'] = $data['sub_description'][$key]?$data['sub_description'][$key]:'';
			unset($data['sub_title'][$key]);
		}
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
		$service->rooms = json_encode($room);
		$service->pricing = json_encode($pricing);
		$service->slug = Str::slug($data['name']);
		if(isset($data['front_image']))
		{
			$this->unlinkImage('uploads/services/'.$service['front_image']);
			$service->front_image = $this->uploadImage($data['image'],'uploads/services');
		}
		$service->show_in_homepage = $data['show_in_homepage'];
		$service->start_price = $data['start_price'];
		$service->extras = json_encode($extras);
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
