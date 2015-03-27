<?php

Route::resource('user/social', 'UserSocialNetworkController', ['only' => ['create', 'store', 'destroy']]);
