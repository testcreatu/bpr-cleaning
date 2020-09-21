<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Features;
class FeaturesController extends Controller
{
	public function viewFeatures()
	{
		$feature = Features::get();
		return view('cd-admin.features.view-features',compact('feature'));
	}
	public function addFeaturesForm()
	{
		return view("cd-admin.features.add-features");
	}

	public function editFeaturesForm($id)
	{
		$data = Features::find($id);
		return view("cd-admin.features.edit-features",compact('data'));
	}

	public function addFeatures()
	{
		$data = Request()->validate([
			'title' => 'required',
			'summary' => '',
			'feature_image' => '',
			'feature_image.*' => 'mimes:jpg,jpeg,png,svg,gif|image',
			'status' => 'required',
			'sub_title' => '',
			'sub_summary' => '',
			'image' => 'required|mimes:jpg,jpeg,png,svg,gif|image',

		]);
		$encode = [];
		foreach($data['sub_title'] as $key=>$d)
		{
			$encode[$key]['sub_title'] = $d;
			$encode[$key]['sub_summary'] = $data['sub_summary'][$key]?$data['sub_summary'][$key]:NULL;
			$file = $data['feature_image'][$key];
			$file_name = time().$file->getClientOriginalName();
			$destinationPath = "uploads/features";
			$file->move($destinationPath,$file_name);
			$encode[$key]['image'] = $file_name;
			unset($data['sub_title'][$key]);
		}
		$encode = json_encode($encode);
		$file = $data['image'];
		$file_name = time().$file->getClientOriginalName();
		$destination = "uploads/features";
		$file->move($destination,$file_name);

		$feature = new Features();
		$feature->title = $data['title'];
		$feature->summary = $data['summary'];
		$feature->image = $file_name;
		$feature->status = $data['status'];
		$feature->features = $encode;
		$feature->save();
		Session::flash('ServiceSuccess');
		return redirect('cd-admin/view-all-features');
	}


	public function editFeatures($id)
	{
		$data = Request()->validate([
			'title' => 'required',
			'summary' => '',
			'feature_image' => '',
			'feature_image.*' => 'mimes:jpg,jpeg,png,svg,gif|image',
			'status' => 'required',
			'sub_title' => '',
			'sub_summary' => '',
			'image' => 'mimes:jpg,jpeg,png,svg,gif|image',
		]);
		$feature = Features::find($id);

		$encode = [];
		foreach(json_decode($feature->features) as $key=>$d)
		{
			$encode[$key]['sub_title'] = $data['sub_title'][$key];
			$encode[$key]['sub_summary'] = $data['sub_summary'][$key]?$data['sub_summary'][$key]:NULL;
			if(isset($data['feature_image'][$key]))
			{
				if(file_exists('uploads/'.$d->image))
				{
					unlink('uploads/'.$d->image);
				}
				$file = $data['feature_image'][$key];
				$file_name = time().$file->getClientOriginalName();
				$destinationPath = "uploads/";
				$file->move($destinationPath,$file_name);
				$encode[$key]['image'] = $file_name;
			}
			else
			{
				$encode[$key]['image'] = $d->image;
			}
			unset($data['sub_title'][$key]);
		}
		foreach($data['sub_title'] as $key1=>$sub)
		{
			$count = count($encode);
			$encode[$count]['sub_title'] = $data['sub_title'][$key1];
			$encode[$count]['sub_summary'] = $data['sub_summary'][$key1]?$data['sub_summary'][$key1]:NULL;
			$file = $data['feature_image'][$key1];
			$file_name = time().$file->getClientOriginalName();
			$destinationPath = "uploads/features";
			$file->move($destinationPath,$file_name);
			$encode[$count]['image'] = $file_name;
			unset($data['sub_title'][$key]);
		}
		if(isset($data['image']))
		{
			if(file_exists('uploads/features/'.$feature['image']))
			{
				unlink('uploads/features/'.$feature['image']);
			}
			$file = $data['image'];
			$file_name = time().$file->getClientOriginalName();
			$destination = "uploads/features";
			$file->move($destination,$file_name);
			$feature->image = $file_name;
		}
		$feature->title = $data['title'];
		$feature->summary = $data['summary'];
		$feature->status = $data['status'];
		$feature->features = json_encode($encode);
		$feature->save();
		Session::flash('ServiceUpdateSuccess');
		return redirect('cd-admin/view-all-features');
	}

	public function deleteFeatures($id)
	{
		$feature = Features::find($id);
		if(file_exists('uploads/features/'.$feature['image']))
		{
			unlink('uploads/features/'.$feature['image']);
		}
		$feature->delete();
		Session::flash('ServiceDeleteSuccess');
		return redirect('cd-admin/view-all-features');
	}
}
