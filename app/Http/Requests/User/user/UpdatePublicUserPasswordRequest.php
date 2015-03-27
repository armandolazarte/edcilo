<?php namespace App\Http\Requests\User\user;

use App\Http\Requests\Request;

class UpdatePublicUserPasswordRequest extends Request {

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
            'old_password'  => 'required|current_password',
            'password'      => 'required|min:6|confirmed',
		];
	}

}
