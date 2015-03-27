<?php namespace App\Http\Requests\User\userCountry;

use App\Http\Requests\Request;

class UpdateCountryRequest extends Request {

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
            'name'  => 'required|max:90',
            'abbr'  => 'required|max:10',
            'icon'  => 'required|max:120'
		];
	}

}
