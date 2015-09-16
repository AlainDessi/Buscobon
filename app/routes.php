<?php
/**
 * Routes de l'application
 *
 * MySQL verion 5.5.43
 * PHP version 5.4.39-0
 *
 * @author    	DESSI Alain <alain.dessi@laposte.net>
 * @copyright 	2015 Dessi Alain
 * @link      	http://www.alain-dessi.com
 */

/*
|--------------------------------------------------------------------------
| Routes du front-end
|--------------------------------------------------------------------------
*/
// homepage front
$router->get( '/', 'HomeController@index', 'homepage' );


/*
|--------------------------------------------------------------------------
| Routes de l'Administration
|--------------------------------------------------------------------------
*/

// homepage
$router->get( '/admin', 'Admin\HomeController@index', 'admin.homepage' );

// Utilisateurs
$router->resource('/admin/users', 'Admin\UsersController');

// authentification
$router->get( '/auth/login', 'Auth\AuthController@getLogin', 'login' );
$router->get( '/auth/logout', 'Auth\AuthController@getLogout', 'logout' );
$router->post( '/auth/login', 'Auth\AuthController@CheckLogin', 'checklogin' );
