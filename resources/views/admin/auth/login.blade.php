<?php

/**
 * Template Login
 *
 * PHP 5.5.12
 * @author  alain DESSI <alain.dessi@laposte.net>
 * @link    www.alain-dessi.com
 *
 */

?>
<!DOCTYPE html>
<html>
<head>
  <title>Administration Site test</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,700' rel='stylesheet' type='text/css'>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
  <link href="/css/admin.theme.min.css" rel="stylesheet">
</head>
<body>
<div class="container full-height">
  <div class="box">
    <div class="box-content">
      <div class="login">
        <h1>login administration</h1>
        <hr>
        @if(Session::hasMsg())
          {!! Session::printMsg() !!}
        @endif
        {!! Form::open() !!}
          {!! Form::text('email','email')->placeholder('votre email') !!}
          {!! Form::password('password','password')->placeholder('votre mot de passe') !!}
          {!! Form::check('se rappeler de moi','remember') !!}
          <hr>
          {!! Form::submit('se connecter') !!}
        {!! Form::close() !!}
        </div>
    </div>
  </div>
</div>

</body>
</html>