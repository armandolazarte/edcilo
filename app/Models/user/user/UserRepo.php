<?php namespace App\Models\User\user;

use App\Models\base\BaseRepo;

class UserRepo extends BaseRepo {

    public function getModel()
    {
        return new User();
    }

    public function newUser($data = [])
    {
        return $user = new User($data);
    }

}
