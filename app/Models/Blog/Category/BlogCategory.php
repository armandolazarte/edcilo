<?php namespace App\Models\Blog\Category;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model {

    protected $fillable = [
        'name',
        'description',
        'position',
        'slug',
    ];


    /*
	|--------------------------------------------------------------------------
	| RELACIONES DEL MODELO
	|--------------------------------------------------------------------------
	*/

    public function subcategories()
    {
        return $this->hasMany('App\Models\Blog\Subcategory\BlogSubcategory');
    }

}
