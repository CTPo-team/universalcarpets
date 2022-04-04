<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bannerHomepage;
use App\Models\product;
use App\Models\blog;
use App\Models\aboutUsPage;
use App\Models\settingWeb;
use App\Models\contactUsPage;
use App\Models\bannerAboutUs;
use App\Models\bannerBlog;
use App\Models\bannerContactUs;
use App\Models\bannerProduct;
use Mail;
use App\Mail\contactMail;
use App\Models\productCategory;
use Flash;
use Response;

class HomeController extends AppBaseController
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
        $this->data["banner"] = $this->getGalleryForViewArray($this->data["banner"],"path_image",false);

        $this->data["product"] = product::where("status",1)->with("productCategory")->orderByDesc("created_at")->limit(4)->get();
        $this->data["product"] = $this->getGalleryForViewArray($this->data["product"],"path_image",true);

        $this->data["blog"] = blog::where("status",1)->with("blogCategory")->orderByDesc("created_at")->get();
        $this->data["blog"] = $this->getGalleryForViewArray($this->data["blog"],"path_image",false);
        
        $this->data["aboutUs"] = aboutUsPage::where("title",'OUR STORY')->first();
        $this->data["aboutUs"]["path_image_home"] = $this->getGalleryForView($this->data["aboutUs"]["path_image_home"],true);
        
        $this->data["settingWeb"] = settingWeb::first();
        $this->data["settingWeb"]["path_image"] = $this->getGalleryForView($this->data["settingWeb"]["path_image"],false);

        //SEO
        $this->data["seo"] = [
            "title" => "Universal Carpets",
            "description" => "Market leaders as manufacturers of machine made “Wilton” synthetic carpet and rugs in polypropelene BCF, HEAT SET, HEAT SET SHRINK, and FRIEZE ",
            "keywords" => "UNIVERSAL CARPETS,Universal Carpets, universal carpets, universal, carpets",
            "article:published_time" => "",
            "article:section" => "",
        ];

        return view('frontend.home',$this->data);
    }

    public function aboutUs()
    {
        $this->data["banner"] = bannerAboutUs::first();
        $this->data["banner"]["path_image"] = $this->getGalleryForView($this->data["banner"]["path_image"],false);

        $this->data["ourStory"] = aboutUsPage::where("title",'OUR STORY')->first();
        $this->data["ourStory"]["path_image_certificate"] = $this->getGalleryForView( $this->data["ourStory"]["path_image_certificate"],false);
        $this->data["ourStory"]["path_image_strategy"] = $this->getGalleryForView( $this->data["ourStory"]["path_image_strategy"],false);

        $this->data["network"] = aboutUsPage::where("title",'NETWORK')->first();
        $this->data["network"]["path_image_network"] = $this->getGalleryForView( $this->data["network"]["path_image_network"],false);

        $this->data["technologies"] = aboutUsPage::where("title",'TECHNOLOGIES')->first();
        $this->data["technologies"]["path_image_technologies"] = $this->getGalleryForView( $this->data["technologies"]["path_image_technologies"],true);

        $this->data["settingWeb"] = settingWeb::first();
        $this->data["settingWeb"]["path_image"] = $this->getGalleryForView($this->data["settingWeb"]["path_image"],false);

        $this->data["aboutUsGalleryOdd"] = array();
        $this->data["aboutUsGalleryEven"] = array();
        if(isset( $this->data["technologies"]["path_image_technologies"]) && !empty( $this->data["technologies"]["path_image_technologies"])){
            foreach ( $this->data["technologies"]["path_image_technologies"] as $k => $v) {
                if ($k % 2 == 0) {
                    $this->data["aboutUsGalleryEven"][] = $v;
                }
                else {
                    $this->data["aboutUsGalleryOdd"][] = $v;
                }
            }
        }

        //SEO
        $this->data["seo"] = [
            "title" => "About Us",
            "description" => isset($this->data["ourStory"]["seo_desc"]) ? strip_tags($this->data["ourStory"]["seo_desc"]) : "",
            "keywords" => "ABOUT UNIVERSAL CARPETS, About Universal Carpets, about universal carpets, ABOUT US UNIVERSAL CARPETS, About Us Universal Carpets, about us universal carpets, universal, carpets, about, about us",
            "article:published_time" => "",
            "article:section" => "",
        ];

        return view('frontend.aboutus',$this->data);
    }

    public function contacts()
    {
        $this->data["banner"] = bannerContactUs::first();
        $this->data["banner"]["path_image"] = $this->getGalleryForView($this->data["banner"]["path_image"],false);

        $this->data["contacts"] = contactUsPage::orderBy("created_at")->get();
        $this->data["settingWeb"] = settingWeb::first();
        $this->data["settingWeb"]["path_image"] = $this->getGalleryForView($this->data["settingWeb"]["path_image"],false);

        //SEO
        $this->data["seo"] = [
            "title" => "Contact Us",
            "description" => isset($this->data["contacts"][0]["desc"]) ? strip_tags($this->data["contacts"][0]["desc"]) : "",
            "keywords" => "CONTACT US UNIVERSAL CARPETS, Contact Us Universal Carpets, contact us universal carpets, CONTACT UNIVERSAL CARPETS, Contact Universal Carpets, CONTACT universal carpets, universal, carpets, contact us, contact",
            "article:published_time" => "",
            "article:section" => "",
        ];

        return view('frontend.contacts',$this->data);
    }

    public function sendContactUs(Request $request)
    {   
        $input = $request->all();
        $this->data["settingWeb"] = settingWeb::first();
        $this->data["settingWeb"]["path_image"] = $this->getGalleryForView($this->data["settingWeb"]["path_image"],false);
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
        $this->data["banner"] = bannerBlog::first();
        $this->data["banner"]["path_image"] = $this->getGalleryForView($this->data["banner"]["path_image"],false);

        $this->data["new"] = blog::orderByDesc("created_at")->with("blogCategory")->first();
        $this->data["new"]["path_image"] = $this->getGalleryForView($this->data["new"]["path_image"],false);

        $this->data["mostViewed"] = blog::orderByDesc("view_count")->with("blogCategory")->limit(3)->get();
        $this->data["mostViewed"] = $this->getGalleryForViewArray($this->data["mostViewed"],"path_image",false);

        $this->data["settingWeb"] = settingWeb::first();
        $this->data["settingWeb"]["path_image"] = $this->getGalleryForView($this->data["settingWeb"]["path_image"],false);

        //SEO
        $this->data["seo"] = [
            "title" => "Blog",
            "description" => "",
            "keywords" => "BLOG UNIVERSAL CARPETS, Blogs Universal Carpets, blog universal carpets, universal, carpets, blog",
            "article:published_time" => "",
            "article:section" => "",
        ];

        return view('frontend.blog',$this->data);
    }

    public function olderBlog(Request $request)
    {
        $this->data["new"] = blog::orderByDesc("created_at")->with("blogCategory")->first();
        if(empty($this->data["new"])){
            return Response::json([], 400);
        }
        $data = blog::where("id","!=",$this->data["new"]->id)->with("blogCategory")->orderByDesc("created_at")->paginate(3);
        $data = $this->getGalleryForViewArray($data,"path_image",false);

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
            $this->data["blog"]["path_image"] = $this->getGalleryForView($this->data["blog"]["path_image"],false);
            
            $blog->increment("view_count",1);
            $this->data["settingWeb"] = settingWeb::first();
            $this->data["settingWeb"]["path_image"] = $this->getGalleryForView($this->data["settingWeb"]["path_image"],false);

            $this->data["relatedBlog"] = blog::where([['blog_category_id',"=",$this->data["blog"]->blog_category_id],['id','!=',$this->data["blog"]->id]])->orderByDesc("created_at")->limit(3)->get();
            $this->data["relatedBlog"] = $this->getGalleryForViewArray($this->data["relatedBlog"],"path_image",false);
            
            //SEO
            $this->data["seo"] = [
                "title" => isset($this->data["blog"]["title"]) ? strip_tags($this->data["blog"]["title"]) : "",
                "description" => isset($this->data["blog"]["seo_desc"]) ? strip_tags($this->data["blog"]["seo_desc"]) : "",
                "keywords" => isset($this->data["blog"]["seo_keyword"]) ? strip_tags($this->data["blog"]["seo_keyword"]) : "",
                "article:published_time" => isset($this->data["blog"]["created_at"]) ? strip_tags($this->data["blog"]["created_at"]) : "",
                "article:section" => isset($this->data["blog"]["seo_category"]) ? strip_tags($this->data["blog"]["seo_category"]) : "",
            ];
            
            return view('frontend.detail_blog',$this->data);
        }

        return abort(404);
    }

    public function product(Request $request)
    {
        $this->data["filter"] = $request->all();

        $this->data["banner"] = bannerProduct::where("status",1)->orderByDesc("created_at")->get();
        $this->data["banner"] = $this->getGalleryForViewArray($this->data["banner"],"path_image",false);

        $this->data["productFeatured"] = product::where("featured",1)->with(["productBrand","productCategory"])->first();
        $this->data["productFeatured"]["path_image"] = $this->getGalleryForView($this->data["productFeatured"]["path_image"],true);

        $this->data["productCategory"] = productCategory::orderBy("title")->with(["product.productBrand","subCategory.product.productBrand"])->where("product_category_id",null)->get();
        
        $this->data["settingWeb"] = settingWeb::first();
        $this->data["settingWeb"]["path_image"] = $this->getGalleryForView($this->data["settingWeb"]["path_image"],false);
        //SEO
        $this->data["seo"] = [
            "title" => "Product",
            "description" => "Established since 2000 and traversing down an exciting and dynamic path with a youthful Universal, a fulfilling sense of a modest achievement permeates us.",
            "keywords" => "PRODUCT UNIVERSAL CARPETS, Product Universal Carpets, product universal carpets, universal, carpets, product",
            "article:published_time" => "",
            "article:section" => "",
        ];

        return view('frontend.product',$this->data);
    }

    public function dataProduct(Request $request)
    {

        $product = product::orderBy("title")->with(["productBrand","productCategory"])->where("status",1);

        //Set Filter
        if((isset($request->filterCategories) && !empty(trim($request->filterCategories))) && (!isset($request->filterSubCategories) || empty(trim($request->filterSubCategories)))){
            $product = $product->where("product_category_id",$request->filterCategories);
        }

        if((isset($request->filterCategories) && !empty(trim($request->filterCategories))) && (isset($request->filterSubCategories) && !empty(trim($request->filterSubCategories)))){
            $product = $product->where("product_category_id",$request->filterSubCategories);
        }

        if(isset($request->filterBrand) && !empty(trim($request->filterBrand))){
            $product = $product->where("product_brand_id",$request->filterBrand);
        }

        $this->data["product"] = $product->paginate(9);
        $this->data["product"] = $this->getGalleryForViewArray($this->data["product"],"path_image",true);
        return Response::json($this->data["product"], 200);
    }

    public function detailProduct($slug)
    {
        if(empty(!$slug)){
            $product = product::where([["slug","=",$slug],["status","=",1]]);
            $this->data["product"] = $product->with(["productCategory","productBrand"])->first();

            if(!$this->data["product"]){
                return abort(404);
            }
            $this->data["product"]["path_image"] = $this->getGalleryForView($this->data["product"]["path_image"],true);
            $this->data["product"]["path_image_thumbnail"] = $this->getGalleryForView($this->data["product"]["path_image_thumbnail"],false);

            $this->data["settingWeb"] = settingWeb::first();
            $this->data["settingWeb"]["path_image"] = $this->getGalleryForView($this->data["settingWeb"]["path_image"],false);

            $this->data["relatedProduct"] = product::where([['product_category_id',"=",$this->data["product"]->product_category_id],['id','!=',$this->data["product"]->id]])->with(["productCategory","productBrand"])->orderByDesc("created_at")->limit(2)->get();
            $this->data["relatedProduct"] = $this->getGalleryForViewArray($this->data["relatedProduct"],"path_image",true);
            $this->data["relatedProduct"] = $this->getGalleryForViewArray($this->data["relatedProduct"],"path_image_thumbnail",false);

            //SEO
            $this->data["seo"] = [
                "title" => isset($this->data["product"]["title"]) ? strip_tags($this->data["product"]["title"]) : "",
                "description" => isset($this->data["product"]["seo_desc"]) ? strip_tags($this->data["product"]["seo_desc"]) : "",
                "keywords" => isset($this->data["product"]["seo_keyword"]) ? strip_tags($this->data["product"]["seo_keyword"]) : "",
                "article:published_time" => isset($this->data["product"]["created_at"]) ? strip_tags($this->data["product"]["created_at"]) : "",
                "article:section" => isset($this->data["product"]["seo_category"]) ? strip_tags($this->data["product"]["seo_category"]) : "",
            ];
            
            return view('frontend.detail_product',$this->data);
        }

        return abort(404);
    }

}
