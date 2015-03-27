<?php namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\User\userCover\UserCoverRepo;

use App\Http\Requests\User\userCover\UpdateCoverRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class CoverController extends Controller {

    protected $cover;
    protected $coverRepo;

    public function __construct(
        UserCoverRepo   $coverRepo
    )
    {
        $this->coverRepo    = $coverRepo;

        $this->beforeFilter('@findCover', ['only' => ['show', 'edit', 'update', 'destroy']]);
    }

    public function findCover(Route $route)
    {
            $this->cover = Auth::user()->cover;
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
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
        return view('user.cover.edit')->with(['cover' => $this->cover, 'user' => Auth::user()]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UpdateCoverRequest $request, $id)
	{
        $name = time() . '_' . Auth::user()->name;

        $images = [];

        foreach(Request::all() as $key => $value)
        {
            if( Request::hasFile($key) AND ($key == 'photo' OR $key == 'cover') )
            {
                $images[$key] = $this->moveFile(Request::file($key), $this->cover->destinationPath, $name . '_' . $key);
            }
        }

        $this->cover->fill($images);
        $this->cover->save();

        Session::flash('info', trans('messages.updated_cover'));

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
		$this->cover->photo = $this->cover->photo_default;
        $this->cover->cover = $this->cover->cover_default;
        $this->cover->save();

        Session::flash('danger', trans('messages.reset_cover'));

        return redirect()->route('public.user.show', [Auth::user()->slug, Auth::user()]);
	}

}
