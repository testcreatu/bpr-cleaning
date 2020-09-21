<?php
namespace App\Traits;

use Carbon\Carbon;
use App\About;
use Illuminate\Http\Request; 
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SlugController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


trait abouttrait{
	use ImageController;
	public function aboutform(){
		return view('cd-admin.about.add-new-about');
	}

	public function view(){
		$about = About::get()->first();
		return view('cd-admin.about.view-all-about',compact('about'));
	}

	public function edit(){
		$about =  About::get()->first();
		return view('cd-admin.about.edit-about',compact('about'));
	}

	public function store(){
		$a=[];
		$data = $this->insertcontrol();
		$sub_title = Request()->sub_title;
		$sub_description = Request()->sub_description;
		$section_image = Request()->section_image;
		$encode = [];
		foreach($sub_title as $key=>$d)
		{
			$encode[$key]['sub_title'] = $d;
			$encode[$key]['sub_description'] = $sub_description[$key]?$sub_description[$key]:NULL;
			$file = $section_image[$key];
			$file_name = time().$file->getClientOriginalName();
			$destinationPath = "uploads/";
			$file->move($destinationPath,$file_name);
			$encode[$key]['image'] = $file_name;
			unset($sub_title[$key]);
		}
		$background_image = $data['background_image'];
		$background_image_filename = time().$file->getClientOriginalName();
		$background_imageDestination = "uploads/";
		$background_image->move($background_imageDestination,$background_image_filename);
		$finalEncode = json_encode($encode);
		$test = $this->Image($data['image']);
		$a['image'] = $test;
		$a['background_image'] = $background_image_filename;
		$a['created_at'] =Carbon::now('Asia/Kathmandu');
		$a['sections'] = $finalEncode;
		$replace = array_replace($data,$a);
		dd($replace);
		DB::table('abouts')->Insert($replace);
		Session::flash('success');
		return redirect('/cd-admin/view-all-about');
	}

	public function update(){
		$data = $this-> updatevalidation();
		$test = DB::table('abouts')->get()->first();
		$sub_title = Request()->sub_title;
		$sub_description = Request()->sub_description;
		$section_image = Request()->section_image;
		$encode = [];
		foreach(json_decode($test->sections) as $key=>$d)
		{
			$encode[$key]['sub_title'] = $sub_title[$key];
			$encode[$key]['sub_description'] = $sub_description[$key]?$sub_description[$key]:NULL;
			if(isset($section_image[$key]))
			{
				if(file_exists('uploads/'.$d->image))
				{
					unlink('uploads/'.$d->image);
				}
				$file = $section_image[$key];
				$file_name = time().$file->getClientOriginalName();
				$destinationPath = "uploads/";
				$file->move($destinationPath,$file_name);
				$encode[$key]['image'] = $file_name;
			}
			else
			{
				$encode[$key]['image'] = $d->image;
			}
			unset($sub_title[$key]);
		}
		foreach($sub_title as $key1=>$sub)
		{
			$count = count($encode);
			$encode[$count]['sub_title'] = $sub_title[$key1];
			$encode[$count]['sub_description'] = $sub_description[$key1]?$sub_description[$key1]:NULL;
			$file = $section_image[$key1];
			$file_name = time().$file->getClientOriginalName();
			$destinationPath = "uploads/";
			$file->move($destinationPath,$file_name);
			$encode[$count]['image'] = $file_name;
			unset($sub_title[$key]);
		}
		if(isset($data['image'])){
			if (file_exists('uploads/'.$test->image)) 
			{
				unlink('uploads/'.$test->image);
			}
			$test = $this->Image($data['image']);
			$a['image'] = $test ;
		}
		if(isset($data['background_image'])){
			if (file_exists('uploads/'.$test->background_image)) 
			{
				unlink('uploads/'.$test->background_image);
			}
			$background_image = $this->Image($data['background_image']);
			$a['background_image'] = $background_image ;
		}
		$a['updated_at'] =Carbon::now('Asia/Kathmandu');
		$a['sections'] = json_encode($encode);
		$replace = array_replace($data,$a);

		$data = DB::table('abouts')->update($replace);

		Session::flash('success1');
		return redirect('/cd-admin/view-all-about');
	}

	public function insertcontrol()
	{
		$request =Request()->all();
		$data =  Request()->validate([
			'title'=>'required',   
			'summary'=>'required',
			'altimage' => 'required',
			'image' => 'required|image',
			'description' => 'required',
			'quote' => '',
			'background_image' => 'required|image',
			'sub_text' => '',
		]);
		return $data;
	}
	public function updatevalidation()
	{
		$request =Request()->all();
		$data =  Request()->validate([
			'title'=>'required',   
			'summary'=>'required',
			'altimage' => 'required',
			'image' => 'image',
			'description' => 'required',
			'background_image' => 'image',
			'sub_text' => '',
			'quote' => '',
		]);
		return $data;
	}







}

?>