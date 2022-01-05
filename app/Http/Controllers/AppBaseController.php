<?php

namespace App\Http\Controllers;

use InfyOm\Generator\Utils\ResponseUtil;
use Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            unlink(public_path($dir."/".$filename));
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
                $lastId = DB::table($table)->latest()->first()->id;
                if(count($slugs)>0){
                    $increment = "-".$lastId+1;
                }
                $text=$text.$increment;
            }
            
        }
        return $text;
    }
}
