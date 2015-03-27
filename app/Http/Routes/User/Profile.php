<?php

Route::resource('profile', 'ProfileController', ['except' => ['index', 'show', 'destroy']]);
