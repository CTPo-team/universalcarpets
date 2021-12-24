<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bannerHomepage;
use App\Models\product;
use App\Models\blog;
use App\Models\aboutUsPage;
use App\Models\settingWeb;
use Mail;
use App\Mail\contactMail;
use Flash;

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
        $this->data["AboutUs"] = aboutUsPage::where("title",'OUR STORY')->first();
        $this->data["settingWeb"] = settingWeb::first();
        return view('frontend.home',$this->data);
    }

    public function sendContactUs(Request $request)
    {   
        $input = $request->all();
        $this->data["settingWeb"] = settingWeb::first();
        Mail::to($this->data["settingWeb"]["email_contact_us"])->send(new contactMail($input));
 
        if (Mail::failures()) {
            Flash::error('Failed To Send Email.');
            return back();
        }
        Flash::success('We Have Received Your Message, Thank You.');
        return back();
    }
}
