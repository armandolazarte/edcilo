<?php namespace App\Models\User\userProfile;

use App\Models\base\BaseRepo;

class UserProfileRepo extends BaseRepo {

    public function getModel()
    {
        return new UserProfile();
    }

    public function newProfile()
    {
        return $profile = new UserProfile();
    }

}
