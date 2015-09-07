<?php
/**
 * BUSCOBON - PHP Framework
 *
 * Paramètres généraux du FrameWork
 *
 * @author    	DESSI Alain <alain.dessi@laposte.net>
 * @copyright 	2015 Dessi Alain
 * @link      	http://www.alain-dessi.com
 */

// version et release
define( 'VERSION', 'V0 Alpha');

//define répertoire de l'application
define( 'ROOT_DIR'	, dirname(__DIR__) );
define( 'VIEWS_DIR'	, ROOT_DIR . '/resources/views/' );
define( 'CACHE_DIR' , ROOT_DIR . '/temp/cache/' );
define( 'CONFIG_DIR', ROOT_DIR . '/config/');

// define url de l'application
$root_url = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
define( 'ROOT_URL'	, $root_url );

// Functions de l'application
require_once (__DIR__ . '/app.functions.php');

// Debug
require_once(__DIR__ . '/app.debugmode.php');

// chargement des routes de l'application
use Core\Http\Router;
if( !empty($_GET['url']) ) { $url = $_GET['url']; } else { $url = ''; }
$router = new Router( $url );
require_once (dirname(__DIR__) . '/app/routes.php');

