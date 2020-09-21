<?php
namespace App\Traits;

use Carbon\Carbon;
use App\Testimonial;
use Illuminate\Http\Request; 
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

trait testimonialtrait{
	public function AddTestimonial()
	{
		return view('cd-admin.testimonial.add-new-testimonial');
	}

	public function InsertTestimonial()
	{
		$request = Request()->all();
		$data = $this->validate_Testimonial();
		DB::table('testimonials')->insert($data);
		Session::flash('success','Inserted SuccessFully...!!!');
		return redirect()->to('cd-admin/view-all-testimonial');

	}

	public function ViewTestimonial()
	{
		$test = Testimonial::all();
		return view('cd-admin.testimonial.view-all-testimonial',compact('test'));
	}

	public function EditTestimonial($id)
	{
		if($check = Testimonial::where('id',$id)->get()->first())
		{
			return view('cd-admin.testimonial.edit-testimonial',compact('check'));
		}
	}

	public function updateTestimonial($id)
	{
		$data = $this-> updatevalidation();

		$test = Testimonial::where('id',$id)->get()->first();
		if(isset($data['image'])){
			if (file_exists('uploads/'.$test->image)) 
			{
				unlink('uploads/'.$test->image);
			}


			$test = $this->Image($data['image']);
			$a['image'] = $test ;
		}
		$a['updated_at'] =Carbon::now('Asia/Kathmandu');
		$replace = array_replace($data,$a);

		$data = DB::table('testimonials')->update($replace);

		Session::flash('success1');
		return redirect('/cd-admin/view-all-testimonial');
	}

	public function DeleteTestimonial($id)
	{
		if($check = DB::table('testimonials')->where('id',$id)->get()->first())
		{
			DB::table('testimonials')->where('id',$id)->delete();
			Session::flash('failure','Deleted SuccessFully...!!!');
			return redirect()->to('cd-admin/view-all-testimonial');
		}
	}

	public function validate_Testimonial()
	{
		$request = Request()->all();
		$valid = $this->validate(Request(),[
			'title' => 'required',
			'description' => 'required',
			'altimage' => 'required',
			'active' => 'required',
			'image' =>'required|image',

		]);
		return $valid;
	}

	public function validate_update_Testimonial()
	{
		$request = Request()->all();
		$valid = $this->validate(Request(),[
			'title' => 'required',
			'description' => 'required',
			'altimage' => 'required',
			'active' => 'required',
			'image' =>'image',
		]);
		return $valid;
	}

}

?>