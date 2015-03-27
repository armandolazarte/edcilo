<?php

Route::resource('user/social', 'User\UserSocialNetworkController', ['only' => ['create', 'store', 'destroy']]);
