<?php namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\user\UserRepo;
use App\Models\UserCover\UserCoverRepo;

use App\Http\Requests\user\user\CreatePublicUserRequest;
use App\Http\Requests\User\user\UpdatePublicUserRequest;
use App\Http\Requests\User\user\UpdatePublicUserPasswordRequest;

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PublicUserController extends Controller {

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

        $this->middleware('auth', ['except' => ['show']]);

        $this->beforeFilter('@findUser', ['only' => ['show']]);
        $this->beforeFilter('@findUserAuth', ['only' => ['edit', 'update', 'destroy', 'updatePassword']]);
    }

    public function findUser(Route $route)
    {
        $this->user = $this->userRepo->findOrFail($route->getParameter('user'));
    }

    public function findUserAuth()
    {
        $this->user = Auth::user();
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreatePublicUserRequest $request)
	{
        $user = $this->userRepo->newUser(Request::all());
        $user->slug = str_slug($user->name);
        $user->type = 'user';
        $user->save();

        $cover = $this->coverRepo->newCover();
        $user->cover()->save($cover);

        return redirect()->route('public.index');
	}

	/**
	 * Display the specified resource.
	 *
     * @param  string $slug
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug, $id)
	{
		return view('user/public/show')->with('user', $this->user);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return view('user.public.edit')->with('user', $this->user);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UpdatePublicUserRequest $request, $id)
	{
        $data = ['name' => Request::get('name'), 'email' => Request::get('email')];

        $this->user->fill($data);
        $this->user->save();

        Session::flash('info', trans('messages.updated'));

        return redirect()->back();
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

        Session::flash('alert', trans('messages.deleted_record', ['record' => $this->user->name]));

        return redirect()->route('public.index');
	}



    public function updatePassword(UpdatePublicUserPasswordRequest $request)
    {
        $data = ['password' => Request::get('password')];

        $this->user->fill($data);
        $this->user->save();

        Session::flash('alert', trans('messages.updated_password'));

        return redirect()->back();
    }

}
