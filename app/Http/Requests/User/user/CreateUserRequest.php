<?php namespace App\Http\Requests\User\user;

use App\Http\Requests\Request;

class CreateUserRequest extends Request {

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
			'name'      => 'required|min:3|max:60|unique:users',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:6',
            'type'      => 'required|in:root,admin,user'
		];
	}

}
