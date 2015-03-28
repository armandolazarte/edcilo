<?php namespace App\Http\Requests\Blog\category;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class UpdateCategoryRequest extends Request {

    private $route;

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
            'name'          => 'required|unique:blog_categories,name,' . $this->route->getParameter('category'),
            'description'   => 'required',
            'position'      => 'required|integer|min:0|max:9',
        ];
	}

}
