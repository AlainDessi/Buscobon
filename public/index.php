<?php session_start();

/**
 * BUSCOBON - PHP FRAMEWORK by Alain DESSI
 *
 * MySQL verion 5.5.43
 * PHP version 5.4.39-0
 *
 * @package 		BUSCOBON
 * @author    	DESSI Alain <alain.dessi@laposte.net>
 * @copyright 	2015 Dessi Alain
 * @link      	http://www.alain-dessi.com
 */

  /*
  |--------------------------------------------------------------------------
  | Composer Auto Loader
  |--------------------------------------------------------------------------
  */
  require( dirname(__DIR__) . '/vendor/autoload.php');

  /*
  |--------------------------------------------------------------------------
  | chargement du fichier principal d'initialisation de l'application
  |--------------------------------------------------------------------------
  */
  require( dirname(__DIR__) . '/core/app.init.php');

  /*
  |--------------------------------------------------------------------------
  | execution des routes de l'application
  |--------------------------------------------------------------------------
  */
	Routes::run();
