<?php namespace App\Models\Blog\Subcategory;

use Illuminate\Database\Eloquent\Model;

class BlogSubcategory extends Model {

	protected $fillable = [
        'blog_category_id',
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
    public function category()
    {
        return $this->belongsTo('App\Models\Blog\Category\BlogCategory', 'blog_category_id');
    }


    public function posts()
    {
        return $this->hasMany('App\Models\Blog\Post\BlogPost');
    }

}
