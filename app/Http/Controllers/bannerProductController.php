<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatebannerProductRequest;
use App\Http\Requests\UpdatebannerProductRequest;
use App\Repositories\bannerProductRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class bannerProductController extends AppBaseController
{
    /** @var  bannerProductRepository */
    private $bannerProductRepository;

    public function __construct(bannerProductRepository $bannerProductRepo)
    {
        $this->bannerProductRepository = $bannerProductRepo;
    }

    /**
     * Display a listing of the bannerProduct.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bannerProducts = $this->bannerProductRepository->all();

        return view('banner_products.index')
            ->with('bannerProducts', $bannerProducts);
    }

    /**
     * Show the form for creating a new bannerProduct.
     *
     * @return Response
     */
    public function create()
    {
        return view('banner_products.create');
    }

    /**
     * Store a newly created bannerProduct in storage.
     *
     * @param CreatebannerProductRequest $request
     *
     * @return Response
     */
    public function store(CreatebannerProductRequest $request)
    {
        $input = $request->all();

        $bannerProduct = $this->bannerProductRepository->create($input);

        //Set Active Gallery
        $this->setActiveGallery($input["path_image"]);

        Flash::success('Banner Product saved successfully.');

        return redirect(route('bannerProducts.index'));
    }

    /**
     * Display the specified bannerProduct.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bannerProduct = $this->bannerProductRepository->find($id);

        if (empty($bannerProduct)) {
            Flash::error('Banner Product not found');

            return redirect(route('bannerProducts.index'));
        }

        //Set View Image From Gallery
        $bannerProduct["path_image"] = $this->getGalleryForView($bannerProduct["path_image"]);
        

        return view('banner_products.show')->with('bannerProduct', $bannerProduct);
    }

    /**
     * Show the form for editing the specified bannerProduct.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bannerProduct = $this->bannerProductRepository->find($id);

        if (empty($bannerProduct)) {
            Flash::error('Banner Product not found');

            return redirect(route('bannerProducts.index'));
        }

        //Set Preview Image on Input
        $bannerProduct["path_image"] = $this->getGallery($bannerProduct["path_image"]);
        
        return view('banner_products.edit')->with('bannerProduct', $bannerProduct);
    }

    /**
     * Update the specified bannerProduct in storage.
     *
     * @param int $id
     * @param UpdatebannerProductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatebannerProductRequest $request)
    {
        $bannerProduct = $this->bannerProductRepository->find($id);

        if (empty($bannerProduct)) {
            Flash::error('Banner Product not found');

            return redirect(route('bannerProducts.index'));
        }

        $input = $request->all();

        //Set Compare Gallery old and new value
        $this->compareGallery($bannerProduct["path_image"],$input["path_image"]);

        $bannerProduct = $this->bannerProductRepository->update($input, $id);

        //Set Active Gallery
        $this->setActiveGallery($input["path_image"]);

        Flash::success('Banner Product updated successfully.');

        return redirect(route('bannerProducts.index'));
    }

    /**
     * Remove the specified bannerProduct from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bannerProduct = $this->bannerProductRepository->find($id);

        if (empty($bannerProduct)) {
            Flash::error('Banner Product not found');

            return redirect(route('bannerProducts.index'));
        }

        //delete image
        $this->deleteGallery($bannerProduct->path_image);

        $this->bannerProductRepository->delete($id);

        Flash::success('Banner Product deleted successfully.');

        return redirect(route('bannerProducts.index'));
    }
}
