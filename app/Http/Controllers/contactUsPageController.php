<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecontactUsPageRequest;
use App\Http\Requests\UpdatecontactUsPageRequest;
use App\Repositories\contactUsPageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class contactUsPageController extends AppBaseController
{
    /** @var  contactUsPageRepository */
    private $contactUsPageRepository;

    public function __construct(contactUsPageRepository $contactUsPageRepo)
    {
        $this->contactUsPageRepository = $contactUsPageRepo;
    }

    /**
     * Display a listing of the contactUsPage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $contactUsPages = $this->contactUsPageRepository->all();

        return view('contact_us_pages.index')
            ->with('contactUsPages', $contactUsPages);
    }

    /**
     * Show the form for creating a new contactUsPage.
     *
     * @return Response
     */
    public function create()
    {
        return view('contact_us_pages.create');
    }

    /**
     * Store a newly created contactUsPage in storage.
     *
     * @param CreatecontactUsPageRequest $request
     *
     * @return Response
     */
    public function store(CreatecontactUsPageRequest $request)
    {
        $input = $request->all();

        $contactUsPage = $this->contactUsPageRepository->create($input);

        Flash::success('Contact Us saved successfully.');

        return redirect(route('contactUsPages.index'));
    }

    /**
     * Display the specified contactUsPage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contactUsPage = $this->contactUsPageRepository->find($id);

        if (empty($contactUsPage)) {
            Flash::error('Contact Us not found');

            return redirect(route('contactUsPages.index'));
        }

        return view('contact_us_pages.show')->with('contactUsPage', $contactUsPage);
    }

    /**
     * Show the form for editing the specified contactUsPage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contactUsPage = $this->contactUsPageRepository->find($id);

        if (empty($contactUsPage)) {
            Flash::error('Contact Us not found');

            return redirect(route('contactUsPages.index'));
        }

        return view('contact_us_pages.edit')->with('contactUsPage', $contactUsPage);
    }

    /**
     * Update the specified contactUsPage in storage.
     *
     * @param int $id
     * @param UpdatecontactUsPageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecontactUsPageRequest $request)
    {
        $contactUsPage = $this->contactUsPageRepository->find($id);

        if (empty($contactUsPage)) {
            Flash::error('Contact Us not found');

            return redirect(route('contactUsPages.index'));
        }

        $contactUsPage = $this->contactUsPageRepository->update($request->all(), $id);

        Flash::success('Contact Us updated successfully.');

        return redirect(route('contactUsPages.index'));
    }

    /**
     * Remove the specified contactUsPage from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contactUsPage = $this->contactUsPageRepository->find($id);

        if (empty($contactUsPage)) {
            Flash::error('Contact Us not found');

            return redirect(route('contactUsPages.index'));
        }

        $this->contactUsPageRepository->delete($id);

        Flash::success('Contact Us deleted successfully.');

        return redirect(route('contactUsPages.index'));
    }
}
