<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatebannerAboutUsRequest;
use App\Http\Requests\UpdatebannerAboutUsRequest;
use App\Repositories\bannerAboutUsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class bannerAboutUsController extends AppBaseController
{
    /** @var  bannerAboutUsRepository */
    private $bannerAboutUsRepository;

    public function __construct(bannerAboutUsRepository $bannerAboutUsRepo)
    {
        $this->bannerAboutUsRepository = $bannerAboutUsRepo;
    }

    /**
     * Display a listing of the bannerAboutUs.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bannerAboutus = $this->bannerAboutUsRepository->one();

        if(!empty($bannerAboutus)){
            //Set View Image From Gallery
            $bannerAboutus->path_image = $this->getGalleryForView($bannerAboutus->path_image,false);
        }

        return view('banner_aboutus.index')
            ->with('bannerAboutus', $bannerAboutus);
    }

    /**
     * Show the form for creating a new bannerAboutUs.
     *
     * @return Response
     */
    public function create()
    {
        return view('banner_aboutus.create');
    }

    /**
     * Store a newly created bannerAboutUs in storage.
     *
     * @param CreatebannerAboutUsRequest $request
     *
     * @return Response
     */
    public function store(CreatebannerAboutUsRequest $request)
    {
        $input = $request->all();

        $bannerAboutUs = $this->bannerAboutUsRepository->create($input);

        //Set Active Gallery
        $this->setActiveGallery($input["path_image"]);

        Flash::success('Banner About Us saved successfully.');

        return redirect(route('bannerAboutus.index'));
    }

    /**
     * Display the specified bannerAboutUs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bannerAboutUs = $this->bannerAboutUsRepository->find($id);

        if (empty($bannerAboutUs)) {
            Flash::error('Banner About Us not found');

            return redirect(route('bannerAboutus.index'));
        }

        //Set View Image From Gallery
        $bannerAboutUs->path_image = $this->getGalleryForView($bannerAboutUs->path_image,false);

        return view('banner_aboutus.show')->with('bannerAboutUs', $bannerAboutUs);
    }

    /**
     * Show the form for editing the specified bannerAboutUs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bannerAboutUs = $this->bannerAboutUsRepository->find($id);

        if (empty($bannerAboutUs)) {
            Flash::error('Banner About Us not found');

            return redirect(route('bannerAboutus.index'));
        }

        //Set Preview Image on Input
        $bannerAboutUs->path_image = $this->getGallery($bannerAboutUs->path_image);

        return view('banner_aboutus.edit')->with('bannerAboutUs', $bannerAboutUs);
    }

    /**
     * Update the specified bannerAboutUs in storage.
     *
     * @param int $id
     * @param UpdatebannerAboutUsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatebannerAboutUsRequest $request)
    {
        $bannerAboutUs = $this->bannerAboutUsRepository->find($id);

        if (empty($bannerAboutUs)) {
            Flash::error('Banner About Us not found');

            return redirect(route('bannerAboutus.index'));
        }

        //Set Compare Gallery old and new value
        $this->compareGallery($bannerAboutUs["path_image"],$request->path_image);

        $bannerAboutUs = $this->bannerAboutUsRepository->update($request->all(), $id);

        //Set Active Gallery
        $this->setActiveGallery($request->path_image);

        Flash::success('Banner About Us updated successfully.');

        return redirect(route('bannerAboutus.index'));
    }

    /**
     * Remove the specified bannerAboutUs from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bannerAboutUs = $this->bannerAboutUsRepository->find($id);

        if (empty($bannerAboutUs)) {
            Flash::error('Banner About Us not found');

            return redirect(route('bannerAboutus.index'));
        }

        //delete image
        $this->deleteGallery($bannerAboutUs->path_image);

        $this->bannerAboutUsRepository->delete($id);

        Flash::success('Banner About Us deleted successfully.');

        return redirect(route('bannerAboutus.index'));
    }
}
