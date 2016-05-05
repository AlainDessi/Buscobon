<?php

/**
 * Template homepage
 *
 * PHP 5.5.12
 * @author  alain DESSI <alain.dessi@laposte.net>
 * @link    www.alain-dessi.com
 *
 */
?>
@extends('front/default')

@section('content')

  <div class="container">
    <div class="box">
      <div class="box-content">
        <h1>Buscobon</h1>
        <p>PHP FRAMEWORK By Alain Dessi</p>
        <p><small>rendu de page avec Laravel/Blade</small></p>
      </div>
    </div>
    <div class="version">Version {{ VERSION }}</div>
  </div>

@endsection
