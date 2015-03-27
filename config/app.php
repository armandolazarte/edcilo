<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Application Debug Mode
	|--------------------------------------------------------------------------
	|
	| Cuand tu aplicacion esta en modo debug, detallados mensajes de error con
	| seguimiento de pila seran mostrados en cada error que ocurrar en tu
	| aplicacion. Si esta desabilitado, se mostrara una simple pagina
	| generica de error.
	|
	*/

	'debug' => env('APP_DEBUG'),

	/*
	|--------------------------------------------------------------------------
	| Application URL
	|--------------------------------------------------------------------------
	|
	| Esta URL es usada por la conosola para generar URLs correctamente cuando
	| se usa el comando Artisan en la linea de comandos. Deberias establecer
	| esto a la raiz de tu aplicación para que se utilice cuando se ejecutan
	| tareas Artisan.
	|
	*/

	'url' => env('URL'),

	/*
	|--------------------------------------------------------------------------
	| Application Timezone
	|--------------------------------------------------------------------------
	|
	| Aqui puedes especificar la zona horaria para tu aplicación, que sera
	| usada por las funciones date y date-time de PHP. We have gone
	| ahead and set this to a sensible default for you out of the box.
	|
	*/

	'timezone' => env('APP_TIMEZONE'),

	/*
	|--------------------------------------------------------------------------
	| Application Locale Configuration
	|--------------------------------------------------------------------------
	|
	| El idioma de la aplicacion determina que idioma por defectos sera usado
	| por el service provider de traducción. Eres libre de establecer el
	| valor a cualquiera de los idiomas soportados por la aplicación.
	|
	*/

	'locale' => env('APP_LOCALE'),

	/*
	|--------------------------------------------------------------------------
	| Application Fallback Locale
	|--------------------------------------------------------------------------
	|
	| el idioma alternativo determina el idioma que se usara cuando el idioma
	| actual no esta disponible. Puedes cambiar el valor al correspondiente
	| de cualquiera de las carpetas previstas para tu aplicacion.
	|
	*/

	'fallback_locale' => 'en',

	/*
	|--------------------------------------------------------------------------
	| Encryption Key
	|--------------------------------------------------------------------------
	|
	| Esta clave es usada por el servicio de encriptacion de Illuminate
	| y debera usar un rango de 32 caracteres, de otra manera las cadenas
	| encriptadas no seran seguras. Por favor has esto antes de lanzar
	| tu aplicación a producción.
	|
	*/

	'key' => env('APP_KEY', 'SomeRandomString'),

	'cipher' => MCRYPT_RIJNDAEL_128,

	/*
	|--------------------------------------------------------------------------
	| Logging Configuration
	|--------------------------------------------------------------------------
	|
	| Aqui puedes configurar los ajustes log para tu aplicación. Fuera de
	| la caja, Laravel usa la libreria Monolog de PHP. Esta te da una
	| variedad de poderosas manejadores de formatos de log para usar.
	|
	| Ajustes disponibles: "single", "daily", "syslog", "errorlog"
	|
	*/

	'log' => 'daily',

	/*
	|--------------------------------------------------------------------------
	| Autoloaded Service Providers
	|--------------------------------------------------------------------------
	|
	| Los proveedores de servicios se listados aqui seran cargados automati-
	| camente en las peticiones a tu aplicación. Sientete libre de agregar
	| tus propios servicios a este arreglo para conceder amplia funcionali-
	| dad para tus aplicaciones
	|
	*/

	'providers' => [

		/*
		 * Proveedores de servicios del Framework Laravel...
		 */
		'Illuminate\Foundation\Providers\ArtisanServiceProvider',
		'Illuminate\Auth\AuthServiceProvider',
		'Illuminate\Bus\BusServiceProvider',
		'Illuminate\Cache\CacheServiceProvider',
		'Illuminate\Foundation\Providers\ConsoleSupportServiceProvider',
		'Illuminate\Routing\ControllerServiceProvider',
		'Illuminate\Cookie\CookieServiceProvider',
		'Illuminate\Database\DatabaseServiceProvider',
		'Illuminate\Encryption\EncryptionServiceProvider',
		'Illuminate\Filesystem\FilesystemServiceProvider',
		'Illuminate\Foundation\Providers\FoundationServiceProvider',
		'Illuminate\Hashing\HashServiceProvider',
		'Illuminate\Mail\MailServiceProvider',
		'Illuminate\Pagination\PaginationServiceProvider',
		'Illuminate\Pipeline\PipelineServiceProvider',
		'Illuminate\Queue\QueueServiceProvider',
		'Illuminate\Redis\RedisServiceProvider',
		'Illuminate\Auth\Passwords\PasswordResetServiceProvider',
		'Illuminate\Session\SessionServiceProvider',
		'Illuminate\Translation\TranslationServiceProvider',
		'Illuminate\Validation\ValidationServiceProvider',
		'Illuminate\View\ViewServiceProvider',

		/*
		 * Proveedores de servicios de la aplicación...
		 */
		'App\Providers\AppServiceProvider',
		'App\Providers\BusServiceProvider',
		'App\Providers\ConfigServiceProvider',
		'App\Providers\EventServiceProvider',
		'App\Providers\RouteServiceProvider',

        /*
         * Vendor
         */
        'Collective\Html\HtmlServiceProvider',

        /*
         * Mis providers
         */
        'App\Providers\ValidatorServiceProvider'

	],

	/*
	|--------------------------------------------------------------------------
	| Class Aliases
	|--------------------------------------------------------------------------
	|
	| Este arreglo de alias de clases sera registrado cuando la aplicacion
	| inicia. Sn embargo, sientete libre de registrar cuantos aliases
	| desees, los alises son de carga "peresosa" de modo que no inter-
	| fieren en el rendimiento.
	|
	*/

	'aliases' => [

		'App'       => 'Illuminate\Support\Facades\App',
		'Artisan'   => 'Illuminate\Support\Facades\Artisan',
		'Auth'      => 'Illuminate\Support\Facades\Auth',
		'Blade'     => 'Illuminate\Support\Facades\Blade',
		'Bus'       => 'Illuminate\Support\Facades\Bus',
		'Cache'     => 'Illuminate\Support\Facades\Cache',
		'Config'    => 'Illuminate\Support\Facades\Config',
		'Cookie'    => 'Illuminate\Support\Facades\Cookie',
		'Crypt'     => 'Illuminate\Support\Facades\Crypt',
		'DB'        => 'Illuminate\Support\Facades\DB',
		'Eloquent'  => 'Illuminate\Database\Eloquent\Model',
		'Event'     => 'Illuminate\Support\Facades\Event',
		'File'      => 'Illuminate\Support\Facades\File',
		'Hash'      => 'Illuminate\Support\Facades\Hash',
		'Input'     => 'Illuminate\Support\Facades\Input',
		'Inspiring' => 'Illuminate\Foundation\Inspiring',
		'Lang'      => 'Illuminate\Support\Facades\Lang',
		'Log'       => 'Illuminate\Support\Facades\Log',
		'Mail'      => 'Illuminate\Support\Facades\Mail',
		'Password'  => 'Illuminate\Support\Facades\Password',
		'Queue'     => 'Illuminate\Support\Facades\Queue',
		'Redirect'  => 'Illuminate\Support\Facades\Redirect',
		'Redis'     => 'Illuminate\Support\Facades\Redis',
		'Request'   => 'Illuminate\Support\Facades\Request',
		'Response'  => 'Illuminate\Support\Facades\Response',
		'Route'     => 'Illuminate\Support\Facades\Route',
		'Schema'    => 'Illuminate\Support\Facades\Schema',
		'Session'   => 'Illuminate\Support\Facades\Session',
		'Storage'   => 'Illuminate\Support\Facades\Storage',
		'URL'       => 'Illuminate\Support\Facades\URL',
		'Validator' => 'Illuminate\Support\Facades\Validator',
		'View'      => 'Illuminate\Support\Facades\View',

        /*
         * Vendor
         */
        'Form'      => 'Collective\Html\FormFacade',
        'Html'      => 'Collective\Html\HtmlFacade',

	],

];
