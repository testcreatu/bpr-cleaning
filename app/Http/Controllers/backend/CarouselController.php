<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\backend\ImageController;
use App\Carousel;
use DB;
use Session;
class CarouselController extends Controller
{
	use ImageController;
	public function addCarouselForm()
	{
		return view('cd-admin.carousel.add-carousel');
	}
	public function addCarousel()
	{
		$FinalData = [];
		$request = Request()->all();
		$data = $this->addValidate();
		$FinalData['image'] = $this->uploadImage($data['image'],'uploads/carousel');
		$merge = array_merge($data,$FinalData);
		DB::table('carousels')->insert($merge);
		Session::flash('success');
		return redirect()->to('cd-admin/view-carousel');
	}

	public function viewCarousel()
	{
		$car = Carousel::all();
		return view('cd-admin.carousel.view-carousel',compact('car'));
	}
	public function editCarouselForm($id)
	{
		if($data = Carousel::where('id',$id)->get()->first())
		{
			return view('cd-admin.carousel.edit-carousel',compact('data'));
		}
	}

	public function editCarousel($id)
	{
		$FinalData = [];
		$request = Request()->all();
		$car = Carousel::where('id',$id)->get()->first();
		$data = $this->editValidate();
		if(isset($data['image']))
		{
			$this->unlinkImage('uploads/carousel/'.$car['image']);
			$this->unlinkImage('uploads/thumbnail/'.$car['image']);
			$FinalData['image'] = $this->uploadImage($data['image'],'uploads/carousel');
		}
		$merge = array_merge($data,$FinalData);
		DB::table('carousels')->where('id',$id)->update($merge);
		Session::flash('success1');
		return redirect()->to('cd-admin/view-carousel');
	}

	public function deleteCarousel($id)
	{
		if($check = Carousel::where('id',$id)->get()->first())
		{
			$this->unlinkImage('uploads/carousel/'.$check['image']);
			$this->unlinkImage('uploads/thumbnail/'.$check['image']);
			$check->delete();
			Session::flash('failure');
			return redirect()->to('cd-admin/view-carousel');
		}

	}


	public function addValidate()
	{
		$request = Request()->all();
		$valid = $this->validate(Request(),[
			'image' => 'required|mimes:jpeg,jpg,png,gif',
			'altimage' => 'required',
				// 'description' => 'required',
			'status' => 'required'
		]);
		return $valid;
	}

	public function editValidate()
	{
		$request = Request()->all();
		$valid = $this->validate(Request(),[
			'image' => 'mimes:jpeg,jpg,png,gif',
			'altimage' => 'required',
				// 'description' => 'required',
			'status' => 'required'
		]);
		return $valid;
	}

}
