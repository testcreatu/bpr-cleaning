<?php
namespace App\Traits;

use Carbon\Carbon;
use App\Team;
use Illuminate\Http\Request; 
use App\Http\Controllers\ImageController;
use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;


trait teamtrait{
	use DocumentController , ImageController;

    public function insertTeam()
    {
    	$finalData = [];
    	$data = $this->validate_team();
    	$image = $this->Image($data['image']);
    	$document = $this->document($data['document']);
    	$finalData['image'] = $image;
    	$finalData['document'] = $document;
    	$merge = array_merge($data,$finalData);
    	DB::table('teams')->insert($merge);
    	Session::flash('success','Inserted SuccessFully...!!!');
    	return redirect()->to('cd-admin/view-all-team');
    }

    public function viewTeam()
    {
    	$team = Team::all();
    	return view('cd-admin.team.view-all-team',compact('team'));
    }

    public function editTeam($id)
    {
    	if($check = Team::where('id',$id)->get()->first())
    	{
    		return view('cd-admin.team.edit-team',compact('check'));
    	}
    }

    public function updateTeam($id)
    {
    	$finalData = [];
        $team = Team::where('id',$id)->get()->first();
    	$data = $this->validate_update_team();
    	if(Input::hasfile('image'))
        {
            if ($team->image && file_exists("uploads/{$team->image}")) {
                unlink("uploads/{$team->image}");}

            if ( file_exists("uploads/medium-{$team->image}")) {
                unlink("uploads/medium-{$team->image}");}

    		$image = $this->Image($data['image']);
    		$finalData['image'] = $image;
        }
	    if(Input::hasfile('document')){
		$document = $this->document($data['document']);
		$finalData['document'] = $document;}
    	$merge = array_merge($data,$finalData);
    	DB::table('teams')->where('id',$id)->update($merge);
    	Session::flash('success1','Updated SuccessFully...!!!');
    	return redirect()->to('cd-admin/view-all-team');
    }

    public function deleteTeam($id)
    {
    	if($check = Team::where('id',$id)->get()->first())
    	{
            if ($check->image && file_exists("uploads/{$check->image}")) {
                unlink("uploads/{$check->image}");}

            if ( file_exists("uploads/medium-{$check->image}")) {
                unlink("uploads/medium-{$check->image}");}
    		$check->delete();
    		Session::flash('failure','Deleted SuccessFully...!!!');
			return redirect()->to('cd-admin/view-all-team');
    	}
    }

    protected function validate_team()
    {
    	$request = Request()->all();
    	$valid = $this->validate(Request(),[
    		'name' => 'required',
    		'image' => 'required|mimes:jpeg,jpg,png,gif',
    		'altimage' => 'required',
    		'designation' => 'required',
    		'fb_link' => '',
    		'insta_link' => '',
    		'twitter_link' => '',
    		'email' => 'required',
    		'contact' => 'required',
    		'address' => 'required',
    		'birth_date' => 'required',
    		'document' => 'required|mimes:doc,pdf,docx',
    		'active' => 'required'
    		]);
    	return $valid;
    }

    protected function validate_update_team()
    {
    	$request = Request()->all();
    	$valid = $this->validate(Request(),[
    		'name' => 'required',
    		'image' => 'mimes:jpeg,jpg,png,gif',
    		'altimage' => 'required',
    		'designation' => 'required',
    		'fb_link' => '',
    		'insta_link' => '',
    		'twitter_link' => '',
    		'email' => 'required',
    		'contact' => 'required',
    		'address' => 'required',
    		'birth_date' => 'required',
    		'document' => 'mimes:doc,pdf,docx',
    		'active' => 'required'
    		]);
    	return $valid;
    }


}