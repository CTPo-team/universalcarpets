<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproductRequest;
use App\Http\Requests\UpdateproductRequest;
use App\Repositories\productRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\productCategory;
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
        $products = product::with("productCategory")->orderByDesc('updated_at')->get();

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
        $this->data["productCategory"] = productCategory::pluck("title","id");
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
        unset($input["path_image"]);
        $product = $this->productRepository->create($input);

        //upload image
        $this->uploadImageProduct($product->id,$request);
        
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
        $product = product::where("id",$id)->with(["imageProduct","productCategory"])->first();

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }
        
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
        $this->data["productCategory"] = productCategory::pluck("title","id");
        return view('products.edit')->with('product', $this->data);
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
        $product = $this->productRepository->update($input, $id);

        //File Upload
        if($request->hasFile('path_image')){ 
            //delete image
            $this->deleteImageProduct($id);

            //upload image
            $this->uploadImageProduct($id,$request);
        }

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
        $this->deleteImageProduct($id);

        $this->productRepository->delete($id);

        Flash::success('Product deleted successfully.');

        return redirect(route('products.index'));
    }

    public function uploadImageProduct($productId,$request)
    {
        if($request->hasfile('path_image'))
         {
            foreach($request->file('path_image') as $file)
            {
                //File Upload
                $filename = $this->uploadFile($file,'img/product');

                imageProduct::create([
                    "product_id" => $productId,
                    "path_image" => $filename
                ]);
            }
         }
    }

    public function deleteImageProduct($productId)
    {
        $image = imageProduct::where("product_id",$productId)->get();
        foreach ($image as $key => $value) {
            $this->deleteFile($value["path_image"],"img/product");
        }
        imageProduct::where("product_id",$productId)->delete();
    }
}
