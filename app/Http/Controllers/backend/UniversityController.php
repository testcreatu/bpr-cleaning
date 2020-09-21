<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UniversityRespository;
use App\Http\Requests\UniversityPost;

use App\University;
use DB;
use Session;

class UniversityController extends Controller
{
	public function addUniversity()
	{
		return view('cd-admin.university.add-university');
	}

	public function viewUniversity(UniversityRespository $repository)
	{
		$getData = $repository->viewUniversity();
    	return view('cd-admin.university.view-all-university',['getUniversity' => json_decode($getData->getContent())]);
	}

	public function insertUniversity(UniversityRespository $repository, UniversityPost $university)
	{
		$Data = $repository->create($university);
    	if(json_decode($Data->getContent())->status == 200){
    	Session::flash('success','Inserted SuccessFully... !!!');
    	return redirect()->to('cd-admin/view-all-university');}
    	else{return redirect()->back()->witherrors(['validationError'=>$responce->error]);}
	}

	public function editUniversity(UniversityRespository $repository,$key)
    {
    	$getData = $repository->editData($key);
    	if(json_decode($getData->getContent())->status == 200){
    	return view('cd-admin.university.edit-university',['getData' => json_decode($getData->getContent())->results]);}
    }

    public function updateUniversity( UniversityPost $university,UniversityRespository $repository,$key)
    {
    	$Data = $repository->updateData($university,$key);
    	if(json_decode($Data->getContent())->status == 200){
    	Session::flash('success1','Updated SuccessFully... !!!');
    	return redirect()->to('cd-admin/view-all-university');}
    	else{return redirect()->back()->witherrors(['validationError'=>$responce->error]);}
    }

    public function deleteUniversity(UniversityRespository $repository,$key)
    {
    	$getData = $repository->deleteData($key);
    	if(json_decode($getData->getContent())->status == 200){
    	Session::flash('failure','Deleted SuccessFully... !!!');
    	return redirect()->to('cd-admin/view-all-university');}
    }
}
