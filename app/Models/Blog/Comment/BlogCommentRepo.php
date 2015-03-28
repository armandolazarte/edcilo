<?php namespace App\Models\Blog\Comment;

use App\Models\base\BaseRepo;

class BlogCommentRepo  extends BaseRepo {

    public function getModel()
    {
        return new BlogComment();
    }

    public function newBlogComment()
    {
        return $comment = new BlogComment();
    }

}
