<?php
/**
 * BUSCOBON
 * PHP FrameWork by Alain Dessi
 *
 * Ficher de configuration utilisateur
 *
 * @author     DESSI Alain <alain.dessi@laposte.net>
 * @copyright  2015 Dessi Alain
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

  // Configuration PhpMailer
  'Host'          => 'localhost',
  'SMTPAuth'      => false,
  'Username'      => '',
  'Password'      => '',
  'SMTPSecure'    => '',
  'Port'          => 1025,
  'CharSet'       => 'UTF-8'

);
