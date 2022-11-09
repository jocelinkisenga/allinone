<?php

declare(strict_types=1);
namespace App\Utilities;

use App\Contracts\Assets\UploadFileInterface;



class FileUploadUtility implements UploadFileInterface {
    public function uploadFile($file){
       
        $fileName= time().'.'.$file->file('image')->getClientOriginalName();
        dd($fileName);
        $path=$file->file('image')->storeAs('uploads', $fileName, 'public');
        return $fileName;
    }
}