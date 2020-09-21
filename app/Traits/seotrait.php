<?php
namespace App\Traits;

use App\Seo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait seotrait
{

	public function add(){
    	return view('cd-admin.seo.addseo');
    }
    public function view(){
    	$seo=Seo::get();
        $er = Seo::all();
    	return view('cd-admin.seo.viewseo',compact('seo','er'));
    }
    public function store(){
    	$a=[];
        $data = $this->insertcontrol();
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$a);
        DB::table('seos')->Insert($replace);
        
        Session::flash('success');
        return redirect('/seo-view');
    }
    	

    
    public function edit($id)
    {
    $ser = Seo::where('id',$id)->get()->first();
     return view('cd-admin.seo.editseo',compact('ser'));
    
    }

    public function updateseo($id)
     {
     	 $data = $this-> updatevalidation();
            $test = DB::table('seos')->where('id',$id)->get()->first();
            $a['updated_at'] =Carbon::now('Asia/Kathmandu');

            $replace = array_replace($data,$a);

            $data = DB::table('seos')->where('id',$id)->update($replace);

        Session::flash('success1');
        return redirect('/seo-view');

    }
    public function delete($id,Seo $p)
    {
    $p->remove($id);
    return redirect('/seo-view');
    }

    public function insertcontrol(){
    	$request =Request()->all();
  		$data =  Request()->validate([
    	'name' => 'required',
    	'title' => 'required|max:60',
    	'keywords' => 'required|max:60',
    	'description' => 'required',
		    ]);
  		return $data;
    }

    public function updatevalidation()
     {
      $request =Request()->all();
      $data =  Request()->validate([
      'title' => 'required|max:60',
      'keywords' => 'required|max:60',
      'description' => 'required',
        ]);
      return $data;
     }

}
