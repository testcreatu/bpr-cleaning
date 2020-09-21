<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
trait ImageController
{
	public function uploadImage($uploadfile,$upload_to)
	{
		$file = $uploadfile;
		$file_name = time().'.'.$file->getClientOriginalName();
		$destinationPath = 'uploads/thumbnail/'.$file_name;
		$img = Image::make($file->getRealPath());
		$dimensions = getimagesize($file);
		$width = $dimensions[0] / 4;
		$height= $dimensions[1] / 4;
		$img->resize($width, $height)->save($destinationPath);
		$file->move($upload_to,$file_name);
		return $file_name;
	}

	public function unlinkImage($image_url)
	{
		if(file_exists($image_url))
		{
			unlink($image_url);
		}
	}
}