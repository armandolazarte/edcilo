<?php namespace App\Models\User\userSex;

use Illuminate\Database\Eloquent\Model;

class UserSex extends Model {

    protected $table = 'user_sexes';

	protected $fillable = [
        'name',
        'abbr',
        'icon',
    ];


    /*
	|--------------------------------------------------------------------------
	| RELACIONES DEL MODELO
	|--------------------------------------------------------------------------
	*/
    public function profiles()
    {
        return $this->hasMany('App\Models\User\userProfile\UserProfile');
    }

}
