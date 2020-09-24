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

	public function addFaq()
	{
		$data = Request()->validate([
			'main_title' => 'required',
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
		$faq->main_title = $data['main_title'];
		$faq->status = $data['status'];
		$faq->faqs = $finalFaq;
		$faq->save();
		Session::flash('FaqSuccess');
		return redirect('cd-admin/view-faq');
	}


	public function editFaq($id)
	{
		$data = Request()->validate([
			'main_title' => 'required',
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
		$faq->main_title = $data['main_title'];
		$faq->status = $data['status'];
		$faq->faqs = $finalFaq;
		$faq->save();
		Session::flash('FaqUpdateSuccess');
		return redirect('cd-admin/view-faq');
	}

	public function deleteFaq($id)
	{
		$faq = Faq::find($id);
		$faq->delete();
		Session::flash('FaqDeleteSuccess');
		return redirect('cd-admin/view-all-faq');
	}
}
