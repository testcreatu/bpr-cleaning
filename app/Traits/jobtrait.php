<?php
namespace App\Traits;

use App\Job;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait jobtrait
{
	public function add(){
		return view('cd-admin.job.add-available-job');
	}

	public function store(){
		$a=[];
		$data = $this->insertcontrol();
		$a['created_at'] =Carbon::now('Asia/Kathmandu');
		$replace = array_replace($data,$a);
		DB::table('jobs')->Insert($replace);
		
		Session::flash('success');
		return redirect('/cd-admin/view-available-job');
	}

	public function view(){
		$sch=Job::get();
		return view('cd-admin.job.view-available-job',compact('sch'));
	}


	public function edit($id)
	{
		$ser = Job::where('id',$id)->get()->first();
		return view('cd-admin.job.edit-available-job',compact('ser'));
	}

	public function insertcontrol(){
		$request =Request()->all();
		$data =  Request()->validate([
			'title' => 'required',
			'link' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
		]);
		return $data;
	}


	public function updatevalidation(){
		$request =Request()->all();
		$data =  Request()->validate([
			'title' => 'required',
			'link' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
		]);
		return $data;
	}

	public function delete_Job($id){
		if($check = Job::where('id',$id)->get()->first())
			{$check->delete();
				Session::flash('failure','Deleted SuccessFully...!!!');
				return redirect()->to('cd-admin/view-available-job');
			}

		}

		public function update_Job($id){
			$data = $this-> updatevalidation();
			$test = DB::table('jobs')->where('id',$id)->get()->first();
			$a['updated_at'] =Carbon::now('Asia/Kathmandu');

			$replace = array_replace($data,$a);

			$data = DB::table('jobs')->where('id',$id)->update($replace);

			Session::flash('success1');
			return redirect('/cd-admin/view-available-job');

		}

	}
	?>