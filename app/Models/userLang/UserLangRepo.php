<?php namespace App\Models\userLang;

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
