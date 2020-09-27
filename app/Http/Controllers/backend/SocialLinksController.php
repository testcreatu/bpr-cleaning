<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SocialLinks;
use Session;
class SocialLinksController extends Controller
{

	public function view()
	{
		$social = SocialLinks::orderBy('id','desc')->get()->first();
		return view('cd-admin.social_links.view-all-social-links',compact('social'));
	}
	public function addSocialLinksForm()
	{
		return view('cd-admin.social_links.add-new-social_link');
	}

	public function editSocialLinksForm($id)
	{
		$data = SocialLinks::find($id);
		return view('cd-admin.social_links.edit-social_links',compact('data'));
	}

	public function store()
	{
		$data = Request()->validate([
			'fb_link' => '',
			'twitter_link' => '',
			'insta_link' => '',
			'pininterest_link' => '',
			'email' => '',
			'contact_no' => '',
			'show_status' => 'required',
			'address' => '',
		]);
		$social_links = new SocialLinks();
		$social_links->fb_link = $data['fb_link'];
		$social_links->twitter_link = $data['twitter_link'];
		$social_links->insta_link = $data['insta_link'];
		$social_links->pininterest_link = $data['pininterest_link'];
		$social_links->email = $data['email'];
		$social_links->contact_no = $data['contact_no'];
		$social_links->show_status = $data['show_status'];
		$social_links->address = $data['address'];
		$social_links->save();
		Session::flash('storeSuccess');
		return redirect('/cd-admin/view-social-links');
	}

	public function update($id)
	{
		$data = Request()->validate([
			'fb_link' => '',
			'twitter_link' => '',
			'insta_link' => '',
			'pininterest_link' => '',
			'email' => '',
			'show_status' => 'required',
			'contact_no' => '',
			'address' => '',
		]);
		$social_links = SocialLinks::find($id);
		$social_links->fb_link = $data['fb_link'];
		$social_links->twitter_link = $data['twitter_link'];
		$social_links->insta_link = $data['insta_link'];
		$social_links->pininterest_link = $data['pininterest_link'];
		$social_links->email = $data['email'];
		$social_links->show_status = $data['show_status'];
		$social_links->contact_no = $data['contact_no'];
		$social_links->address = $data['address'];
		$social_links->save();
		Session::flash('updateSuccess');
		return redirect('/cd-admin/view-social-links');
	}
}
