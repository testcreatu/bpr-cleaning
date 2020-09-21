<?php
namespace App\Traits;

use Carbon\Carbon;
use App\Carousel;
use Illuminate\Http\Request; 
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;


trait carouseltrait{
	use ImageController;
	public function add(){
		return view('cd-admin.carousel.add-new-carousel');
	}


	public function store(){
		$FinalData = [];
		$request = Request()->all();
		$data = $this->validate_carousel();
		$image = $this->Image($data['image']);
		$FinalData['image'] = $image;
		$merge = array_merge($data,$FinalData);
		DB::table('carousels')->insert($merge);
		Session::flash('success','Inserted SuccessFully...!!!');
		return redirect()->to('cd-admin/view-all-carousel');
	}

	public function view(){
		$car = Carousel::all();
		return view('cd-admin.carousel.view-all-carousel',compact('car'));
	}
	public function editcarousel($id)
	{
		if($check = Carousel::where('id',$id)->get()->first())
		{
			return view('cd-admin.carousel.edit-carousel',compact('check'));
		}
	}

	public function updatecarousel($id){
		$FinalData = [];
		$request = Request()->all();
		$car = Carousel::where('id',$id)->get()->first();
		$data = $this->validate_update_carousel();
		if(Input::hasfile('image'))
		{
			if ($car->image && file_exists("uploads/{$car->image}")) {
				unlink("uploads/{$car->image}");}
				if (file_exists("uploads/medium-{$car->image}")) {
					unlink("uploads/medium-{$car->image}");}

					$image = $this->Image($data['image']);
					$FinalData['image'] = $image;
				}
			
				$merge = array_merge($data,$FinalData);
				DB::table('carousels')->where('id',$id)->update($merge);
				Session::flash('success1','Updated SuccessFully...!!!');
				return redirect()->to('cd-admin/view-all-carousel');
	}

	public function deletecarousel($id){
		if($check = Carousel::where('id',$id)->get()->first())
				{
					if ($check->image && file_exists("uploads/{$check->image}")) {
						unlink("uploads/{$check->image}");}
						if (file_exists("uploads/medium-{$check->image}")) {
							unlink("uploads/medium-{$check->image}");}

							$check->delete();
							Session::flash('failure','Deleted SuccessFully...!!!');
							return redirect()->to('cd-admin/view-all-carousel');
						}
				
	}




	public function validate_carousel()
	{
		$request = Request()->all();
		$valid = $this->validate(Request(),[
			'image' => 'required|mimes:jpeg,jpg,png,gif',
			'altimage' => 'required',
			'description' => 'required',
			'active' => 'required'
		]);
		return $valid;
	}

	public function validate_update_carousel()
	{
		$request = Request()->all();
		$valid = $this->validate(Request(),[
			'image' => 'mimes:jpeg,jpg,png,gif',
			'altimage' => 'required',
			'description' => 'required',
			'active' => 'required'
		]);
		return $valid;
	}

}
?>