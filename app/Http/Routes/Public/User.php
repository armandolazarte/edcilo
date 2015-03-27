<?php


Route::group(
    [
        'prefix' => '{slug}/{user}/'
    ],
    function ()
    {
        Route::get('', [
            'as'    => 'public.user.show',
            'uses'  => 'User\PublicUserController@show',
        ]);

        Route::get('edit', [
            'as'    => 'public.user.edit',
            'uses'  => 'User\PublicUserController@edit',
        ]);
    }
);


Route::post('', [
    'as'    => 'public.user.store',
    'uses'  => 'User\PublicUserController@store',
]);

Route::put('{user}', [
    'as'    => 'public.user.update',
    'uses'  => 'User\PublicUserController@update'
]);

Route::put('{user}/password', [
    'as'    => 'public.user.update.password',
    'uses'  => 'User\PublicUserController@updatePassword'
]);

Route::delete('{user}', [
    'as'    => 'public.user.destroy',
    'uses'  => 'User\PublicUserController@destroy'
]);
