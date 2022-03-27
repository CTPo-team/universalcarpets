<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatebannerBlogRequest;
use App\Http\Requests\UpdatebannerBlogRequest;
use App\Repositories\bannerBlogRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class bannerBlogController extends AppBaseController
{
    /** @var  bannerBlogRepository */
    private $bannerBlogRepository;

    public function __construct(bannerBlogRepository $bannerBlogRepo)
    {
        $this->bannerBlogRepository = $bannerBlogRepo;
    }

    /**
     * Display a listing of the bannerBlog.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bannerBlogs = $this->bannerBlogRepository->one();

        if(!empty($bannerBlogs)){
            //Set View Image From Gallery
            $bannerBlogs->path_image = $this->getGalleryForView($bannerBlogs->path_image);
        }

        return view('banner_blogs.index')
            ->with('bannerBlogs', $bannerBlogs);
    }

    /**
     * Show the form for creating a new bannerBlog.
     *
     * @return Response
     */
    public function create()
    {
        return view('banner_blogs.create');
    }

    /**
     * Store a newly created bannerBlog in storage.
     *
     * @param CreatebannerBlogRequest $request
     *
     * @return Response
     */
    public function store(CreatebannerBlogRequest $request)
    {
        $input = $request->all();

        $bannerBlog = $this->bannerBlogRepository->create($input);

        //Set Active Gallery
        $this->setActiveGallery($input["path_image"]);

        Flash::success('Banner Blog saved successfully.');

        return redirect(route('bannerBlogs.index'));
    }

    /**
     * Display the specified bannerBlog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bannerBlog = $this->bannerBlogRepository->find($id);

        if (empty($bannerBlog)) {
            Flash::error('Banner Blog not found');

            return redirect(route('bannerBlogs.index'));
        }

        //Set View Image From Gallery
        $bannerBlog->path_image = $this->getGalleryForView($bannerBlog->path_image);

        return view('banner_blogs.show')->with('bannerBlog', $bannerBlog);
    }

    /**
     * Show the form for editing the specified bannerBlog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bannerBlog = $this->bannerBlogRepository->find($id);

        if (empty($bannerBlog)) {
            Flash::error('Banner Blog not found');

            return redirect(route('bannerBlogs.index'));
        }

        //Set Preview Image on Input
        $bannerBlog->path_image = $this->getGallery($bannerBlog->path_image);


        return view('banner_blogs.edit')->with('bannerBlog', $bannerBlog);
    }

    /**
     * Update the specified bannerBlog in storage.
     *
     * @param int $id
     * @param UpdatebannerBlogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatebannerBlogRequest $request)
    {
        $bannerBlog = $this->bannerBlogRepository->find($id);

        if (empty($bannerBlog)) {
            Flash::error('Banner Blog not found');

            return redirect(route('bannerBlogs.index'));
        }

        //Set Compare Gallery old and new value
        $this->compareGallery($bannerBlog["path_image"],$request->path_image);

        $bannerBlog = $this->bannerBlogRepository->update($request->all(), $id);

        //Set Active Gallery
        $this->setActiveGallery($request->path_image);

        Flash::success('Banner Blog updated successfully.');

        return redirect(route('bannerBlogs.index'));
    }

    /**
     * Remove the specified bannerBlog from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bannerBlog = $this->bannerBlogRepository->find($id);

        if (empty($bannerBlog)) {
            Flash::error('Banner Blog not found');

            return redirect(route('bannerBlogs.index'));
        }

        //delete image
        $this->deleteGallery($bannerBlog->path_image);

        $this->bannerBlogRepository->delete($id);

        Flash::success('Banner Blog deleted successfully.');

        return redirect(route('bannerBlogs.index'));
    }
}
