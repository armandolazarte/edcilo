<?php namespace App\Models\User\userProfile;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model {

    protected $table = 'user_profiles';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'name',
        'last_name',
        'v_bday',
        'birthday',
        'v_sex',
        'user_sex_id',
        'v_country',
        'user_country_id',
        'v_langs',
        'biography',
    ];

    /*
    |--------------------------------------------------------------------------
    |  GETTERS
    |--------------------------------------------------------------------------
    */
    public function getFullNameAttribute()
    {
        return $this->name . ' ' . $this->last_name;
    }


    /*
	|--------------------------------------------------------------------------
	| RELACIONES DEL MODELO
	|--------------------------------------------------------------------------
	*/
    public function user()
    {
        return $this->belongsTo('App\Models\User\user\User');
    }

    public function sex()
    {
        return $this->belongsTo('App\Models\User\userSex\UserSex', 'user_sex_id');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\User\userCountry\UserCountry', 'user_country_id');
    }

}
