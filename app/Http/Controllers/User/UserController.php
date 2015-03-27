<?php namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\user\UserRepo;
use App\Models\UserCover\UserCoverRepo;

use App\Http\Requests\User\user\CreateUserRequest;
use App\Http\Requests\User\user\UpdateUserRequest;

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller {

    protected $user;
    protected $userRepo;
    protected $coverRepo;

    public function __construct(
        UserRepo        $userRepo,
        UserCoverRepo   $coverRepo
    )
    {
        $this->userRepo     = $userRepo;
        $this->coverRepo    = $coverRepo;

        $this->beforeFilter('@findUser', ['only' => ['show', 'edit', 'update', 'destroy']]);
    }

    public function findUser(Route $route)
    {
        $this->user = $this->userRepo->findOrFail($route->getParameter('user'));
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$name = ['name' => Request::get('name')];
        $email = ['email' => Request::get('name')];
        $type = ['type' => Request::get('type')];

        $users = $this->userRepo->filterAndPaginate($type, [$name, $email]);

        $data = $type + $name;
        return view('user.user.index', compact('users', 'data'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('user.user.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateUserRequest $request)
	{
		$user = $this->userRepo->newUser(Request::all());
        $user->slug = str_slug($user->name);
        $user->save();

        $cover = $this->coverRepo->newCover();
        $user->cover()->save($cover);

        return redirect()->route('admin.user.show', $user);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return view('user.user.show')->with('user', $this->user);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('user.user.edit')->with('user', $this->user);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UpdateUserRequest $request, $id)
	{
		$this->user->fill(Request::all());
        $this->user->save();

        return redirect()->route('admin.user.show', $this->user);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $this->user->delete();

        Session::flash('success', trans('messages.deleted_record', ['record' => $this->user->name]));

		return redirect()->route('admin.user.index');
	}

}
