<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproductCategoryRequest;
use App\Http\Requests\UpdateproductCategoryRequest;
use App\Repositories\productCategoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\productCategory;
use Flash;
use Response;

class productCategoryController extends AppBaseController
{
    /** @var  productCategoryRepository */
    private $productCategoryRepository;
    
    const seo_category = 'product category';

    public function __construct(productCategoryRepository $productCategoryRepo)
    {
        $this->productCategoryRepository = $productCategoryRepo;
    }

    /**
     * Display a listing of the productCategory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $productCategories = $this->productCategoryRepository->all();

        return view('product_categories.index')
            ->with('productCategories', $productCategories);
    }

    /**
     * Show the form for creating a new productCategory.
     *
     * @return Response
     */
    public function create()
    {
        $this->data["subCategory"] = productCategory::where("product_category_id","=",null)->pluck("title","id");
        return view('product_categories.create',$this->data);
    }

    /**
     * Store a newly created productCategory in storage.
     *
     * @param CreateproductCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateproductCategoryRequest $request)
    {
        $input = $request->all();
        if(!isset($input["subcategory"])){
            $input["product_category_id"] = null;
        }
        $input = $this->setSeo($input,$input["desc"],$input["title"],self::seo_category,null);
        $input["slug"] = $this->setSlug($input["title"],(new productCategory())->getTable());
        $productCategory = $this->productCategoryRepository->create($input);

        Flash::success('Product Category saved successfully.');

        return redirect(route('productCategories.index'));
    }

    /**
     * Display the specified productCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productCategory = $this->productCategoryRepository->find($id);

        if (empty($productCategory)) {
            Flash::error('Product Category not found');

            return redirect(route('productCategories.index'));
        }

        return view('product_categories.show')->with('productCategory', $productCategory);
    }

    /**
     * Show the form for editing the specified productCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $this->data["productCategory"] = productCategory::where("id",$id)->with("subCategory")->first();
        if (empty($this->data["productCategory"])) {
            Flash::error('Product Category not found');

            return redirect(route('productCategories.index'));
        }

        $this->data["subCategory"] = productCategory::where([["product_category_id","=",null],["id","!=",$id]])->pluck("title","id");
        return view('product_categories.edit',$this->data);
    }

    /**
     * Update the specified productCategory in storage.
     *
     * @param int $id
     * @param UpdateproductCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateproductCategoryRequest $request)
    {
        $productCategory = $this->productCategoryRepository->find($id);

        if (empty($productCategory)) {
            Flash::error('Product Category not found');

            return redirect(route('productCategories.index'));
        }

        $input=$request->all();
        if(!isset($input["subcategory"])){
            $input["product_category_id"] = null;
        }
        $input = $this->setSeo($input,$input["desc"],$input["title"],self::seo_category,null);
        
        if(!empty($slug = $this->setSlug($input["title"],(new productCategory())->getTable(),$productCategory->title))){
            $input["slug"] = $slug;
        }
        
        $productCategory = $this->productCategoryRepository->update($input, $id);

        Flash::success('Product Category updated successfully.');

        return redirect(route('productCategories.index'));
    }

    /**
     * Remove the specified productCategory from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productCategory = $this->productCategoryRepository->find($id);

        if (empty($productCategory)) {
            Flash::error('Product Category not found');

            return redirect(route('productCategories.index'));
        }

        $this->productCategoryRepository->delete($id);

        Flash::success('Product Category deleted successfully.');

        return redirect(route('productCategories.index'));
    }
}
