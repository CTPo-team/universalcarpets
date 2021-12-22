<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bannerHomepage;
use App\Models\product;
use App\Models\blog;
use App\Models\aboutUsPage;

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
        $this->data["blog"] = blog::where("status",1)->with("blogCategory")->orderByDesc("created_at")->get();
        $this->data["AboutUs"] = aboutUsPage::where("title", 'like', '%about%')->first();
        return view('frontend.home',$this->data);
    }
}
