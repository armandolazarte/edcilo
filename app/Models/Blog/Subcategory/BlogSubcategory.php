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
	| RELACIONES DEL MODELO
	|--------------------------------------------------------------------------
	*/
    public function category()
    {
        return $this->belongsTo('App\Models\Blog\Category\BlogCategory');
    }


    public function posts()
    {
        return $this->hasMany('App\Models\Blog\Post\BlogPost');
    }

}
