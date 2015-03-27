<?php namespace App\Models\userLang;

use Illuminate\Database\Eloquent\Model;

class UserLang extends Model {

    protected $table = 'user_langs';

    protected $fillable = [
        'name',
        'native',
        'abbr'
    ];


    /*
	|--------------------------------------------------------------------------
	| RELACIONES DEL MODELO
	|--------------------------------------------------------------------------
	*/

}
