<?php

namespace App\Traits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
trait uploadImage{

    public function uploadFile($file,$folder){
             $name = $file->hashName();
            $file->storeAs('uploads/'.$folder.'/',$name,'public');
           
            return $name;
    }

    public function removeFile($file,$folder){
        if(File::exists('storage/uploads/'.$folder.'/'.$file)){
            unlink('storage/uploads/'.$folder.'/'.$file);
        }
    }
}