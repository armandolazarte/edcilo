<?php namespace App\Models\Blog\Subcategory;

use App\Models\base\BaseRepo;

class BlogSubcategoryRepo extends BaseRepo {

    public function getModel()
    {
        return new BlogSubcategoryRepo();
    }

    public function newBlogSubcategory()
    {
        return $subcategory = new BlogSubcategory();
    }

}
