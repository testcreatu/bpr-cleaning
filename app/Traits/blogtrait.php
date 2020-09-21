<?php
namespace App\Traits;
use Carbon\Carbon;
use App\Blog;
use Illuminate\Http\Request; 
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SlugController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\NewsCategory;
trait blogtrait{
	use ImageController;
	use SlugController;


	public function insertBlogForm()
	{
		$category = NewsCategory::where('status','active')->get();
		return view('cd-admin.blog.add-new-blog',compact('category'));
	}
	public function insertBlog()
	{
		$FinalData = [];
		$request = Request()->all();
		$data = $this->validate_blog();
		$slug = $this->slug($data['title']);
		$image = $this->Image($data['image']);
		$FinalData['slug'] = $slug;
		$FinalData['image'] = $image;
		$FinalData['category_id'] = $data['category'];
		unset($data['category']);
		$merge = array_merge($data,$FinalData);
		DB::table('blogs')->insert($merge);
		Session::flash('success','Inserted SuccessFully...!!!');
		return redirect()->to('cd-admin/view-all-blog');
	}

	public function viewBlog()
	{
		$blog = Blog::all();
		$category = NewsCategory::get();
		return view('cd-admin.blog.view-all-blog',compact('blog','category'));
	}

	public function editBlog($id)
	{
		$category = NewsCategory::where('status','active')->get();
		if($check = Blog::where('id',$id)->get()->first())
		{
			return view('cd-admin.blog.edit-blog',compact('check','category'));
		}
	}

	public function updateBlog($id)
	{
		$FinalData = [];
		$request = Request()->all();
		$blog = Blog::where('id',$id)->get()->first();
		$data = $this->validate_update_blog();
		$slug = $this->slug($data['title']);
		if(Input::hasfile('image'))
		{
			if ($blog->image && file_exists("uploads/{$blog->image}")) {
				unlink("uploads/{$blog->image}");}
				if (file_exists("uploads/medium-{$blog->image}")) {
					unlink("uploads/medium-{$blog->image}");}

					$image = $this->Image($data['image']);
					$FinalData['image'] = $image;
				}
				$FinalData['slug'] = $slug;
				$FinalData['category_id'] = $data['category'];
				unset($data['category']);
				$merge = array_merge($data,$FinalData);
				DB::table('blogs')->where('id',$id)->update($merge);
				Session::flash('success1','Updated SuccessFully...!!!');
				return redirect()->to('cd-admin/view-all-blog');
			}

			public function deleteBlog($id)
			{
				if($check = Blog::where('id',$id)->get()->first())
				{
					if ($check->image && file_exists("uploads/{$check->image}")) {
						unlink("uploads/{$check->image}");}
						if (file_exists("uploads/medium-{$check->image}")) {
							unlink("uploads/medium-{$check->image}");}

							$check->delete();
							Session::flash('failure','Deleted SuccessFully...!!!');
							return redirect()->to('cd-admin/view-all-blog');
						}
					}

					protected function validate_blog()
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
							'active' => 'required',
							'tags' => '',
							'category' => 'required',
							'is_popular' => 'required',
						]);
						return $valid;
					}

					protected function validate_update_blog()
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
							'active' => 'required',
							'tags' => '',
							'category' => 'required',
							'is_popular' => 'required',
						]);
						return $valid;
					}

				}

				?>	