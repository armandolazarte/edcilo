<?php

Route::resource('cover', 'User\CoverController', ['only' => ['edit', 'update', 'destroy']]);
