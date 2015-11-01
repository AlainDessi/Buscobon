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
Routes::get( '/', 'HomeController@index', 'homepage' );

/*
|--------------------------------------------------------------------------
| Routes de l'Administration
|--------------------------------------------------------------------------
*/
// homepage
Routes::get( '/admin', 'Admin\HomeController@index', 'admin.homepage' );

// Utilisateurs
Routes::resource('/admin/users', 'Admin\UsersController');

// authentification
Routes::get( '/auth/login', 'Auth\AuthController@getLogin', 'login' );
Routes::get( '/auth/logout', 'Auth\AuthController@getLogout', 'logout' );
Routes::post( '/auth/login', 'Auth\AuthController@CheckLogin', 'checklogin' );
