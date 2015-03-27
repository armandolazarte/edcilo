<?php namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\userCountry\UserCountryRepo;

use App\Http\Requests\User\userCountry\CreateCountryRequest;
use App\Http\Requests\User\userCountry\UpdateCountryRequest;

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class CountryController extends Controller {

    protected $country;
    protected $countryRepo;

    public function __construct(
        UserCountryRepo $countryRepo
    )
    {
        $this->countryRepo  = $countryRepo;

        $this->beforeFilter('@findCountry', ['only' => ['show', 'edit', 'update', 'destroy']]);
    }

    public function findCountry(Route $route)
    {
        $this->country = $this->countryRepo->findOrFail($route->getParameter('country'));
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $name = ['name' => Request::get('name')];
        $abbr = ['abbr' => Request::get('name')];

        $countries = $this->countryRepo->filterAndPaginate([$name, $abbr]);

        return view('user.country.index', compact('countries', 'name'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('user.country.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateCountryRequest $request)
	{
		$country = $this->countryRepo->create(Request::all());

        return redirect()->route('admin.country.show', $country);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return view('user.country.show')->with('country', $this->country);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('user.country.edit')->with('country', $this->country);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UpdateCountryRequest $request, $id)
	{
		$this->country->fill(Request::all());
        $this->country->save();

        return redirect()->route('admin.country.show', $this->country);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->country->delete();

        Session::flash('success', trans('messages.deleted_record', ['record' => $this->country->name]));

        return redirect()->route('admin.country.index');
	}

}
