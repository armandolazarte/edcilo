<?php namespace App\Http\Requests\Blog\subcategory;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class UpdateSubcategoryRequest extends Request {

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
            'blog_category_id'  => 'required|exists:blog_categories,id',
            'name'              => 'required|unique:blog_subcategories,name,' . $this->route->getParameter('subcategory'),
            'description'       => 'required',
            'position'          => 'required|min:0|max:9',
		];
	}

}
