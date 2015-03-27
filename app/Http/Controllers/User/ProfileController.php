<?php namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

use App\Models\userProfile\UserProfileRepo;
use App\Models\userCountry\UserCountryRepo;
use App\Models\userSex\UserSexRepo;

use App\Http\Requests\User\userProfile\CreateProfileRequest;
use App\Http\Requests\User\userProfile\UpdateProfileRequest;

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller {

    protected $profile;

    protected $profileRepo;
    protected $sexRepo;
    protected $countryRepo;

    public function __construct(
        UserProfileRepo $profileRepo,
        UserCountryRepo $countryRepo,
        UserSexRepo     $sexRepo
    )
    {
        $this->profileRepo  = $profileRepo;
        $this->countryRepo  = $countryRepo;
        $this->sexRepo      = $sexRepo;

        $this->beforeFilter('@findProfile', ['only' => ['show', 'edit', 'update', 'destroy']]);
    }

    public function findProfile(Route $route)
    {
        $this->profile = Auth::user()->profile;
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
        $sex_list       = $this->sexRepo->lists('name', 'id');
        $country_list   = $this->countryRepo->lists('name', 'id');

        return view('user.profile.create', compact('sex_list', 'country_list'))
            ->with('user', Auth::user());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateProfileRequest $request)
	{
        $data = ['user_id' => Auth::user()->id] + Request::all();

        $profile = $this->profileRepo->create($data);

        Session::flash('info', trans('messages.updated_profile'));

        return redirect()->route('admin.user.show', Auth::user());
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
        $sex_list       = $this->sexRepo->lists('name', 'id');
        $country_list   = $this->countryRepo->lists('name', 'id');

        return view('user.profile.edit', compact('sex_list', 'country_list'))
            ->with(['profile' => $this->profile, 'user' => $this->profile->user]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UpdateProfileRequest $request, $id)
	{
        $this->profile->fill(Request::all());
        $this->profile->save();

        Session::flash('info', trans('messages.updated_profile'));

        return redirect()->route('public.user.show', [Auth::user()->slug, Auth::user()]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
