<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\LevelRespository;
use App\Http\Requests\LevelPost;

use App\Level;
use DB;
use Session;

class LevelController extends Controller
{
    public function addCourseLevel()
    {
      return view('cd-admin.level.add-course-level');
  }

  public function viewCourseLevel(LevelRespository $repository)
  {
      $getData = $repository->viewUniversity();
      return view('cd-admin.level.view-course-level',['getCourseLevel' => json_decode($getData->getContent())]);
  }

  public function insertCourseLevel(LevelRespository $repository, LevelPost $level)
  {
      $Data = $repository->create($level);
      if(json_decode($Data->getContent())->status == 200){
       Session::flash('success','Inserted SuccessFully... !!!');
       return redirect()->to('cd-admin/view-all-course-level');}
       else{return redirect()->back()->witherrors(['validationError'=>$responce->error]);}
   }

   public function editCourseLevel(LevelRespository $repository,$key)
   {
       $getData = $repository->editData($key);
       if(json_decode($getData->getContent())->status == 200){
           return view('cd-admin.level.edit-course-level',['getData' => json_decode($getData->getContent())->results]);}
       }

       public function updateCourseLevel( LevelPost $level,LevelRespository $repository,$key)
       {
           $Data = $repository->updateData($level,$key);
           if(json_decode($Data->getContent())->status == 200){
               Session::flash('success1','Updated SuccessFully... !!!');
               return redirect()->to('cd-admin/view-all-course-level');}
               else{return redirect()->back()->witherrors(['validationError'=>$responce->error]);}
           }

           public function deleteCourseLevel(LevelRespository $repository,$key)
           {
               $getData = $repository->deleteData($key);
               if(json_decode($getData->getContent())->status == 200){
                   Session::flash('failure','Deleted SuccessFully... !!!');
                   return redirect()->to('cd-admin/view-all-course-level');}
               }
           }
