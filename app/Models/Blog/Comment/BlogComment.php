<?php namespace App\Models\Blog\Comment;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model {

	protected $fillable = [
        'post_id',
        'user_id',
        'name',
        'email',
        'web',
        'content',
    ];

}
