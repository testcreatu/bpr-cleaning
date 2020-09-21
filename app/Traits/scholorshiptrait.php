<?php
namespace App\Traits;

use App\Scholorship;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait scholorshiptrait
{
	public function add(){
		return view('cd-admin.scholorship.add-available-scholorship');
	}

	public function store(){
		$a=[];
		$data = $this->insertcontrol();
		$a['created_at'] =Carbon::now('Asia/Kathmandu');
		$replace = array_replace($data,$a);
		DB::table('scholorships')->Insert($replace);

		Session::flash('success');
		return redirect('/cd-admin/view-available-scholorship');
	}

	public function view(){
		$sch=Scholorship::get();
		return view('cd-admin.scholorship.view-available-scholorship',compact('sch'));
	}


	public function edit($id)
	{
		$ser = Scholorship::where('id',$id)->get()->first();
		return view('cd-admin.scholorship.edit-available-scholorship',compact('ser'));
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

	public function delete_Scholorship($id){
		if($check = Scholorship::where('id',$id)->get()->first())
			{$check->delete();
				Session::flash('failure','Deleted SuccessFully...!!!');
				return redirect()->to('cd-admin/view-available-scholorship');
			}

		}

		public function update_Scholorship($id){
			$data = $this-> updatevalidation();
			$test = DB::table('scholorships')->where('id',$id)->get()->first();
			$a['updated_at'] =Carbon::now('Asia/Kathmandu');

			$replace = array_replace($data,$a);

			$data = DB::table('scholorships')->where('id',$id)->update($replace);

			Session::flash('success1');
			return redirect('/cd-admin/view-available-scholorship');

		}

	}
	?>