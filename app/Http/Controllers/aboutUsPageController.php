<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateaboutUsPageRequest;
use App\Http\Requests\UpdateaboutUsPageRequest;
use App\Repositories\aboutUsPageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class aboutUsPageController extends AppBaseController
{
    /** @var  aboutUsPageRepository */
    private $aboutUsPageRepository;

    public function __construct(aboutUsPageRepository $aboutUsPageRepo)
    {
        $this->aboutUsPageRepository = $aboutUsPageRepo;
    }

    /**
     * Display a listing of the aboutUsPage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $aboutUsPages = $this->aboutUsPageRepository->all();

        return view('about_us_pages.index')
            ->with('aboutUsPages', $aboutUsPages);
    }

    /**
     * Show the form for creating a new aboutUsPage.
     *
     * @return Response
     */
    public function create()
    {
        return view('about_us_pages.create');
    }

    /**
     * Store a newly created aboutUsPage in storage.
     *
     * @param CreateaboutUsPageRequest $request
     *
     * @return Response
     */
    public function store(CreateaboutUsPageRequest $request)
    {
        $input = $request->all();

        $aboutUsPage = $this->aboutUsPageRepository->create($input);

        Flash::success('About Us Page saved successfully.');

        return redirect(route('aboutUsPages.index'));
    }

    /**
     * Display the specified aboutUsPage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $aboutUsPage = $this->aboutUsPageRepository->find($id);

        if (empty($aboutUsPage)) {
            Flash::error('About Us Page not found');

            return redirect(route('aboutUsPages.index'));
        }

        return view('about_us_pages.show')->with('aboutUsPage', $aboutUsPage);
    }

    /**
     * Show the form for editing the specified aboutUsPage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $aboutUsPage = $this->aboutUsPageRepository->find($id);

        if (empty($aboutUsPage)) {
            Flash::error('About Us Page not found');

            return redirect(route('aboutUsPages.index'));
        }

        return view('about_us_pages.edit')->with('aboutUsPage', $aboutUsPage);
    }

    /**
     * Update the specified aboutUsPage in storage.
     *
     * @param int $id
     * @param UpdateaboutUsPageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateaboutUsPageRequest $request)
    {
        $aboutUsPage = $this->aboutUsPageRepository->find($id);

        if (empty($aboutUsPage)) {
            Flash::error('About Us Page not found');

            return redirect(route('aboutUsPages.index'));
        }

        $aboutUsPage = $this->aboutUsPageRepository->update($request->all(), $id);

        Flash::success('About Us Page updated successfully.');

        return redirect(route('aboutUsPages.index'));
    }

    /**
     * Remove the specified aboutUsPage from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $aboutUsPage = $this->aboutUsPageRepository->find($id);

        if (empty($aboutUsPage)) {
            Flash::error('About Us Page not found');

            return redirect(route('aboutUsPages.index'));
        }

        $this->aboutUsPageRepository->delete($id);

        Flash::success('About Us Page deleted successfully.');

        return redirect(route('aboutUsPages.index'));
    }
}
