<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\backend\ImageController;
use App\Http\Controllers\Controller;
use App\Blog;
use DB;
use Session;
use Illuminate\Support\Str;
class BlogController extends Controller
{
	use ImageController;


	public function addBlogForm()
	{
		return view('cd-admin.blog.add-blog');
	}
	public function addBlog()
	{
		$FinalData = [];
		$request = Request()->all();
		$data = $this->addValidate();
		$FinalData['slug'] = Str::slug($data['title']);
		$FinalData['image'] = $this->uploadImage($data['image'],'uploads/blogs');
		$merge = array_merge($data,$FinalData);
		DB::table('blogs')->insert($merge);
		Session::flash('success');
		return redirect()->to('cd-admin/view-blog');
	}

	public function viewBlog()
	{
		$blog = Blog::all();
		return view('cd-admin.blog.view-blog',compact('blog'));
	}

	public function editBlogForm($id)
	{
		if($data = Blog::where('id',$id)->get()->first())
		{
			return view('cd-admin.blog.edit-blog',compact('data'));
		}
	}

	public function editBlog($id)
	{
		$FinalData = [];
		$request = Request()->all();
		$blog = Blog::where('id',$id)->get()->first();
		$data = $this->editValidate();
		if(isset($data['image']))
		{
			$this->unlinkImage('uploads/blogs/'.$blog['image']);
			$this->unlinkImage('uploads/thumbnail/'.$blog['image']);
			$FinalData['image'] = $this->uploadImage($data['image'],'uploads/blogs');
		}
		$FinalData['slug'] = Str::slug($data['title']);
		$merge = array_merge($data,$FinalData);
		DB::table('blogs')->where('id',$id)->update($merge);
		Session::flash('success1');
		return redirect()->to('cd-admin/view-blog');
	}

	public function deleteBlog($id)
	{
		if($check = Blog::where('id',$id)->get()->first())
		{
			$this->unlinkImage('uploads/blogs/'.$check['image']);
			$this->unlinkImage('uploads/thumbnail/'.$check['image']);
			$check->delete();
			Session::flash('failure');
			return redirect()->to('cd-admin/view-blog');
		}
	}

	protected function addValidate()
	{
		$request = Request()->all();
		$valid = $this->validate(Request(),[
			'title' => 'required',
			'image' => 'required|mimes:jpeg,jpg,png,gif',
			'altimage' => 'required',
			'description' => 'required',
			'summary' => 'required',
			'seo_title' => 'required',
			'seo_keyword' => 'required',
			'seo_description' => 'required',
			'status' => 'required',
			// 'tags' => '',
			// 'is_popular' => 'required',
		]);
		return $valid;
	}

	protected function editValidate()
	{
		$request = Request()->all();
		$valid = $this->validate(Request(),[
			'title' => 'required',
			'image' => 'mimes:jpeg,jpg,png,gif',
			'altimage' => 'required',
			'description' => 'required',
			'summary' => 'required',
			'seo_title' => 'required',
			'seo_keyword' => 'required',
			'seo_description' => 'required',
			'status' => 'required',
			// 'tags' => '',
			// 'is_popular' => 'required',
		]);
		return $valid;
	}

}
