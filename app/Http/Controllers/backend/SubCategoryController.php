<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SubCategory;
use App\Category;
use Session;
class SubCategoryController extends Controller
{
	public function viewSubCategory()
	{
		$sub_category = SubCategory::get();
		return view('cd-admin.SubCategory.view-all-sub-category',compact('sub_category'));
	}
	public function addSubCategoryForm()
	{
		$category = Category::where('status','active')->get();
		return view("cd-admin.SubCategory.add-subcategory",compact('category'));
	}

	public function editSubCategoryForm($id)
	{
		$data = SubCategory::find($id);
		$category = Category::where('status','active')->get();
		return view("cd-admin.SubCategory.edit-subcategory",compact('data','category'));
	}

	public function insertSubCategory()
	{
		$data = Request()->validate([
			'category_name' => 'required',
			'header_title' => 'required',
			'quote' => 'required',
			'sub_text' => 'required',
			'main_title' => 'required',
			'main_description' => 'required',
			'benifits' => '',
			'features' => '',
			'status' => 'required',
			'header_image' => 'required|image|mimes:jpeg,jpg,png,gif',
			'image' => 'required|image|mimes:jpeg,jpg,png,gif',
			'seo_description' => 'required',
			'seo_title' => 'required',
			'seo_keyword' => 'required',
		]);
		$sub_category = new SubCategory();
		$headerFile = $data['header_image'];
		$headerFileName = time().$headerFile->getClientOriginalName();
		$headerFile->move('uploads/',$headerFileName);
		$sub_category->header_image = $headerFileName;
		$SubCatFile = $data['image'];
		$SubCatFileName = time().$SubCatFile->getClientOriginalName();
		$SubCatFile->move('uploads/',$SubCatFileName);
		$sub_category->image = $SubCatFileName;
		$sub_category->category_id = $data['category_name'];
		$sub_category->header_title = $data['header_title'];
		$sub_category->quote = $data['quote'];
		$sub_category->sub_text = $data['sub_text'];
		$sub_category->main_title = $data['main_title'];
		$sub_category->main_description = $data['main_description'];
		$sub_category->status = $data['status'];
		$sub_category->seo_title = $data['seo_title'];
		$sub_category->seo_description = $data['seo_description'];
		$sub_category->seo_keyword = $data['seo_keyword'];
		$sub_category->benifits = json_encode($data['benifits']);
		$sub_category->features = json_encode($data['features']);
		$sub_category->save();
		Session::flash('SubCategorySuccess');
		return redirect('cd-admin/view-all-subCategory');
	}


	public function updateSubCategory($id)
	{
		$data = Request()->validate([
			'category_name' => 'required',
			'header_title' => 'required',
			'quote' => 'required',
			'sub_text' => 'required',
			'main_title' => 'required',
			'main_description' => 'required',
			'benifits' => '',
			'features' => '',
			'status' => 'required',
			'header_image' => 'image|mimes:jpeg,jpg,png,gif',
			'image' => 'image|mimes:jpeg,jpg,png,gif',
			'seo_description' => 'required',
			'seo_title' => 'required',
			'seo_keyword' => 'required',
		]);
		$sub_category = SubCategory::find($id);
		if(isset($data['header_image']))
		{
			if(file_exists('uploads/'.$sub_category['header_image']))
			{
				unlink('uploads/'.$sub_category['header_image']);
			}
			$headerFile = $data['header_image'];
			$headerFileName = time().$headerFile->getClientOriginalName();
			$headerFile->move('uploads/',$headerFileName);
			$sub_category->header_image = $headerFileName;
		}
		if(isset($data['image']))
		{
			if(file_exists('uploads/'.$sub_category['image']))
			{
				unlink('uploads/'.$sub_category['image']);
			}
			$SubCatFile = $data['image'];
			$SubCatFileName = time().$SubCatFile->getClientOriginalName();
			$SubCatFile->move('uploads/',$SubCatFileName);
			$sub_category->image = $SubCatFileName;
		}
		$sub_category->category_id = $data['category_name'];
		$sub_category->header_title = $data['header_title'];
		$sub_category->quote = $data['quote'];
		$sub_category->sub_text = $data['sub_text'];
		$sub_category->main_title = $data['main_title'];
		$sub_category->main_description = $data['main_description'];
		$sub_category->status = $data['status'];
		$sub_category->seo_title = $data['seo_title'];
		$sub_category->seo_description = $data['seo_description'];
		$sub_category->seo_keyword = $data['seo_keyword'];
		$sub_category->benifits = json_encode($data['benifits']);
		$sub_category->features = json_encode($data['features']);
		$sub_category->save();
		Session::flash('SubCategoryUpdateSuccess');
		return redirect('cd-admin/view-all-subCategory');
	}

	public function deleteSubCategory($id)
	{
		$sub_category = SubCategory::find($id);
		$sub_category->delete();
		Session::flash('SubCategoryDeleteSuccess');
		return redirect('cd-admin/view-all-subCategory');
	}
}
