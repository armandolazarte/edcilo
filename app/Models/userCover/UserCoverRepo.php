<?php namespace App\Models\UserCover;

use App\Models\base\BaseRepo;

class UserCoverRepo extends BaseRepo {

    public function getModel()
    {
        return new UserCover();
    }

    public function newCover()
    {
        return $cover = new UserCover();
    }

}
