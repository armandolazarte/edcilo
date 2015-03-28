<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'as'    => 'public.index',
    'uses'  => 'WelcomeController@index'
]);

Route::get('home', 'HomeController@index');


require( __DIR__ . '/Routes/Auth/Auth.php' );


/*
 * Rutas de administrador
 */
Route::group(['middleware' => 'auth', 'namespace' => 'User'], function () {


    require( __DIR__ . '/Routes/User/Sex.php');


    require( __DIR__ . '/Routes/User/Country.php' );


    require( __DIR__ . '/Routes/User/Lang.php' );


    require( __DIR__ . '/Routes/User/SocialNetwork.php' );


    require( __DIR__ . '/Routes/User/User.php' );


    require( __DIR__ . '/Routes/User/Profile.php' );


    require( __DIR__ . '/Routes/User/Cover.php' );


    require( __DIR__ . '/Routes/User/UserSocialNetwork.php' );


});


/*
 * Rutas publicas
 */
require( __DIR__ . '/Routes/Public/User.php' );



/*
 * Rutas del blog
 */
Route::group(['middleware' => 'auth', 'namespace' => 'Blog'], function () {


    require( __DIR__ . '/Routes/Blog/Category.php' );


});
