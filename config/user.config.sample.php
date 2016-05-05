<?php
/**
 * Fichier de configuration principal de l'application
 *
 * @category   Configuration file
 * @package    Buscobon - PHP FrameWork by Alain Dessi
 * @author     DESSI Alain <alain.dessi@laposte.net>
 * @copyright  2016 Dessi Alain
 * @link       http://www.alain-dessi.com
 */

return array(
  // Configuration Base de données MySql
  'db_host'       =>  'localhost',
  'db_name'       =>  'buscobon',
  'db_user'       =>  'root',
  'db_password'   =>  '',
  'db_charset'    =>  'utf-8',

  // mode developement / mode exploitation
  'dev'           =>  true,

  // render template (twig, blade, php)
  'render'            => 'blade',

  // mode de gestion des sessions
  // 1: normal
  // 2: base de données
  'session_mode'      => 1,
  'session_tablename' => 'sessions',
  'session_time'      => 7200,

  // Configuration PhpMailer
  'Host'          => 'localhost',
  'SMTPAuth'      => false,
  'Username'      => '',
  'Password'      => '',
  'SMTPSecure'    => '',
  'Port'          => 1025,
  'CharSet'       => 'UTF-8'
);
