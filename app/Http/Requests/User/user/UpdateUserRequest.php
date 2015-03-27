<?php namespace App\Http\Requests\User\user;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class UpdateUserRequest extends Request {

    protected $route;

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
            'name'      => 'required|min:3|max:60|unique:users,name,' . $this->route->getParameter('user'),
            'email'     => 'required|email|unique:users,email,' . $this->route->getParameter('user'),
            'password'  => 'min:6',
            'type'      => 'required|in:root,admin,user'
		];
	}

}
