<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Session;
class CategoryController extends Controller
{
	public function viewCategory()
	{
		$category = Category::get();
		return view('cd-admin.category.view-category',compact('category'));
	}
	public function addCategoryForm()
	{
		return view("cd-admin.category.add-category");
	}

	public function editCategoryForm($id)
	{
		$data = Category::find($id);
		return view("cd-admin.category.edit-category",compact('data'));
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

		$category = new Category();
		$category->name = $data['name'];
		$category->seo_title = $data['seo_title'];
		$category->seo_description = $data['seo_description'];
		$category->seo_keyword = $data['seo_keyword'];
		$category->status = $data['status'];
		// dd($category);
		$category->save();
		Session::flash('CategorySuccess');
		return redirect('cd-admin/view-all-category');
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
		$category = Category::find($id);
		$category->name = $data['name'];
		$category->seo_title = $data['seo_title'];
		$category->seo_description = $data['seo_description'];
		$category->seo_keyword = $data['seo_keyword'];
		$category->status = $data['status'];
		$category->save();
		Session::flash('CategoryUpdateSuccess');
		return redirect('cd-admin/view-all-category');
	}

	public function deleteCategory($id)
	{
		$category = Category::find($id);
		$category->delete();
		Session::flash('ServiceDeleteSuccess');
		return redirect('cd-admin/view-all-category');
	}
}
