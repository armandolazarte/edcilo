<?php namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;

use App\Models\Blog\Subcategory\BlogSubcategoryRepo;
use App\Models\Blog\Category\BlogCategoryRepo;

use App\Http\Requests\Blog\subcategory\CreateSubcategoryRequest;
use App\Http\Requests\Blog\subcategory\UpdateSubcategoryRequest;

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class SubcategoryController extends Controller {

    protected $subcategory;
    protected $subcategoryRepo;
    protected $categoryRepo;

    public function __construct(
        BlogSubcategoryRepo $subcategoryRepo,
        BlogCategoryRepo    $categoryRepo
    )
    {
        $this->subcategoryRepo  = $subcategoryRepo;
        $this->categoryRepo     = $categoryRepo;

        $this->beforeFilter('@getSubcategory', ['only' => ['show', 'edit', 'update', 'destroy']]);
    }

    public function getSubcategory(Route $route)
    {
        $this->subcategory = $this->subcategoryRepo->find($route->getParameter('subcategory'));
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $name = ['name' => Request::get('name')];

        $subcategories = $this->subcategoryRepo->filterAndPaginate($name);

        return view('blog.subcategory.index', compact('subcategories', 'name'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $categories_list = $this->categoryRepo->lists('name', 'id');

        return view('blog.subcategory.create', compact('categories_list'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateSubcategoryRequest $request)
	{
        $subcategory = $this->subcategoryRepo->create(Request::all());

        return redirect()->route('admin.blog.subcategory.show', $subcategory);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return view('blog.subcategory.show')->with('subcategory', $this->subcategory);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $categories_list = $this->categoryRepo->lists('name', 'id');

        return view('blog.subcategory.edit', compact('categories_list'))->with('subcategory', $this->subcategory);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UpdateSubcategoryRequest $request, $id)
	{
        $this->subcategory->fill(Request::all());
        $this->subcategory->save();

        Session::flash('success', trans('messages.updated_record', ['record' => $this->subcategory->name]));

        return redirect()->route('admin.blog.subcategory.show', $this->subcategory);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $this->subcategory->delete();

        Session::flash('success', trans('messages.deleted_record', ['record' => $this->subcategory->name]));

        return redirect()->route('admin.blog.subcategory.index');
	}

}
