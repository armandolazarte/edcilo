<?php namespace App\Models\Blog\Post;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model {

	protected $fillable = [
        'user_id',
        'blog_subcategory_id',
        'title',
        'subtitle',
        'cover',
        'url_demo',
        'url_source',
        'url_repository',
        'content',
        'slug',
        'comments_active'
    ];


    /*
	|--------------------------------------------------------------------------
	| RELACIONES DEL MODELO
	|--------------------------------------------------------------------------
	*/
    public function user()
    {
        return $this->belongsTo('App\Models\User\user\User');
    }

    public function subcategory()
    {
        return $this->belongsTo('App\Models\Blog\Subcategory\BlogSubcategory');
    }

}
