<?php namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\User\userSocialNetwork\UserSocialNetworkRepo;

use App\Http\Requests\User\userSocialNetwork\CreateSocialNetworkRequest;
use App\Http\Requests\User\userSocialNetwork\UpdateSocialNetworkRequest;

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class SocialNetworkController extends Controller {

    protected $socialNetwork;
    protected $socialNetworkRepo;

    public function __construct(
        UserSocialNetworkRepo   $socialNetworkRepo
    )
    {
        $this->socialNetworkRepo    = $socialNetworkRepo;

        $this->beforeFilter('@findSocialNetwork', ['only'=>['show', 'edit', 'update', 'destroy']]);
    }

    public function findSocialNetwork(Route $route)
    {
        $this->socialNetwork = $this->socialNetworkRepo->findOrFail($route->getParameter('socialNetwork'));
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $name = ['name' => Request::get('name')];

		$socialNetworks = $this->socialNetworkRepo->filterAndPaginate($name);

        return view('user.socialNetwork.index', compact('socialNetworks', 'name'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('user.socialNetwork.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateSocialNetworkRequest $request)
	{
		$socialNetwork = $this->socialNetworkRepo->create(Request::all());

        return redirect()->route('admin.socialNetwork.show', $socialNetwork);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return view('user.socialNetwork.show')->with('socialNetwork', $this->socialNetwork);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('user.socialNetwork.edit')->with('socialNetwork', $this->socialNetwork);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UpdateSocialNetworkRequest $request, $id)
	{
        $this->socialNetwork->fill(Request::all());
        $this->socialNetwork->save();

        return redirect()->route('admin.socialNetwork.show', $this->socialNetwork);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->socialNetwork->delete();

        Session::flash('success', trans('messages.deleted_record', ['record' => $this->socialNetwork->name]));

        return redirect()->route('admin.socialNetwork.index');
	}

}
