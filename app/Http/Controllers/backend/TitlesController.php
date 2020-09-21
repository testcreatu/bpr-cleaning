<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Input;

use App\PageTitle;
use Session;
class TitlesController extends Controller
{
	use ImageController;

	public function viewTitle()
	{
		$page = PageTitle::get();
		return view('cd-admin.page_titles.view-all-title',compact('page'));
	}

	public function editTitleForm($id)
	{
		$data = PageTitle::find($id);
		return view('cd-admin.page_titles.edit-page-title',compact('data'));
	}

	public function editTitle($id)
	{
		$data = Request()->validate([
			'quote' => '',
			'title' => 'required',
			'sub_text' => '',
			'image' => 'mimes:jpg,png,gif,jpeg',
		]);
		$title = PageTitle::find($id);
		if(Input::hasfile('image'))
		{
			if ($title->image && file_exists("uploads/{$title->image}")) 
			{
				unlink("uploads/{$title->image}");
			}
			$title->background_image = $this->Image($data['image']);	
		}
		$title->quote = $data['quote'];
		$title->title = $data['title'];
		$title->sub_text = $data['sub_text'];
		$title->save();
		Session::flash('updateSuccess');
		return redirect('/cd-admin/view-page-titles');
	}
}
