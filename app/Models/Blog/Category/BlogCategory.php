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
    |  GETTERS
    |--------------------------------------------------------------------------
    */
    public function getShortDescriptionAttribute()
    {
        return ( strlen($this->description) > 95 ) ? substr( $this->description, 0, 92 ) . '...' : $this->description;
    }


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
