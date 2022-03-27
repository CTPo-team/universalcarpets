<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatebannerHomepageRequest;
use App\Http\Requests\UpdatebannerHomepageRequest;
use App\Repositories\bannerHomepageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class bannerHomepageController extends AppBaseController
{
    /** @var  bannerHomepageRepository */
    private $bannerHomepageRepository;

    public function __construct(bannerHomepageRepository $bannerHomepageRepo)
    {
        $this->bannerHomepageRepository = $bannerHomepageRepo;
    }

    /**
     * Display a listing of the bannerHomepage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bannerHomepages = $this->bannerHomepageRepository->all();

        return view('banner_homepages.index')
            ->with('bannerHomepages', $bannerHomepages);
    }

    /**
     * Show the form for creating a new bannerHomepage.
     *
     * @return Response
     */
    public function create()
    {
        return view('banner_homepages.create');
    }

    /**
     * Store a newly created bannerHomepage in storage.
     *
     * @param CreatebannerHomepageRequest $request
     *
     * @return Response
     */
    public function store(CreatebannerHomepageRequest $request)
    {
        $input = $request->all();

        $bannerHomepage = $this->bannerHomepageRepository->create($input);

        //Set Active Gallery
        $this->setActiveGallery($input["path_image"]);

        Flash::success('Banner Homepage saved successfully.');

        return redirect(route('bannerHomepages.index'));
    }

    /**
     * Display the specified bannerHomepage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bannerHomepage = $this->bannerHomepageRepository->find($id);

        if (empty($bannerHomepage)) {
            Flash::error('Banner Homepage not found');

            return redirect(route('bannerHomepages.index'));
        }

        //Set View Image From Gallery
        $bannerHomepage["path_image"] = $this->getGalleryForView($bannerHomepage["path_image"]);
        
        return view('banner_homepages.show')->with('bannerHomepage', $bannerHomepage);
    }

    /**
     * Show the form for editing the specified bannerHomepage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bannerHomepage = $this->bannerHomepageRepository->find($id);

        if (empty($bannerHomepage)) {
            Flash::error('Banner Homepage not found');

            return redirect(route('bannerHomepages.index'));
        }

        //Set Preview Image on Input
        $bannerHomepage["path_image"] = $this->getGallery($bannerHomepage["path_image"]);
        
        return view('banner_homepages.edit')->with('bannerHomepage', $bannerHomepage);
    }

    /**
     * Update the specified bannerHomepage in storage.
     *
     * @param int $id
     * @param UpdatebannerHomepageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatebannerHomepageRequest $request)
    {
        $bannerHomepage = $this->bannerHomepageRepository->find($id);

        if (empty($bannerHomepage)) {
            Flash::error('Banner Homepage not found');

            return redirect(route('bannerHomepages.index'));
        }

        $input = $request->all();

        //File Upload
        if($request->hasFile('path_image')){ 
            $this->deleteFile($bannerHomepage->path_image,"img/banner");
            $input["path_image"] = $this->uploadFile($request->path_image,'img/banner');
        }

        //Set Compare Gallery old and new value
        $this->compareGallery($bannerHomepage["path_image"],$input["path_image"]);

        $bannerHomepage = $this->bannerHomepageRepository->update($input, $id);

        //Set Active Gallery
        $this->setActiveGallery($input["path_image"]);

        Flash::success('Banner Homepage updated successfully.');

        return redirect(route('bannerHomepages.index'));
    }

    /**
     * Remove the specified bannerHomepage from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bannerHomepage = $this->bannerHomepageRepository->find($id);

        if (empty($bannerHomepage)) {
            Flash::error('Banner Homepage not found');

            return redirect(route('bannerHomepages.index'));
        }

        //delete image
        $this->deleteGallery($bannerHomepage->path_image);

        $this->bannerHomepageRepository->delete($id);

        Flash::success('Banner Homepage deleted successfully.');

        return redirect(route('bannerHomepages.index'));
    }
}
