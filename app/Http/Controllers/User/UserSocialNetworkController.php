<?php namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

use App\Models\user\UserRepo;
use App\Models\userSocialNetwork\UserSocialNetworkRepo;

use App\Http\Requests\user\userUserSocialNetwork\CreateUserSocialNetworkRequest;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class UserSocialNetworkController extends Controller {

    protected $socialRepo;

    public function __construct(
        UserSocialNetworkRepo   $socialNetworkRepo
    )
    {
        $this->socialRepo   = $socialNetworkRepo;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $ids = [];

        foreach(Auth::user()->socials as $social)
        {
            $ids[] = $social->id;
        }

        $socials = $this->socialRepo->getFreeSocials($ids);

		return view('user.userSocialNetwork.create', compact('socials'))->with('user', Auth::user());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateUserSocialNetworkRequest $request)
	{
        $user = Auth::user();
        $social = $this->socialRepo->find(Request::get('user_social_network_id'));

        $user->socials()->attach($social, ['username'=>Request::get('username')]);

        Session::flash('info', trans('messages.user_social_register', ['social' => $social->name]));

        return redirect()->back();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $user = Auth::user();
        $social = $this->socialRepo->find($id);

        $user->socials()->detach($social);

        Session::flash('alert', trans('messages.user_social_destroy', ['social' => $social->name]));

        return redirect()->back();
	}

}
