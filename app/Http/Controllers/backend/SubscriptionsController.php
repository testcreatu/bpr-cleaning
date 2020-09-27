<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subscriptions;
class SubscriptionsController extends Controller
{
	public function viewSubscription()
	{
		$subscribers = Subscriptions::get();
		return view('cd-admin.subscriptions.view-subscriptions',compact('subscribers'));
	}
}
