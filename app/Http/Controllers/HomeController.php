<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bannerHomepage;
use App\Models\product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->data["banner"] = bannerHomepage::where("status",1)->orderByDesc("created_at")->get();
        $this->data["product"] = product::where("status",1)->with(["imageProduct","productCategory"])->orderByDesc("created_at")->get();
        return view('frontend.home',$this->data);
    }
}
