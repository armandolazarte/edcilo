<?php namespace App\Http\Requests\User\userSex;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class UpdateSexRequest extends Request {

    private $route;

    public function __construct(Route $route)
    {
        $this->route = $route;
    }

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
        return [
            'name'  => 'required|max:32|unique:user_sexes,name,' . $this->route->getParameter('sex'),
            'abbr'  => 'required|max:16|unique:user_sexes,abbr,' . $this->route->getParameter('sex'),
            'icon'  => 'required|max:120'
        ];
	}

}
