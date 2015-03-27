<?php namespace App\Models\UserCover;

use Illuminate\Database\Eloquent\Model;

class UserCover extends Model {

	protected $fillable = [
        'photo',
        'cover'
    ];

    public $timestamps = false;

    /*
    |--------------------------------------------------------------------------
    |  GETTERS
    |--------------------------------------------------------------------------
    */
    public function getDestinationPathAttribute()
    {
        return 'images/users/';
    }

    public function getPhotoDefaultAttribute()
    {
        return 'images/users/photo.jpg';
    }

    public function getCoverDefaultAttribute()
    {
        return 'images/users/cover.png';
    }


    /*
	|--------------------------------------------------------------------------
	| RELACIONES DEL MODELO
	|--------------------------------------------------------------------------
	*/
    public function user()
    {
        return $this->belongsTo('App\Models\user\User');
    }

}
