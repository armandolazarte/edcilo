<?php namespace App\Models\userSex;

use App\Models\base\BaseRepo;

class UserSexRepo extends BaseRepo {

    public function getModel()
    {
        return new UserSex();
    }

    public function newSex($data = [])
    {
        return $sex = new UserSex($data);
    }

}
