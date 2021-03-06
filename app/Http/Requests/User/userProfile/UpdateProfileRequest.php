<?php namespace App\Http\Requests\User\userProfile;

use App\Http\Requests\Request;

class UpdateProfileRequest extends Request {

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
            'name'              => 'max:60',
            'last_name'         => 'max:120',
            'v_bday'            => 'boolean',
            'birthday'          => 'date',
            'v_sex'             => 'boolean',
            'user_sex_id'       => 'exists:user_sexes,id',
            'v_country'         => 'boolean',
            'user_country_id'   => 'exists:user_countries,id',
            'biography'         => '',
		];
	}

}
