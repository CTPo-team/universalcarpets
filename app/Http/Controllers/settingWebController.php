<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesettingWebRequest;
use App\Http\Requests\UpdatesettingWebRequest;
use App\Repositories\settingWebRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\settingWeb;

class settingWebController extends AppBaseController
{
    /** @var  settingWebRepository */
    private $settingWebRepository;

    public function __construct(settingWebRepository $settingWebRepo)
    {
        $this->settingWebRepository = $settingWebRepo;
    }

    /**
     * Display a listing of the settingWeb.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $settingWeb = settingWeb::first();

        if (empty($settingWeb)) {
            Flash::error('Setting Web not found');

            return redirect(route('settingWebs.index'));
        }

        return view('setting_webs.edit')->with('settingWeb', $settingWeb);
    }

    /**
     * Show the form for creating a new settingWeb.
     *
     * @return Response
     */
    // public function create()
    // {
    //     return view('setting_webs.create');
    // }

    /**
     * Store a newly created settingWeb in storage.
     *
     * @param CreatesettingWebRequest $request
     *
     * @return Response
     */
    // public function store(CreatesettingWebRequest $request)
    // {
    //     $input = $request->all();

    //     $settingWeb = $this->settingWebRepository->create($input);

    //     Flash::success('Setting Web saved successfully.');

    //     return redirect(route('settingWebs.index'));
    // }

    /**
     * Display the specified settingWeb.
     *
     * @param int $id
     *
     * @return Response
     */
    // public function show($id)
    // {
    //     $settingWeb = $this->settingWebRepository->find($id);

    //     if (empty($settingWeb)) {
    //         Flash::error('Setting Web not found');

    //         return redirect(route('settingWebs.index'));
    //     }

    //     return view('setting_webs.show')->with('settingWeb', $settingWeb);
    // }

    /**
     * Show the form for editing the specified settingWeb.
     *
     * @param int $id
     *
     * @return Response
     */
    // public function edit($id)
    // {
    //     $settingWeb = $this->settingWebRepository->find($id);

    //     if (empty($settingWeb)) {
    //         Flash::error('Setting Web not found');

    //         return redirect(route('settingWebs.index'));
    //     }

    //     return view('setting_webs.edit')->with('settingWeb', $settingWeb);
    // }

    /**
     * Update the specified settingWeb in storage.
     *
     * @param int $id
     * @param UpdatesettingWebRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesettingWebRequest $request)
    {
        $settingWeb = $this->settingWebRepository->find($id);

        if (empty($settingWeb)) {
            Flash::error('Setting Web not found');

            return redirect(route('settingWebs.index'));
        }

        $settingWeb = $this->settingWebRepository->update($request->all(), $id);

        Flash::success('Setting Web updated successfully.');

        return redirect(route('settingWebs.index'));
    }

    /**
     * Remove the specified settingWeb from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    // public function destroy($id)
    // {
    //     $settingWeb = $this->settingWebRepository->find($id);

    //     if (empty($settingWeb)) {
    //         Flash::error('Setting Web not found');

    //         return redirect(route('settingWebs.index'));
    //     }

    //     $this->settingWebRepository->delete($id);

    //     Flash::success('Setting Web deleted successfully.');

    //     return redirect(route('settingWebs.index'));
    // }
}
