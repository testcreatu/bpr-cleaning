<?php
namespace App\Traits;

use Carbon\Carbon;
use App\Objective;
use Illuminate\Http\Request; 
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SlugController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


trait objectivetrait{
	use ImageController;
	public function aboutform(){
		return view('cd-admin.objective.add-new-objective');
	}

	public function view(){
		$about = Objective::get();
		return view('cd-admin.objective.view-all-objective',compact('about'));
	}

	public function edit($id){
		$data =  Objective::find($id);
		return view('cd-admin.objective.edit-objective',compact('data'));
	}

	public function store(){
		$a=[];
		$data = $this->insertcontrol();
		$finalMilestone = [];
		foreach($data['name'] as $key => $milestone)
		{
			$finalMilestone[$key]['name'] = $milestone;
			$finalMilestone[$key]['number'] = $data['number'][$key] != NULL ?$data['number'][$key]:'';
			unset($data['name'][$key]);
		}
		$finalMilestone = json_encode($finalMilestone);
		unset($data['name']);
		unset($data['number']);
		$test = $this->Image($data['image']);
		$a['image'] = $test;
		$a['milestones'] = $finalMilestone;
		$a['created_at'] =Carbon::now('Asia/Kathmandu');
		$replace = array_replace($data,$a);
		DB::table('objectives')->Insert($replace);
		Session::flash('success');
		return redirect('/cd-admin/view-all-objective');
	}

	public function update($id){
		$data = $this-> updatevalidation();

		$test = DB::table('objectives')->get()->first();
		if(isset($data['image'])){
			if (file_exists('uploads/'.$test->image)) 
			{
				unlink('uploads/'.$test->image);
			}


			$test = $this->Image($data['image']);
			$a['image'] = $test ;
		}
		$a['updated_at'] =Carbon::now('Asia/Kathmandu');
		$finalMilestone = [];
		foreach($data['name'] as $key => $milestone)
		{
			$finalMilestone[$key]['name'] = $milestone;
			$finalMilestone[$key]['number'] = $data['number'][$key] != NULL ?$data['number'][$key]:'';
			unset($data['name'][$key]);
		}
		$finalMilestone = json_encode($finalMilestone);
		unset($data['name']);
		unset($data['number']);
		$a['milestones'] = $finalMilestone;
		$replace = array_replace($data,$a);
		$data = DB::table('objectives')->where('id',$id)->update($replace);

		Session::flash('success1');
		return redirect('/cd-admin/view-all-objective');
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
			'name' => '',
			'number' => '',
			'type' => 'required',
			'status' => 'required',
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
			'name' => '',
			'number' => '',
			'type' => 'required',
			'status' => 'required',
		]);
		return $data;
	}

	public function delete($id)
	{
		$why = Objective::find($id);
		if(file_exists('uploads/'.$why['image']) && $why['image'] != NULL)
		{
			unlink('uploads/'.$why['image']);
		}
		$why->delete();
		Session::flash('failure');
		return redirect('/cd-admin/view-all-objective');
	}







}

?>