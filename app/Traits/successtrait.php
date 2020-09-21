<?php
namespace App\Traits;

use Carbon\Carbon;
use App\Success;
use Illuminate\Http\Request; 
use App\Traits\imagetrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

trait successtrait
{
	use imagetrait;
	public function add(){
		return view('cd-admin.success-story.add-new-success-story');
	}

	public function store(){

		$a=[];
		$data = $this->insertcontrol();
		$test = $this->insertimage($data['image']);
		$a['image'] = $test;
		$a['created_at'] =Carbon::now('Asia/Kathmandu');
		$replace = array_replace($data,$a);
		DB::table('successes')->Insert($replace);
		Session::flash('success');
		return redirect('/cd-admin/view-success-story');



	}
	public function view(){
		$success = Success::get();
		return view('cd-admin.success-story.view-success-story',compact('success'));
	}

	public function edit($id){
		$check= Success::where('id',$id)->get()->first();
		return view('cd-admin.success-story.edit-success-story',compact('check'));
	}

	public function update($id){
		$data = $this-> updatevalidation();
		$test = Success::where('id',$id)->get()->first();
		if(isset($data['image'])){
			if (file_exists('imageupload/'.$test->image)) 
			{
				unlink('imageupload/'.$test->image);
			}


			$test = $this->insertimage($data['image']);
			$a['image'] = $test ;
		}
		$a['updated_at'] =Carbon::now('Asia/Kathmandu');

		$replace = array_replace($data,$a);
		$data = DB::table('successes')->where('id',$id)->update($replace);
		Session::flash('success1');
		return redirect('/cd-admin/view-success-story');
	}

	public function delete($id){
		$test = DB::table('successes')->where('id',$id)->get()->first();
		if (file_exists('imageupload/'.$test->image)) 
		{
			unlink('imageupload/'.$test->image);
		}
		DB::table('successes')->where('id',$id)->delete();
		Session::flash('failure');
		return redirect('/cd-admin/view-success-story');

	}




	public function insertcontrol()
	{
		$data =  Request()->validate([
			'name' => 'required',
			'description' => 'required',
			'altimage' => 'required',
			'active' => 'required',
			'image' => 'required|image',
		]);
		return $data;
	}

	public function updatevalidation()
	{

		$data =  Request()->validate([
			'name' => 'required',
			'description' => 'required',
			'altimage' => 'required',
			'active' => 'required',
			'image' => 'image',
		]);
		return $data;
	}



}
?>	