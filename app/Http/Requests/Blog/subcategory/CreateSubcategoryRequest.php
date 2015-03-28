<?php namespace App\Http\Requests\Blog\subcategory;

use App\Http\Requests\Request;

class CreateSubcategoryRequest extends Request {

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
            'blog_category_id'  => 'required|exists:blog_categories,id',
            'name'              => 'required|unique:blog_subcategories',
            'description'       => 'required',
            'position'          => 'required|min:0|max:9',
		];
	}

}
