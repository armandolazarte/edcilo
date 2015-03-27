<?php namespace App\Models\User\userCover;

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
