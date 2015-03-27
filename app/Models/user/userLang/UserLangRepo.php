<?php namespace App\Models\User\userLang;

use App\Models\base\BaseRepo;

class UserLangRepo extends BaseRepo {

    public function getModel()
    {
        return new UserLang();
    }

    public function newLang($data = [])
    {
        return $lang = new UserLang($data);
    }

}
