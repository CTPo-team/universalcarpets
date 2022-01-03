<?php

namespace App\Http\Controllers;

use InfyOm\Generator\Utils\ResponseUtil;
use Response;

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
}
