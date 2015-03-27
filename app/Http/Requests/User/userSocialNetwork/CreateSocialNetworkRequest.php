<?php namespace App\Http\Requests\User\userSocialNetwork;

use App\Http\Requests\Request;

class CreateSocialNetworkRequest extends Request {

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
			'name'  => 'required|max:60|unique:user_social_networks',
            'url'   => 'required|url',
            'icon'  => 'required',
            'class' => 'required',
		];
	}

}
