<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bookings;
use App\Services;
use Session;
class BookingsController extends Controller
{
	public function viewBookings()
	{
		$bookings = Bookings::where('status','Not Replied')->get();
		return view('cd-admin.booking.view-bookings',compact('bookings'));
	}

	public function viewRepliedBookings()
	{
		$bookings = Bookings::where('status','Replied')->get();
		return view('cd-admin.booking.view-replied-bookings',compact('bookings'));
	}

	public function viewOneBooking($id)
	{
		$data = Bookings::find($id);
		$service = Services::find($data['service_id']);
		return view('cd-admin.booking.view-one-booking',compact('data','service'));
	}

	public function updateStatus($id)
	{
		$data = Bookings::find($id);
		if($data['status'] == 'Not Replied')
		{
			$data->status = 'Replied';
		}
		$data->save();
		Session::flash('StatusChangeSuccess');
		return redirect('cd-admin/view-bookings');
	}

	public function deleteBookings($id)
	{
		$data = Bookings::find($id);
		$data->delete();
		Session::flash('BookingDeleteSuccess');
		return redirect()->back();
	}
}
