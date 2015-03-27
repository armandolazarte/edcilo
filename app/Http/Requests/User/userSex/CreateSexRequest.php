<?php namespace App\Http\Requests\User\userSex;

use App\Http\Requests\Request;

class CreateSexRequest extends Request {

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
			'name'  => 'required|max:32|unique:user_sexes',
            'abbr'  => 'required|max:16|unique:user_sexes',
            'icon'  => 'required|max:120'
		];
	}

}


