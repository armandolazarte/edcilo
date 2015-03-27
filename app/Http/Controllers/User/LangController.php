<?php namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\User\userLang\UserLangRepo;

use App\Http\Requests\User\userLang\CreateLangRequest;
use App\Http\Requests\User\userLang\UpdateLangRequest;

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class LangController extends Controller {

    protected $lang;
    protected $langRepo;

    public function __construct(
        UserLangRepo    $langRepo
    )
    {
        $this->langRepo = $langRepo;

        $this->beforeFilter('@findLang', ['only'=>['show', 'edit', 'update', 'destroy']]);
    }

    public function findLang(Route $route)
    {
        $this->lang = $this->langRepo->findOrFail($route->getParameter('lang'));
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $name = ['name' => Request::get('name')];
        $native = ['native' => Request::get('name')];

		$langs = $this->langRepo->filterAndPaginate([$name, $native]);

        return view('user.lang.index', compact('langs', 'name'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('user.lang.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateLangRequest $request)
	{
		$lang = $this->langRepo->create(Request::all());

        return redirect()->route('admin.lang.show', $lang);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return view('user.lang.show')->with('lang', $this->lang);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('user.lang.edit')->with('lang', $this->lang);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UpdateLangRequest $request, $id)
	{
		$this->lang->fill(Request::all());
        $this->lang->save();

        return redirect()->route('admin.lang.show', $this->lang);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->lang->delete();

        Session::flash('success', trans('messages.deleted_record', ['record' => $this->lang->name]));

        return redirect()->route('admin.lang.index');
	}

}
