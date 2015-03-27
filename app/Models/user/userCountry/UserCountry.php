<?php namespace App\Models\User\userCountry;

use Illuminate\Database\Eloquent\Model;

class UserCountry extends Model {

    protected $table = 'user_countries';

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
        return $this->hasMany('App\Models\User\userProfile\userProfile', 'user_country_id');
    }

}
