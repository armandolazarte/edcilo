<?php namespace App\Models\userSocialNetwork;

use App\Models\base\BaseRepo;

class UserSocialNetworkRepo extends BaseRepo {

    public function getModel()
    {
        return new UserSocialNetwork();
    }

    public function newSocialNetwork($data = [])
    {
        return $socialNetwor = new UserSocialNetwork($data);
    }

    public function getFreeSocials($ids)
    {
        return UserSocialNetwork::where(function ($query) use ($ids)
        {
            foreach($ids as $id)
            {
                $query->where('id', '!=', $id);
            }
        })
            ->get();
    }

}
