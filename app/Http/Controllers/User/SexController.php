<?php namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\User\userSex\UserSexRepo;

use App\Http\Requests\User\userSex\CreateSexRequest;
use App\Http\Requests\User\userSex\UpdateSexRequest;

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Request;

class SexController extends Controller {

    protected $sex;
    protected $sexRepo;

    public function __construct(
        UserSexRepo $sexRepo
    )
    {
        $this->sexRepo  = $sexRepo;

        $this->beforeFilter('@findSex', ['only' => ['show', 'edit', 'update', 'destroy']]);
    }

    public function findSex(Route $route)
    {
        $this->sex = $this->sexRepo->findOrFail($route->getParameter('sex'));
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $name = ['name' => Request::get('name')];

        $sexes = $this->sexRepo->filterAndPaginate($name);

        return view('user.sex.index', compact('sexes', 'name'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('user.sex.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateSexRequest $request)
	{
        $sex = $this->sexRepo->create(Request::all());

        return redirect()->route('admin.sex.show', $sex);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return view('user.sex.show')->with('sex', $this->sex);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return view('user.sex.edit')->with('sex', $this->sex);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UpdateSexRequest $request, $id)
	{
        $this->sex->fill(Request::all());
        $this->sex->save();

        return redirect()->route('admin.sex.show', $this->sex);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $this->sex->delete();

        Session::flash('success', trans('messages.deleted_record', ['record' => $this->sex->name]));

		return redirect()->route('admin.sex.index');
	}

}
