<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\NewsCategory;
class NewsCategoryController extends Controller
{
	public function viewCategory()
	{
		$category = NewsCategory::get();
		return view('cd-admin.news_category.view-category',compact('category'));
	}
	public function addCategoryForm()
	{
		return view("cd-admin.news_category.add-category");
	}

	public function editCategoryForm($id)
	{
		$data = NewsCategory::find($id);
		return view("cd-admin.news_category.edit-category",compact('data'));
	}

	public function insertCategory()
	{
		$data = Request()->validate([
			'name' => 'required',
			'seo_title' => 'required',
			'seo_description' => 'required',
			'seo_keyword' => 'required',
			'status' => 'required',
		]);
		$category = new NewsCategory();
		$category->category_name = $data['name'];
		$category->seo_title = $data['seo_title'];
		$category->seo_description = $data['seo_description'];
		$category->seo_keyword = $data['seo_keyword'];
		$category->status = $data['status'];
		$category->save();
		Session::flash('CategorySuccess');
		return redirect('cd-admin/view-all-news-category');
	}


	public function updateCategory($id)
	{
		$data = Request()->validate([
			'name' => 'required',
			'seo_title' => 'required',
			'seo_description' => 'required',
			'seo_keyword' => 'required',
			'status' => 'required',
		]);
		$category = NewsCategory::find($id);
		$category->category_name = $data['name'];
		$category->seo_title = $data['seo_title'];
		$category->seo_description = $data['seo_description'];
		$category->seo_keyword = $data['seo_keyword'];
		$category->status = $data['status'];
		$category->save();
		Session::flash('CategoryUpdateSuccess');
		return redirect('cd-admin/view-all-news-category');
	}

	public function deleteCategory($id)
	{
		$category = NewsCategory::find($id);
		$category->delete();
		Session::flash('CategoryDeleteSuccess');
		return redirect('cd-admin/view-all-news-category');
	}
}
