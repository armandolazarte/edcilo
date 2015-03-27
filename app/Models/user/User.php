<?php namespace App\Models\user;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword, SoftDeletes;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password', 'type'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];


    /*
    |--------------------------------------------------------------------------
    |  GETTERS
    |--------------------------------------------------------------------------
    */
    public function getFullNameAttribute()
    {
        if( $this->profile )
            return $this->profile->full_name;

        return $this->name;
    }


    /*
    |--------------------------------------------------------------------------
    |  SETTERS
    |--------------------------------------------------------------------------
    */
    public function setPasswordAttribute($value)
    {
        if( ! empty($value) )
        {
            $this->attributes['password'] = bcrypt($value);
        }
    }


    /*
	|--------------------------------------------------------------------------
	| RELACIONES DEL MODELO
	|--------------------------------------------------------------------------
	*/
    public function profile()
    {
        return $this->hasOne('App\Models\userProfile\UserProfile');
    }

    public function cover()
    {
        return $this->hasOne('App\Models\userCover\UserCover');
    }


    public function socials()
    {
        return $this->belongsToMany('App\Models\userSocialNetwork\UserSocialNetwork', 'user_user_social_network', 'user_id', 'user_social_network_id')->withPivot('username');
    }

}
