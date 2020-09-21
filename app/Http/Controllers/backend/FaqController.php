<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Faq;
use Session;
class FaqController extends Controller
{
	public function viewFaq()
	{
		$faq = Faq::get();
		return view('cd-admin.faq.view-all-faq',compact('faq'));
	}
	public function addFaqForm()
	{
		return view("cd-admin.faq.add-new-faq");
	}

	public function editFaqForm($id)
	{
		$data = Faq::find($id);
		return view("cd-admin.faq.edit-faq",compact('data'));
	}

	public function insertFaq()
	{
		$data = Request()->validate([
			'animated_title_1' => 'required',
			'animated_title_2' => 'required',
			'description_title' => 'required',
			'description' => 'required',
			'title' => 'required',
			'question' => '',
			'answer' => '',
			'status' => 'required',
		]);
		$finalFaq = [];
		foreach($data['question'] as $key=> $faq)
		{
			$finalFaq[$key]['question'] = $faq;
			$finalFaq[$key]['answer'] = $data['answer'][$key] ?$data['answer'][$key]:'';
			unset($data['question'][$key]);
		}
		$finalFaq = json_encode($finalFaq);
		$faq = new Faq();
		$faq->animated_title_1 = $data['animated_title_1'];
		$faq->animated_title_2 = $data['animated_title_2'];
		$faq->description_title = $data['description_title'];
		$faq->description = $data['description'];
		$faq->title = $data['title'];
		$faq->status = $data['status'];
		$faq->faqs = $finalFaq;
		$faq->save();
		Session::flash('FaqSuccess');
		return redirect('cd-admin/view-all-faq');
	}


	public function updateFaq($id)
	{
		$data = Request()->validate([
			'animated_title_1' => 'required',
			'animated_title_2' => 'required',
			'description_title' => 'required',
			'description' => 'required',
			'title' => 'required',
			'question' => '',
			'answer' => '',
			'status' => 'required',
		]);
		$finalFaq = [];
		foreach($data['question'] as $key=> $faq)
		{
			$finalFaq[$key]['question'] = $faq;
			$finalFaq[$key]['answer'] = $data['answer'][$key] ?$data['answer'][$key]:'';
			unset($data['question'][$key]);
		}
		$finalFaq = json_encode($finalFaq);
		$faq = Faq::find($id);
		$faq->animated_title_1 = $data['animated_title_1'];
		$faq->animated_title_2 = $data['animated_title_2'];
		$faq->description_title = $data['description_title'];
		$faq->description = $data['description'];
		$faq->title = $data['title'];
		$faq->status = $data['status'];
		$faq->faqs = $finalFaq;
		$faq->save();
		Session::flash('FaqUpdateSuccess');
		return redirect('cd-admin/view-all-faq');
	}

	public function deleteFaq($id)
	{
		$faq = Faq::find($id);
		$faq->delete();
		Session::flash('FaqDeleteSuccess');
		return redirect('cd-admin/view-all-faq');
	}
}
