<?php
 namespace App\Traits;

 trait imageTrait
 {
 	
 	public function insertimage($image)
 	{
 		if(isset($image)){
 			$file=$image;
 			$fileName=time().$file->getClientOriginalName();
 			$destinationpath='imageupload';
 			$file->move($destinationpath,$fileName);
 			
 			return $fileName;
 		}
 	}
	
 }