<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateblogRequest;
use App\Http\Requests\UpdateblogRequest;
use App\Repositories\blogRepository;
use App\Models\blog;
use App\Models\blogCategory;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class blogController extends AppBaseController
{
    /** @var  blogRepository */
    private $blogRepository;

    const seo_category = 'blog';

    public function __construct(blogRepository $blogRepo)
    {
        $this->blogRepository = $blogRepo;
    }

    /**
     * Display a listing of the blog.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $blogs =blog::with("blogCategory")->orderByDesc("created_at")->get();

        return view('blogs.index')
            ->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new blog.
     *
     * @return Response
     */
    public function create()
    {
        $this->data["blogCategory"] = blogCategory::pluck("title","id");
        return view('blogs.create',$this->data);
    }

    /**
     * Store a newly created blog in storage.
     *
     * @param CreateblogRequest $request
     *
     * @return Response
     */
    public function store(CreateblogRequest $request)
    {
        $input = $request->all();

        $input = $this->setSeo($input,$input["short_desc"],$input["title"],self::seo_category,null);
        $input["slug"] = $this->setSlug($input["title"],(new blog())->getTable());
        
        //File Upload
        $input["path_image"] = $this->uploadFile($request->path_image,'img/blog');

        $blog = $this->blogRepository->create($input);

        Flash::success('Blog saved successfully.');

        return redirect(route('blogs.index'));
    }

    /**
     * Display the specified blog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $blog = blog::with("blogCategory")->where("id",$id)->first();

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        return view('blogs.show')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified blog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $this->data["blog"] = $this->blogRepository->find($id);

        if (empty($this->data["blog"])) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }
        $this->data["blogCategory"] = blogCategory::pluck("title","id");
        return view('blogs.edit',$this->data);
    }

    /**
     * Update the specified blog in storage.
     *
     * @param int $id
     * @param UpdateblogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateblogRequest $request)
    {
        $blog = $this->blogRepository->find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        $input=$request->all();
        $input = $this->setSeo($input,$input["short_desc"],$input["title"],self::seo_category,null);

        if(!empty($slug = $this->setSlug($input["title"],(new blog())->getTable()))){
            $input["slug"] = $slug;
        }
        
        //File Upload
        if($request->hasFile('path_image')){ 
            $this->deleteFile($blog->path_image,"img/blog");
            $input["path_image"] = $this->uploadFile($request->path_image,'img/blog');
        }

        $blog = $this->blogRepository->update($input, $id);

        Flash::success('Blog updated successfully.');

        return redirect(route('blogs.index'));
    }

    /**
     * Remove the specified blog from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $blog = $this->blogRepository->find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        $this->deleteFile($blog->path_image,"img/blog");
        
        $this->blogRepository->delete($id);

        Flash::success('Blog deleted successfully.');

        return redirect(route('blogs.index'));
    }
}
