<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Features;
use App\Http\Controllers\backend\ImageController;
class FeaturesController extends Controller
{
	use ImageController;
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
			'image' => 'required|mimes:jpg,jpeg,png,svg,gif|image',
			'status' => 'required',

		]);
		$feature = new Features();
		$feature->title = $data['title'];
		$feature->summary = $data['summary'];
		$feature->image = $this->uploadImage($data['image'],'uploads/features');
		$feature->status = $data['status'];
		$feature->save();
		Session::flash('ServiceSuccess');
		return redirect('cd-admin/view-features');
	}


	public function editFeatures($id)
	{
		$data = Request()->validate([
			'title' => 'required',
			'summary' => '',
			'image' => 'mimes:jpg,jpeg,png,svg,gif|image',
			'status' => 'required',

		]);
		$feature = Features::find($id);
		$feature->title = $data['title'];
		$feature->summary = $data['summary'];
		if(isset($data['image']))
		{
			$this->unlinkImage('uploads/features/'.$feature['image']);
			$this->unlinkImage('uploads/thumbnail/'.$feature['image']);
			$feature->image = $this->uploadImage($data['image'],'uploads/features');
		}
		$feature->status = $data['status'];
		$feature->save();
		Session::flash('ServiceUpdateSuccess');
		return redirect('cd-admin/view-features');
	}

	public function deleteFeatures($id)
	{
		$feature = Features::find($id);
		$this->unlinkImage('uploads/features/'.$feature['image']);
		$this->unlinkImage('uploads/thumbnail/'.$feature['image']);
		$feature->delete();
		Session::flash('ServiceDeleteSuccess');
		return redirect('cd-admin/view-features');
	}
}
