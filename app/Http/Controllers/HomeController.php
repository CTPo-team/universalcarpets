<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bannerHomepage;
use App\Models\product;
use App\Models\blog;
use App\Models\aboutUsPage;
use App\Models\settingWeb;
use App\Models\contactUsPage;
use Mail;
use App\Mail\contactMail;
use App\Models\productCategory;
use Flash;
use Response;

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
        $this->data["product"] = product::where("status",1)->with(["imageProductOne","productCategory"])->orderByDesc("created_at")->get();
        $this->data["blog"] = blog::where("status",1)->with("blogCategory")->orderByDesc("created_at")->get();
        $this->data["AboutUs"] = aboutUsPage::where("title",'OUR STORY')->first();
        $this->data["settingWeb"] = settingWeb::first();
        return view('frontend.home',$this->data);
    }

    public function aboutUs()
    {
        $this->data["ourStory"] = aboutUsPage::where("title",'OUR STORY')->first();
        $this->data["network"] = aboutUsPage::where("title",'NETWORK')->first();
        $this->data["technologies"] = aboutUsPage::where("title",'TECHNOLOGIES')->with("aboutUsGallery")->first();
        $this->data["settingWeb"] = settingWeb::first();
        return view('frontend.aboutus',$this->data);
    }

    public function contacts()
    {
        $this->data["contacts"] = contactUsPage::orderBy("created_at")->get();
        $this->data["settingWeb"] = settingWeb::first();
        return view('frontend.contacts',$this->data);
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

    public function blog()
    {
        $this->data["new"] = blog::orderByDesc("created_at")->with("blogCategory")->first();
        $this->data["mostViewed"] = blog::orderByDesc("view_count")->with("blogCategory")->limit(3)->get();
        $this->data["settingWeb"] = settingWeb::first();
        return view('frontend.blog',$this->data);
    }

    public function olderBlog(Request $request)
    {
        $this->data["new"] = blog::orderByDesc("created_at")->with("blogCategory")->first();
        if(empty($this->data["new"])){
            return Response::json([], 400);
        }
        $data = blog::where("id","!=",$this->data["new"]->id)->orderByDesc("created_at")->paginate(3);    
        return Response::json($data, 200);
    }
    
    public function detailBlog($slug)
    {
        if(empty(!$slug)){
            $blog = blog::where([["slug","=",$slug],["status","=",1]]);
            $this->data["blog"] = $blog->with("blogCategory")->first();

            if(!$this->data["blog"]){
                return abort(404);
            }
            
            $blog->increment("view_count",1);
            $this->data["settingWeb"] = settingWeb::first();
            $this->data["relatedBlog"] = blog::where([['blog_category_id',"=",$this->data["blog"]->blog_category_id],['id','!=',$this->data["blog"]->id]])->orderByDesc("created_at")->limit(3)->get();
            return view('frontend.detail_blog',$this->data);
        }

        return abort(404);
    }

    public function product()
    {
        $this->data["productCategory"] = productCategory::orderBy("title")->with(["product.productBrand","subCategory.product.productBrand"])->where("product_category_id",null)->get();
        $this->data["settingWeb"] = settingWeb::first();
        return view('frontend.product',$this->data);
    }

    public function detailProduct($slug)
    {
        if(empty(!$slug)){
            $product = product::where([["slug","=",$slug],["status","=",1]]);
            $this->data["product"] = $product->with(["productCategory","productBrand","imageProduct"])->first();

            if(!$this->data["product"]){
                return abort(404);
            }

            $this->data["settingWeb"] = settingWeb::first();
            $this->data["relatedProduct"] = product::where([['product_category_id',"=",$this->data["product"]->product_category_id],['id','!=',$this->data["product"]->id]])->with(["productCategory","productBrand","imageProduct"])->orderByDesc("created_at")->limit(2)->get();
            return view('frontend.detail_product',$this->data);
        }

        return abort(404);
    }
}
