<?php
/**
 * Template user create
 *
 * @author  alain DESSI <alain.dessi@laposte.net>
 * @link    www.alain-dessi.com
 */
?>
@extends('admin/default')

@section('title')
  <title>Création d'un utilisateur</title>
@endsection

@section('main_content')
<div class="container">
  <h3 class="page-header"><i class="fa fa-user"></i>
    Création d'un utilisateur
  </h3>
  {!! Form::open(route('admin.users.store')) !!}
    <div class="row">

      <div class="col-md-6">
        {!! Form::text('email', 'email') !!}
        {!! Form::select('Droits applicatif','rightvalue',$rights) !!}
        <hr>
        {!! Form::submit('Enregistrer') !!}
        {!! Button::btnIco('Annuler', 'cancel', route('admin.users')) !!}
      </div>

    </div>

  {!! Form::close() !!}

</div>
@endsection