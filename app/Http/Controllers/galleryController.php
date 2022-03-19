<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use App\Http\Requests\StoregalleryRequest;
use App\Http\Requests\UpdategalleryRequest;
use Request;
use App\Http\Controllers\AppBaseController;

class galleryController extends AppBaseController
{


    public function upload(StoregalleryRequest $request)
    {
        $config = [];
        $preview = [];
        if(isset($request->fieldName)){
            $field = str_replace('#', '', $request->fieldName);
            if($request->hasfile($field))
            {
                if(is_array($request->file($field))){
                    foreach($request->file($field) as $file)
                    {
                        $result = $this->insertImage($file);
                        $config[]=[
                            'key' => $result['uid'],
                            'caption' => $result['filename'],
                            'size' => 0,
                            'downloadUrl' => asset('img/gallery/'.$result['filename']), // the url to download the file
                            'url' => url("/delete-gallery/{$result['filename']}"), // server api to delete the file based on key
                        ];
                        $preview[]=asset('img/gallery/'.$result['filename']);
                    }
                }else{
                    $result = $this->insertImage($request->file($field));
                    $config[]=[
                        'key' => $result['uid'],
                        'caption' => $result['filename'],
                        'size' => 0,
                        'downloadUrl' => asset('img/gallery/'.$result['filename']), // the url to download the file
                        'url' => url("/delete-gallery/{$result['filename']}"), // server api to delete the file based on key
                    ];
                    $preview[]=asset('img/gallery/'.$result['filename']);
                }
                
            }
        }
        return response()->json([
            'initialPreview' => $preview, 
            'initialPreviewConfig' => $config, 
            'initialPreviewAsData' => true
        ]);
    }

    public function delete($filename)
    {
        
        if(!empty($filename)){
            //Cache Delete If Data Exists On Table
            $search = gallery::where([["path_image","=",$filename],["type","=","active"]])->first();

            if(!$search){
                $this->deleteFile($filename,"img/gallery");
                gallery::where("path_image",$filename)->delete();
            }
        }
        return response()->json();
    }

    public function insertImage($file){
        //File Upload
        $uid = uniqid();
        $filename = $uid.'.'. $file->extension();  
        $file->move(public_path('img/gallery'), $filename);

        gallery::create([
            "code" => $uid,
            "path_image" => $filename,
            "type" => "",
        ]);
        return [
            "uid" => $uid,
            "filename" => $filename
        ];
    }
}
