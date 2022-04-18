<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproductRequest;
use App\Http\Requests\UpdateproductRequest;
use App\Repositories\productRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\productCategory;
use App\Models\productBrand;
use App\Models\imageProduct;
use Flash;
use Response;

class productController extends AppBaseController
{
    /** @var  productRepository */
    private $productRepository;

    const seo_category = 'product';

    public function __construct(productRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }

    /**
     * Display a listing of the product.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $products = product::with(["productCategory","productBrand"])->orderByDesc('updated_at')->get();

        return view('products.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new product.
     *
     * @return Response
     */
    public function create()
    {   
        $this->data["productCategory"] = $this->replaceProductCategoryName(productCategory::doesntHave('subCategory')->orderByDesc("title")->get());
        $this->data["productBrand"] = productBrand::pluck("title","id");
        return view('products.create',$this->data);
    }

    /**
     * Store a newly created product in storage.
     *
     * @param CreateproductRequest $request
     *
     * @return Response
     */
    public function store(CreateproductRequest $request)
    {
        $input = $request->all();

        //Set SEO
        $input = $this->setSeo($input,$input["desc"],$input["title"],self::seo_category,null);
        $input["slug"] = $this->setSlug($input["title"],(new product())->getTable());

        if($input["featured"] == 1){
            $this->removeFeatured();
        }

        $product = $this->productRepository->create($input);

        //Set Active Gallery
        $this->setActiveGallery($input["path_image"]);
        $this->setActiveGallery($input["path_image_thumbnail"]);
        
        Flash::success('Product saved successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Display the specified product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $product = product::where("id",$id)->with(["productCategory","productBrand"])->first();

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        //Set View Image From Gallery
        $product["path_image_thumbnail"] = $this->getGalleryForView($product["path_image_thumbnail"],false);
        $product["path_image"] = $this->getGalleryForView($product["path_image"],true);
        
        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $this->data["product"] = $this->productRepository->find($id);

        if (empty($this->data["product"])) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        //Set Preview Image on Input
        $this->data["product"]["path_image"] = $this->getGallery($this->data["product"]["path_image"]);
        $this->data["product"]["path_image_thumbnail"] = $this->getGallery($this->data["product"]["path_image_thumbnail"]);
        
        $this->data["productCategory"] = $this->replaceProductCategoryName(productCategory::doesntHave('subCategory')->orderByDesc("title")->get());
        $this->data["productBrand"] = productBrand::pluck("title","id");
        return view('products.edit',$this->data);
    }

    /**
     * Update the specified product in storage.
     *
     * @param int $id
     * @param UpdateproductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateproductRequest $request)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        //Set SEO
        $input = $request->all();
        $input = $this->setSeo($input,$input["desc"],$input["title"],self::seo_category,null);
        
        if(!empty($slug = $this->setSlug($input["title"],(new product())->getTable(),$product->title))){
            $input["slug"] = $slug; 
        }

        if($product["featured"] == 0 && $input["featured"] == 1){
            $this->removeFeatured();
        }
        
        //Set Compare Gallery old and new value
        $this->compareGallery($product["path_image"],$input["path_image"]);
        $this->compareGallery($product["path_image_thumbnail"],$input["path_image_thumbnail"]);


        $product = $this->productRepository->update($input, $id);

        //Set Active Gallery
        $this->setActiveGallery($input["path_image"]);
        $this->setActiveGallery($input["path_image_thumbnail"]);

        Flash::success('Product updated successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified product from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        //delete image
        $this->deleteGallery($product->path_image);

        $this->productRepository->delete($id);

        Flash::success('Product deleted successfully.');

        return redirect(route('products.index'));
    }

    public function replaceProductCategoryName($productCategory)
    {
        $data = [];
        foreach ($productCategory as $key => $value) {
            if(isset($value->parent) && !empty($value->parent)){
                $data[$value->id] = $value->parent->title." -> ".$value->title;
            }else{
                $data[$value->id] = $value->title;
            }
        }

        return $data;
    }

    public function removeFeatured()
    {
        product::where("featured",1)->update(["featured" => 0]);
    }
}
