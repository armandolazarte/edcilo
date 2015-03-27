<?php namespace App\Http\Requests\User\userLang;

use App\Http\Requests\Request;

class CreateLangRequest extends Request {

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
            'name'      => 'required|max:60|unique:user_langs',
            'native'    => 'required|max:60|unique:user_langs',
            'abbr'      => 'required|max:6'
        ];
    }

}
