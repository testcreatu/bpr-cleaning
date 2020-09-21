<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Clients;
use Session;
class ClientsController extends Controller
{

	public function viewClient()
	{
		$clients = Clients::get();
		return view('cd-admin.clients.view-all-client',compact('clients'));
	}
	public function insertClientForm()
	{
		return view('cd-admin.clients.add-new-client');
	}
	public function editClientForm($id)
	{
		$data = Clients::find($id);
		return view('cd-admin.clients.edit-client',compact('data'));
	}

	public function insertClient()
	{
		$data = Request()->validate([
			'name' => 'required',
			'url' => '',
			'logo_image' => 'required|image|mimes:jpeg,png,svg,jpg,gif',
			'status' => 'required',
		]);
		$file = $data['logo_image'];
		$filename = time().'.'.$file->getClientOriginalName();
		$destination = "uploads/";
		$file->move($destination,$filename);
		$clients = new Clients();
		$clients->name = $data['name'];
		$clients->url = $data['url'];
		$clients->status = $data['status'];
		$clients->logo_image = $filename;
		$clients->save();
		Session::flash('ClientSuccess');
		return redirect('cd-admin/view-all-clients');
	}

	public function updateClient($id)
	{
		$data = Request()->validate([
			'name' => 'required',
			'url' => '',
			'logo_image' => 'image|mimes:jpeg,png,svg,jpg,gif',
			'status' => 'required',
		]);
		$clients = Clients::find($id);
		if(isset($data['logo_image']))
		{
			if(file_exists('uploads/'.$clients['logo_image']) && isset($clients['logo_image']))
			{
				unlink('uploads/'.$clients['logo_image']);
			}
			$file = $data['logo_image'];
			$filename = time().'.'.$file->getClientOriginalName();
			$destination = "uploads/";
			$file->move($destination,$filename);
			$clients->logo_image = $filename;
		}
		$clients->name = $data['name'];
		$clients->url = $data['url'];
		$clients->status = $data['status'];
		$clients->save();
		Session::flash('ClientUpdateSuccess');
		return redirect('cd-admin/view-all-clients');
	}

	public function deleteClient($id)
	{
		$client = Clients::find($id);
		if(isset($client['logo_image']))
		{
			if(file_exists('uploads/'.$client['logo_image']))
			{
				unlink('uploads/'.$client['logo_image']);
			}
		}
		$client->delete();
		Session::flash('ClientDeleteSuccess');
		return redirect('cd-admin/view-all-clients');
	}
}
