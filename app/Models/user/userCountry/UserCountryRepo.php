<?php namespace App\Models\User\userCountry;

use App\Models\base\BaseRepo;

class UserCountryRepo extends BaseRepo {

    public function getModel()
    {
        return new UserCountry();
    }

    public function newCountry($data = [])
    {
        return $country = new UserCountry($data);
    }

}
