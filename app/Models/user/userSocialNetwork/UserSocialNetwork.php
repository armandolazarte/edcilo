<?php namespace App\Models\User\userSocialNetwork;

use Illuminate\Database\Eloquent\Model;

class UserSocialNetwork extends Model {

    protected $table = 'user_social_networks';

    protected $fillable = [
        'name',
        'url',
        'icon',
        'class',
    ];


    /*
	|--------------------------------------------------------------------------
	| RELACIONES DEL MODELO
	|--------------------------------------------------------------------------
	*/
    public function users()
    {
        return $this->belongsToMany('App\Models\User\user\User', 'user_user_social_network', 'user_id', 'user_social_network_id')->withPivot('username');
    }

}
