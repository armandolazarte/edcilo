<?php namespace App\Models\Blog\Category;

use App\Models\base\BaseRepo;

class BlogCategoryRepo extends BaseRepo {

    public function getModel()
    {
        return new BlogCategory();
    }

    public function newBlogCategory()
    {
        return $category = new BlogCategory();
    }

}
