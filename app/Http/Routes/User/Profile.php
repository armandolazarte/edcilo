<?php

Route::resource('profile', 'User\ProfileController', ['except' => ['index', 'show', 'destroy']]);
