<?php namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;

use App\Models\Blog\Category\BlogCategoryRepo;

use App\Http\Requests\Blog\category\CreateCategoryRequest;
use App\Http\Requests\Blog\category\UpdateCategoryRequest;

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller {

    protected $category;
    protected $categoryRepo;

    public function __construct(
        BlogCategoryRepo    $categoryRepo
    )
    {
        $this->categoryRepo = $categoryRepo;

        $this->beforeFilter('@getCategory', ['only' => ['show', 'edit', 'update', 'destroy']]);
    }

    public function getCategory(Route $route)
    {
        $this->category = $this->categoryRepo->find($route->getParameter('category'));
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $name = ['name' => Request::get('name')];

        $categories = $this->categoryRepo->filterAndPaginate($name);

        return view('blog.category.index', compact('categories', 'name'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('blog.category.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateCategoryRequest $request)
	{
        $category = $this->categoryRepo->create(Request::all());

        return redirect()->route('admin.blog.category.show', $category);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return view('blog.category.show')->with('category', $this->category);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return view('blog.category.edit')->with('category', $this->category);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UpdateCategoryRequest $request, $id)
	{
        $this->category->fill(Request::all());
        $this->category->save();

        return redirect()->route('admin.blog.category.show', $this->category);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $this->category->delete();

        Session::flash('success', trans('messages.deleted_record', ['record' => $this->category->name]));

        return redirect()->route('admin.blog.category.index');
	}

}
