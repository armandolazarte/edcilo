<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Default Authentication Driver
	|--------------------------------------------------------------------------
	|
	| Esta opcion controla el driver de autenticación que sera usado.
	| Este driver gestiona la recuperación y autenticación de los usuarios
	| que intentan opteber acceso a areas de tu aplicación.
	|
	| Soporta: "database", "eloquent"
	|
	*/

	'driver' => 'eloquent',

	/*
	|--------------------------------------------------------------------------
	| Authentication Model
	|--------------------------------------------------------------------------
	|
	| Cuando usas el driver de autenticación "Eloquent", necesitamos conocer
	| que modelo Eloquent debe ser usado para recuperar a tus usuarios.
	| Por supuesto, a menundo es el modelo "User" pero puede ser el
	| que gustes.
	|
	*/

	'model' => 'App\Models\user\User',

	/*
	|--------------------------------------------------------------------------
	| Authentication Table
	|--------------------------------------------------------------------------
	|
	| Cuando usas el driver de autenticación "Database", necesitamos saber
	| el nombre de la tabla que debe ser usada para recuperar a tus usuarios.
	| Hemos elegido un valor basico por defecto pero puedes cambiarlo por
	| cualquier tabla que gustes.
	|
	*/

	'table' => 'users',

	/*
	|--------------------------------------------------------------------------
	| Password Reset Settings
	|--------------------------------------------------------------------------
	|
	| Aqui puedes establecer las opciones para recuperar contraseñas incluyendo
	| la vista para el e-mail de re-establecer contraseña. Tambien puedes
	| establecer el nombre de la tabal que contiene todos los token de
	| re-establecimiento para tu aplicación.
	|
	| El tiempo de caducidad en el numero de minutos que el rest token
	| se considerara valido. Este extra de seguridad mantiene los tokens
	| con corto tiempo de vida para disminuir el tiempo en que puedan
	| ser adivinados. Puedes cambiarlo como necesites.
	|
	*/

	'password' => [
		'email' => 'emails.password',
		'table' => 'password_resets',
		'expire' => 60,
	],

];
