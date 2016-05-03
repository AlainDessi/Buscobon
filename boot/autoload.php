<?php
/*
|--------------------------------------------------------------------------
| Composer Auto Loader
|--------------------------------------------------------------------------
*/
require(dirname(__DIR__) . '/vendor/autoload.php');

/*
|--------------------------------------------------------------------------
| Répertoire de l'application
|--------------------------------------------------------------------------
*/
define('ROOT_DIR', dirname(__DIR__));
define('VIEWS_DIR', ROOT_DIR . '/resources/views/');
define('CACHE_DIR', ROOT_DIR . '/temp/cache/');
define('CONFIG_DIR', ROOT_DIR . '/config/');
define('TEMPLATE_DIR', ROOT_DIR . '/resources/templates/');
