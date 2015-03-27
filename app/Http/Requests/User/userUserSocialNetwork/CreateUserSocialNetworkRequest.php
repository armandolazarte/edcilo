<?php namespace App\Http\Requests\user\userUserSocialNetwork;

use App\Http\Requests\Request;

class CreateUserSocialNetworkRequest extends Request {

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
			'user_social_network_id'    => 'required|exists:user_social_networks,id',
            'username'                  => 'required'
		];
	}

}
