<?php

namespace App\Http\Controllers;

use InfyOm\Generator\Utils\ResponseUtil;
use Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\gallery;
use Carbon\Carbon;
/**
 * @SWG\Swagger(
 *   basePath="/api/v1",
 *   @SWG\Info(
 *     title="Laravel Generator APIs",
 *     version="1.0.0",
 *   )
 * )
 * This class should be parent class for other API controllers
 * Class AppBaseController
 */
class AppBaseController extends Controller
{
    public function sendResponse($result, $message)
    {
        return Response::json(ResponseUtil::makeResponse($message, $result));
    }

    public function sendError($error, $code = 404)
    {
        return Response::json(ResponseUtil::makeError($error), $code);
    }

    public function sendSuccess($message)
    {
        return Response::json([
            'success' => true,
            'message' => $message
        ], 200);
    }

    public function uploadFile($inputFile, $dir){
        if(empty($inputFile)){
            return "";
        }

        $filename = auth()->id() . '_' . microtime(true) . '.'. $inputFile->extension();  
        $inputFile->move(public_path($dir), $filename);

        return $filename;
    }

    public function deleteFile($filename, $dir){
        if (!empty($filename)){
            try {
                unlink(public_path($dir."/".$filename));
            } catch (\Throwable $th) {
                return true;
            }
        }
    }

    public function setSeo($input,$desc,$title,$category = "",$path = ""){
        if(empty($input["seo_desc"])){
            $input["seo_desc"] = strip_tags($desc);
        }
        if(empty($input["seo_keyword"])){
            $input["seo_keyword"] = $title;
        }
        $input["seo_category"] = $category;
        $input["seo_url"] = url()->to($path);
        return $input;
    }
    public function setSlug($text,$table,$old = ""){
        if(isset($text) && !empty($text)){
            $statusSame = false;

            if(!empty($old)){
                if($old==$text){
                    $statusSame = true;
                }
            }

            if(!$statusSame){
                $increment = "";
                $text=Str::slug($text, '-');     
                $slugs = DB::table($table)->where("slug","like","%".$text."%")->get();
                if(count($slugs)>0){
                    $increment = substr(md5(time()), 0, 5);
                }
                $text=$text."-".$increment;
            }else{
                $text = null;
            }
            
        }
        return $text;
    }
    public function getGallery($value){
        $preview = [];
        $config = [];
        foreach(explode(",",$value) as $dt){
            if(!empty($dt)){
                $config[]=[
                    'key' => $dt,
                    'caption' => $dt,
                    'size' => 0,
                    'downloadUrl' => asset('img/gallery/'.$dt), // the url to download the file
                    'url' => url("/delete-gallery/{$dt}"), // server api to delete the file based on key
                ];
                $preview[]=asset('img/gallery/'.$dt);
            }
        }

        return [
            'initialPreview' => $preview, 
            'initialPreviewConfig' => $config
        ];
    }

    public function getGalleryForView($value){
        if(!empty($value)){
            if(str_contains($value, ',')){
                $data = [];
                foreach(explode(",",$value) as $dt){
                    $data[] = asset('img/gallery/'.$dt);
                }
                return $data;
            }else{
                return asset('img/gallery/'.$value);
            }
        }
    }

    public function setActiveGallery($value){
        if(!empty($value)){
            $value = explode(",",$value);
            if(count($value) > 0){
                foreach($value as $dt){
                    gallery::where("path_image",$dt)->update([
                        "type" => "active",
                    ]);
                }
                
                //Clear Image Not Used
                $dataUnsed = gallery::where([
                    ["created_at","<=",Carbon::yesterday()->setTime(23, 59, 59)->toDateTimeString()],
                    ["type","=",""]
                    ])->get();
                foreach ($dataUnsed as $dt) {
                    $this->deleteFile($dt["path_image"],"img/gallery");
                }
                $dataUnsed = gallery::where([
                    ["created_at","<=",Carbon::yesterday()->setTime(23, 59, 59)->toDateTimeString()],
                    ["type","=",""]
                    ])->delete();
            }
        }
    }

    public function compareGallery($oldValue,$newValue){
        $newValue = explode(",",$newValue);
        if(empty($newValue) && !empty($oldValue)){
            foreach(explode(",",$oldValue) as $dt){
                $this->deleteFile($dt,"img/gallery");
            }
        }else{
            foreach(explode(",",$oldValue) as $dt){
                if(array_search($dt,$newValue) === false){
                    gallery::where("path_image",$dt)->delete();
                    $this->deleteFile($dt,"img/gallery");
                }
            }
        }
    }

    public function deleteGallery($file){
        foreach(explode(",",$file) as $dt){
            gallery::where("path_image",$dt)->delete();
            $this->deleteFile($dt,"img/gallery");
        }
    }
}
