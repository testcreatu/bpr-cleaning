<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\backend\ImageController;
use App\Testimonial;
use DB;
use Session;
use Carbon\Carbon;
class TestimonialController extends Controller
{
	use ImageController;
	public function addTestimonialForm()
	{
		return view('cd-admin.testimonial.add-testimonial');
	}

	public function addTestimonial()
	{
		$request = Request()->all();
		$data = $this->addValidate();
		$a['image'] = $this->uploadImage($data['image'],'uploads/testimonials');
		$a['created_at'] = Carbon::now('Asia/Kathmandu');
		$replace = array_replace($data,$a);
		DB::table('testimonials')->insert($replace);
		Session::flash('success');
		return redirect()->to('cd-admin/view-testimonial');

	}

	public function viewTestimonial()
	{
		$test = Testimonial::all();
		return view('cd-admin.testimonial.view-testimonial',compact('test'));
	}

	public function editTestimonialForm($id)
	{
		if($check = Testimonial::where('id',$id)->get()->first())
		{
			return view('cd-admin.testimonial.edit-testimonial',compact('check'));
		}
	}

	public function editTestimonial($id)
	{
		$data = $this-> editValidate();

		$test = Testimonial::where('id',$id)->get()->first();
		if(isset($data['image']))
		{
			$this->unlinkImage('uploads/testimonials/'.$test['image']);
			$this->unlinkImage('uploads/thumbnail/'.$test['image']);
			$a['image'] = $this->uploadImage($data['image'],'uploads/testimonials');
		}

		$a['updated_at'] =Carbon::now('Asia/Kathmandu');
		$replace = array_replace($data,$a);
		$data = DB::table('testimonials')->where('id',$id)->update($replace);

		Session::flash('success1');
		return redirect('/cd-admin/view-testimonial');
	}

	public function deleteTestimonial($id)
	{
		if($check = DB::table('testimonials')->where('id',$id)->get()->first())
		{
			$this->unlinkImage('uploads/testimonials/'.$check->image);
			$this->unlinkImage('uploads/thumbnail/'.$check->image);
			DB::table('testimonials')->where('id',$id)->delete();
			Session::flash('failure');
			return redirect()->to('cd-admin/view-testimonial');
		}
	}

	public function addValidate()
	{
		$request = Request()->all();
		$valid = $this->validate(Request(),[
			'name' => 'required',
			'description' => 'required',
			'status' => 'required',
			'image' =>'required|image',

		]);
		return $valid;
	}

	public function editValidate()
	{
		$request = Request()->all();
		$valid = $this->validate(Request(),[
			'name' => 'required',
			'description' => 'required',
			'status' => 'required',
			'image' =>'image',
		]);
		return $valid;
	}
}
