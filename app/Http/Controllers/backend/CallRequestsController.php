<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FreeCallRequests;
class CallRequestsController extends Controller
{
   public function viewCallRequests()
   {
   		$request = FreeCallRequests::get();
   		return view('cd-admin.call-requests.view-call-requests',compact('request')); 
   }
}
