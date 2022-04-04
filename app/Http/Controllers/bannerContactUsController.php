<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatebannerContactUsRequest;
use App\Http\Requests\UpdatebannerContactUsRequest;
use App\Repositories\bannerContactUsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class bannerContactUsController extends AppBaseController
{
    /** @var  bannerContactUsRepository */
    private $bannerContactUsRepository;

    public function __construct(bannerContactUsRepository $bannerContactUsRepo)
    {
        $this->bannerContactUsRepository = $bannerContactUsRepo;
    }

    /**
     * Display a listing of the bannerContactUs.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bannerContactus = $this->bannerContactUsRepository->one();

        if(!empty($bannerContactus)){
            //Set View Image From Gallery
            $bannerContactus->path_image = $this->getGalleryForView($bannerContactus->path_image,false);
        }

        return view('banner_contactus.index')
            ->with('bannerContactus', $bannerContactus);
    }

    /**
     * Show the form for creating a new bannerContactUs.
     *
     * @return Response
     */
    public function create()
    {
        return view('banner_contactus.create');
    }

    /**
     * Store a newly created bannerContactUs in storage.
     *
     * @param CreatebannerContactUsRequest $request
     *
     * @return Response
     */
    public function store(CreatebannerContactUsRequest $request)
    {
        $input = $request->all();

        $bannerContactUs = $this->bannerContactUsRepository->create($input);

        //Set Active Gallery
        $this->setActiveGallery($input["path_image"]);

        Flash::success('Banner Contact Us saved successfully.');

        return redirect(route('bannerContactus.index'));
    }

    /**
     * Display the specified bannerContactUs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bannerContactUs = $this->bannerContactUsRepository->find($id);

        if (empty($bannerContactUs)) {
            Flash::error('Banner Contact Us not found');

            return redirect(route('bannerContactus.index'));
        }

        //Set View Image From Gallery
        $bannerContactUs->path_image = $this->getGalleryForView($bannerContactUs->path_image,false);

        return view('banner_contactus.show')->with('bannerContactUs', $bannerContactUs);
    }

    /**
     * Show the form for editing the specified bannerContactUs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bannerContactUs = $this->bannerContactUsRepository->find($id);

        if (empty($bannerContactUs)) {
            Flash::error('Banner Contact Us not found');

            return redirect(route('bannerContactus.index'));
        }

        //Set Preview Image on Input
        $bannerContactUs->path_image = $this->getGallery($bannerContactUs->path_image);

        return view('banner_contactus.edit')->with('bannerContactUs', $bannerContactUs);
    }

    /**
     * Update the specified bannerContactUs in storage.
     *
     * @param int $id
     * @param UpdatebannerContactUsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatebannerContactUsRequest $request)
    {
        $bannerContactUs = $this->bannerContactUsRepository->find($id);

        if (empty($bannerContactUs)) {
            Flash::error('Banner Contact Us not found');

            return redirect(route('bannerContactus.index'));
        }

        //Set Compare Gallery old and new value
        $this->compareGallery($bannerContactUs["path_image"],$request->path_image);

        $bannerContactUs = $this->bannerContactUsRepository->update($request->all(), $id);

        //Set Active Gallery
        $this->setActiveGallery($request->path_image);

        Flash::success('Banner Contact Us updated successfully.');

        return redirect(route('bannerContactus.index'));
    }

    /**
     * Remove the specified bannerContactUs from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bannerContactUs = $this->bannerContactUsRepository->find($id);

        if (empty($bannerContactUs)) {
            Flash::error('Banner Contact Us not found');

            return redirect(route('bannerContactus.index'));
        }

        //delete image
        $this->deleteGallery($bannerContactUs->path_image);

        $this->bannerContactUsRepository->delete($id);

        Flash::success('Banner Contact Us deleted successfully.');

        return redirect(route('bannerContactus.index'));
    }
}
