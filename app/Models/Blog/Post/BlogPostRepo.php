<?php namespace App\Models\Blog\Post;

use App\Models\base\BaseRepo;

class BlogPostRepo extends BaseRepo {

    public function getModel()
    {
        return new BlogPost();
    }

    public function newPost()
    {
        return $post = new BlogPost();
    }

}
