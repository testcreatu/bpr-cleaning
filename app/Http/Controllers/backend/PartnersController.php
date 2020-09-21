<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Partners;
use Session;
use App\Http\Controllers\backend\ImageController;
class PartnersController extends Controller
{
	use ImageController;
	public function viewPartners()
	{
		$partners = Partners::get();
		return view('cd-admin.partners.view-partner',compact('partners'));
	}
	public function addPartnersForm()
	{
		return view('cd-admin.partners.add-partner');
	}
	public function editPartnersForm($id)
	{
		$data = Partners::find($id);
		return view('cd-admin.partners.edit-partner',compact('data'));
	}

	public function addPartners()
	{
		$data = $this->addValidate();
		$partners = new Partners();
		$partners->name = $data['name'];
		$partners->url = $data['url'];
		$partners->status = $data['status'];
		$partners->logo_image = $this->uploadImage($data['logo_image'],'uploads/partners');
		$partners->save();
		Session::flash('PartnersSuccess');
		return redirect('cd-admin/view-partners');
	}

	public function editPartners($id)
	{
		$data = $this->editValidate();
		$partners = Partners::find($id);
		if(isset($data['logo_image']))
		{
			$this->unlinkImage('uploads/partners/'.$partners['logo_image']);
			$this->unlinkImage('uploads/thumbnail/'.$partners['logo_image']);
			$partners->logo_image = $this->uploadImage($data['logo_image'],'uploads/partners');
		}
		$partners->name = $data['name'];
		$partners->url = $data['url'];
		$partners->status = $data['status'];
		$partners->save();
		Session::flash('PartnersUpdateSuccess');
		return redirect('cd-admin/view-partners');
	}

	public function deletePartners($id)
	{
		$partner = Partners::find($id);
		if(isset($partner['logo_image']))
		{
			$this->unlinkImage('uploads/partners/'.$partner['logo_image']);
			$this->unlinkImage('uploads/thumbnail/'.$partner['logo_image']);
		}
		$partner->delete();
		Session::flash('PartnersDeleteSuccess');
		return redirect('cd-admin/view-partners');
	}

	public function addValidate()
	{
		$data = Request()->validate([
			'name' => 'required',
			'url' => '',
			'logo_image' => 'required|image|mimes:jpeg,png,svg,jpg,gif',
			'status' => 'required',
		]);
		return $data;
	}

	public function editValidate()
	{
		$data = Request()->validate([
			'name' => 'required',
			'url' => '',
			'logo_image' => 'image|mimes:jpeg,png,svg,jpg,gif',
			'status' => 'required',
		]);
		return $data;
	}
}
