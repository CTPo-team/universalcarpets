<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproductBrandRequest;
use App\Http\Requests\UpdateproductBrandRequest;
use App\Repositories\productBrandRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\productBrand;
use Flash;
use Response;

class productBrandController extends AppBaseController
{
    /** @var  productBrandRepository */
    private $productBrandRepository;

    public function __construct(productBrandRepository $productBrandRepo)
    {
        $this->productBrandRepository = $productBrandRepo;
    }

    /**
     * Display a listing of the productBrand.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $productBrands = $this->productBrandRepository->all();

        return view('product_brands.index')
            ->with('productBrands', $productBrands);
    }

    /**
     * Show the form for creating a new productBrand.
     *
     * @return Response
     */
    public function create()
    {
        return view('product_brands.create');
    }

    /**
     * Store a newly created productBrand in storage.
     *
     * @param CreateproductBrandRequest $request
     *
     * @return Response
     */
    public function store(CreateproductBrandRequest $request)
    {
        $input = $request->all();

        $input["slug"] = $this->setSlug($input["title"],(new productBrand())->getTable());
        $productBrand = $this->productBrandRepository->create($input);

        Flash::success('Product Brand saved successfully.');

        return redirect(route('productBrands.index'));
    }

    /**
     * Display the specified productBrand.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productBrand = $this->productBrandRepository->find($id);

        if (empty($productBrand)) {
            Flash::error('Product Brand not found');

            return redirect(route('productBrands.index'));
        }

        return view('product_brands.show')->with('productBrand', $productBrand);
    }

    /**
     * Show the form for editing the specified productBrand.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productBrand = $this->productBrandRepository->find($id);

        if (empty($productBrand)) {
            Flash::error('Product Brand not found');

            return redirect(route('productBrands.index'));
        }

        return view('product_brands.edit')->with('productBrand', $productBrand);
    }

    /**
     * Update the specified productBrand in storage.
     *
     * @param int $id
     * @param UpdateproductBrandRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateproductBrandRequest $request)
    {
        $productBrand = $this->productBrandRepository->find($id);

        if (empty($productBrand)) {
            Flash::error('Product Brand not found');

            return redirect(route('productBrands.index'));
        }
        $input = $request->all();
        $input["slug"] = $this->setSlug($input["title"],(new productBrand())->getTable(),$productBrand->title);
        $productBrand = $this->productBrandRepository->update($input, $id);

        Flash::success('Product Brand updated successfully.');

        return redirect(route('productBrands.index'));
    }

    /**
     * Remove the specified productBrand from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productBrand = $this->productBrandRepository->find($id);

        if (empty($productBrand)) {
            Flash::error('Product Brand not found');

            return redirect(route('productBrands.index'));
        }

        $this->productBrandRepository->delete($id);

        Flash::success('Product Brand deleted successfully.');

        return redirect(route('productBrands.index'));
    }
}
