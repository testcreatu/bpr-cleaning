<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\DetailRespository;
use App\Http\Requests\DetailPost;

use App\CourseDetail;
use App\Courses;
use App\Level;
use App\University;
use DB;
use Session;

class DetailController extends Controller
{
    public function addCoursesDetail()
	{
		$getLevel = Level::where('status','1')->get();
		$getUniversity = University::where('status','1')->get();
		return view('cd-admin.detail.add-courses-detail',compact('getLevel','getUniversity'));
	}

	public function viewCoursesDetail(DetailRespository $repository)
	{
		$getData = $repository->viewCoursesDetail();
    	return view('cd-admin.detail.view-all-courses-detail',['getCoursesDetail' => json_decode($getData->getContent())]);
	}

	public function insertCoursesDetail(DetailRespository $repository, DetailPost $detail)
	{
		$Data = $repository->create($detail);
    	if(json_decode($Data->getContent())->status == 200){
    	Session::flash('success','Inserted SuccessFully... !!!');
    	return redirect()->to('cd-admin/view-all-courses-detail');}
    	else{return redirect()->back()->witherrors(['validationError'=>$responce->error]);}
	}

	public function editCoursesDetail(DetailRespository $repository,$key)
    {
    	$getData = $repository->editData($key);
    	if(json_decode($getData->getContent())->status == 200){
    	return view('cd-admin.detail.edit-courses-detail',['getData' => json_decode($getData->getContent())->results]);}
    }

    public function updateCoursesDetail( DetailPost $detail,DetailRespository $repository,$key)
    {
    	$Data = $repository->updateData($detail,$key);
    	if(json_decode($Data->getContent())->status == 200){
    	Session::flash('success1','Updated SuccessFully... !!!');
    	return redirect()->to('cd-admin/view-all-courses-detail');}
    	else{return redirect()->back()->witherrors(['validationError'=>$responce->error]);}
    }

    public function deleteCoursesDetail(DetailRespository $repository,$key)
    {
    	$getData = $repository->deleteData($key);
    	if(json_decode($getData->getContent())->status == 200){
    	Session::flash('failure','Deleted SuccessFully... !!!');
    	return redirect()->to('cd-admin/view-all-courses-detail');}
    }


    public function ViewDetail(DetailRespository $repository,$key)
    {
    	$getData = $repository->viewDetail($key);
    	return view('cd-admin.detail.view-all-detail',['getDetail' => json_decode($getData->getContent())]);
	}

	public function deleteDetail(DetailRespository $repository,$key,$id)
	{
		$getData = $repository->delete($key);
    	if(json_decode($getData->getContent())->status == 200){
    	Session::flash('failure','Deleted SuccessFully... !!!');
    	return redirect()->to('cd-admin/view-courses-detail/'.$id);}
	}

	public function addDetail($key)
	{
		$key = $key;
		return view('cd-admin.detail.add-detail',compact('key'));
	}

	public function insertDetail(DetailRespository $repository,$key)
	{
		$Data = $repository->createDetail($key);
    	if(json_decode($Data->getContent())->status == 200){
    	Session::flash('success','Inserted SuccessFully... !!!');
    	return redirect()->to('cd-admin/view-courses-detail/'.$key);}
    	else{return redirect()->back()->witherrors(['validationError'=>$responce->error]);}
	}

	public function editDetail(DetailRespository $repository,$key)
	{
		$getData = $repository->edit($key);
    	if(json_decode($getData->getContent())->status == 200){
    	return view('cd-admin.detail.edit-detail',['getData' => json_decode($getData->getContent())->results]);}
	}

	public function updateDetail(DetailRespository $repository,$key)
	{
		$Data = $repository->update($key);
		$test = CourseDetail::where('id',$key)->get()->first();
    	if(json_decode($Data->getContent())->status == 200){
    	Session::flash('success1','Updated SuccessFully... !!!');
    	return redirect()->to('cd-admin/view-courses-detail/'.$test['courses_id']);}
    	else{return redirect()->back()->witherrors(['validationError'=>$responce->error]);}
	}
}
