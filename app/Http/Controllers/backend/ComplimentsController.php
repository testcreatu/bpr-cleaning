<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\backend\ImageController;
use Session;
use DB;
use Illuminate\Support\Str;
use App\Compliments;
use Carbon\Carbon;
class ComplimentsController extends Controller
{
	use ImageController;


	public function addComplimentsForm()
	{
		return view('cd-admin.compliments.add-compliments');
	}
	public function addCompliments()
	{
		$finalData = [];
		$data = $this->addValidate();
		$encodeReasons = [];
		$encodeMeasure = [];
		foreach($data['sub_title'] as $key=>$reason)
		{
			$encodeReasons[$key]['sub_title'] = $reason;
			$encodeReasons[$key]['sub_summary'] = $data['sub_summary'][$key]?$data['sub_summary'][$key]:'';
			$encodeReasons[$key]['image'] = isset($data['sub_image'][$key])?$this->uploadImage($data['sub_image'][$key],'uploads/compliments'):'';
			unset($data['sub_title'][$key]);
		}
		$finalData['reasons'] = json_encode($encodeReasons);
		foreach($data['measures_title'] as $key=>$measures)
		{
			$encodeMeasure[$key]['title'] = $measures;
			$encodeMeasure[$key]['summary'] = $data['measures_summary'][$key]?$data['measures_summary'][$key]:'';
			unset($data['measures_title'][$key]);
		}
		$finalData['measures'] = json_encode($encodeMeasure);
		$finalData['slug'] = Str::slug($data['title']);
		$finalData['image'] = $this->uploadImage($data['image'],'uploads/compliments');
		$finalData['quote_image'] =$this->uploadImage($data['quote_image'],'uploads/compliments');
		unset($data['sub_summary']);
		unset($data['sub_title']);
		unset($data['sub_image']);
		unset($data['measures_title']);
		unset($data['measures_summary']);
		$merge = array_merge($data,$finalData);
		DB::table('compliments')->insert($merge);
		Session::flash('success');
		return redirect()->to('cd-admin/view-compliments');
	}

	public function viewCompliments()
	{
		$compliments = Compliments::all();
		return view('cd-admin.compliments.view-compliments',compact('compliments'));
	}

	public function editComplimentsForm($id)
	{
		if($data = Compliments::where('id',$id)->get()->first())
		{
			return view('cd-admin.compliments.edit-compliments',compact('data'));
		}
	}

	public function editCompliments($id)
	{
		$data = $this->editValidate();
		$test = Compliments::find($id);
		$encode = [];
		$encodeMeasure = [];
		foreach(json_decode($test->reasons) as $key=>$d)
		{
			$encode[$key]['sub_title'] = $data['sub_title'][$key]?$data['sub_title'][$key]:'';
			$encode[$key]['sub_summary'] = $data['sub_summary'][$key]?$data['sub_summary'][$key]:NULL;
			if(isset($data['sub_image'][$key]))
			{
				if($d->image != NULL)
				{
					$this->unlinkImage('uploads/compliments/'.$d->image);
					$this->unlinkImage('uploads/thumbnail/'.$d->image);
				}
				$encode[$key]['image'] = isset($data['sub_image'][$key])?$this->uploadImage($data['sub_image'][$key],'uploads/compliments'):'';
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
			$encode[$count]['sub_title'] = $sub_title[$key1];
			$encode[$count]['sub_summary'] = $sub_description[$key1]?$sub_description[$key1]:NULL;
			$encode[$count]['image'] = isset($data['sub_image'][$key1])?$this->uploadImage($data['sub_image'][$key1],'uploads/compliments'):'';
			unset($data['sub_title'][$key1]);
		}
		if(isset($data['image'])){
			$this->unlinkImage('uploads/compliments/'.$test['image']);
			$this->unlinkImage('uploads/thumbnail/'.$test['image']);
			$a['image'] = $this->uploadImage($data['image'],'uploads/compliments');
		}
		if(isset($data['quote_image'])){
			$this->unlinkImage('uploads/compliments/'.$test['quote_image']);
			$this->unlinkImage('uploads/thumbnail/'.$test['image']);
			$a['quote_image'] = $this->uploadImage($data['quote_image'],'uploads/compliments');
		}

		foreach($data['measures_title'] as $key=>$measures)
		{
			$encodeMeasure[$key]['title'] = $measures;
			$encodeMeasure[$key]['summary'] = $data['measures_summary'][$key]?$data['measures_summary'][$key]:'';
			unset($data['measures_title'][$key]);
		}
		$a['measures'] = json_encode($encodeMeasure);
		$a['updated_at'] =Carbon::now('Asia/Kathmandu');
		$a['reasons'] = json_encode($encode);
		unset($data['sub_summary']);
		unset($data['sub_title']);
		unset($data['sub_image']);
		unset($data['measures_title']);
		unset($data['measures_summary']);
		$replace = array_replace($data,$a);
		$data = DB::table('compliments')->where('id',$id)->update($replace);

		Session::flash('success1');
		return redirect('/cd-admin/view-compliments');
	}

	public function deleteCompliments($id)
	{
		if($check = Compliments::where('id',$id)->get()->first())
		{
			$this->unlinkImage('uploads/compliments/'.$check['image']);
			$this->unlinkImage('uploads/thumbnail/'.$check['image']);
			$this->unlinkImage('uploads/compliments/'.$check['quote_image']);
			$this->unlinkImage('uploads/thumbnail/'.$check['quote_image']);
			$check->delete();
			Session::flash('failure');
			return redirect()->to('cd-admin/view-compliments');
		}
	}

	protected function addValidate()
	{
		$request = Request()->all();
		$valid = $this->validate(Request(),[
			'title' => 'required',
			'image' => 'required|mimes:jpeg,jpg,png,gif',
			'quote' => '',
			'sub_text' => '',
			'sub_title' => '',
			'sub_summary' => '',
			'sub_image' => '',
			'sub_image.*' => 'image|mimes:jpeg,jpg,png,gif',
			'measures_title' => '',
			'measures_summary' => '',
			'seo_title' => 'required',
			'seo_keyword' => 'required',
			'seo_description' => 'required',
			'status' => 'required',
			'quote_image' => 'required|image|mimes:jpeg,jpg,png,gif',
		]);
		return $valid;
	}

	protected function editValidate()
	{
		$request = Request()->all();
		$valid = $this->validate(Request(),[
			'title' => 'required',
			'image' => 'mimes:jpeg,jpg,png,gif',
			'quote' => '',
			'sub_text' => '',
			'sub_title' => '',
			'sub_summary' => '',
			'sub_image' => '',
			'sub_image.*' => 'image|mimes:jpeg,jpg,png,gif',
			'measures_title' => '',
			'measures_summary' => '',
			'seo_title' => 'required',
			'seo_keyword' => 'required',
			'seo_description' => 'required',
			'status' => 'required',
			'quote_image' => 'image|mimes:jpeg,jpg,png,gif',
		]);
		return $valid;
	}
}
