<?php

Route::resource('cover', 'CoverController', ['only' => ['edit', 'update', 'destroy']]);
