<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateblogCategoryRequest;
use App\Http\Requests\UpdateblogCategoryRequest;
use App\Repositories\blogCategoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class blogCategoryController extends AppBaseController
{
    /** @var  blogCategoryRepository */
    private $blogCategoryRepository;

    const seo_category = 'blog category';

    public function __construct(blogCategoryRepository $blogCategoryRepo)
    {
        $this->blogCategoryRepository = $blogCategoryRepo;
    }

    /**
     * Display a listing of the blogCategory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $blogCategories = $this->blogCategoryRepository->all();

        return view('blog_categories.index')
            ->with('blogCategories', $blogCategories);
    }

    /**
     * Show the form for creating a new blogCategory.
     *
     * @return Response
     */
    public function create()
    {
        return view('blog_categories.create');
    }

    /**
     * Store a newly created blogCategory in storage.
     *
     * @param CreateblogCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateblogCategoryRequest $request)
    {
        $input = $request->all();
        
        $input = $this->setSeo($input,$input["desc"],$input["title"],self::seo_category,null);
        $blogCategory = $this->blogCategoryRepository->create($input);

        Flash::success('Blog Category saved successfully.');

        return redirect(route('blogCategories.index'));
    }

    /**
     * Display the specified blogCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $blogCategory = $this->blogCategoryRepository->find($id);

        if (empty($blogCategory)) {
            Flash::error('Blog Category not found');

            return redirect(route('blogCategories.index'));
        }

        return view('blog_categories.show')->with('blogCategory', $blogCategory);
    }

    /**
     * Show the form for editing the specified blogCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $blogCategory = $this->blogCategoryRepository->find($id);

        if (empty($blogCategory)) {
            Flash::error('Blog Category not found');

            return redirect(route('blogCategories.index'));
        }

        return view('blog_categories.edit')->with('blogCategory', $blogCategory);
    }

    /**
     * Update the specified blogCategory in storage.
     *
     * @param int $id
     * @param UpdateblogCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateblogCategoryRequest $request)
    {
        $blogCategory = $this->blogCategoryRepository->find($id);

        if (empty($blogCategory)) {
            Flash::error('Blog Category not found');

            return redirect(route('blogCategories.index'));
        }

        $input=$request->all();
        $input = $this->setSeo($input,$input["desc"],$input["title"],self::seo_category,null);

        $blogCategory = $this->blogCategoryRepository->update($input, $id);

        Flash::success('Blog Category updated successfully.');

        return redirect(route('blogCategories.index'));
    }

    /**
     * Remove the specified blogCategory from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $blogCategory = $this->blogCategoryRepository->find($id);

        if (empty($blogCategory)) {
            Flash::error('Blog Category not found');

            return redirect(route('blogCategories.index'));
        }

        $this->blogCategoryRepository->delete($id);

        Flash::success('Blog Category deleted successfully.');

        return redirect(route('blogCategories.index'));
    }
}
