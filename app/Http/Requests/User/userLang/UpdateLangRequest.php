<?php namespace App\Http\Requests\User\userLang;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class UpdateLangRequest extends Request {

    private $route;

    public function __construct(Route $route)
    {
        $this->route    = $route;
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
            'name'      => 'required|max:60|unique:user_langs,name,' . $this->route->getParameter('lang'),
            'native'    => 'required|max:60|unique:user_langs,native,' . $this->route->getParameter('lang'),
            'abbr'      => 'required|max:6'
        ];
    }

}

