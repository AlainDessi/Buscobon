<?php
/**
 * Template user edit
 *
 * @author  alain DESSI <alain.dessi@laposte.net>
 * @link    www.alain-dessi.com
 */
?>
@extends('admin/default')

@section('title')
  <title>Modification d'un utilisateur</title>
@endsection

@section('main_content')
<div class="container">
	<h3 class="page-header"><i class="fa fa-user"></i>
		Modification Utilisateur <small><?= $user->lastname . ' ' . $user->firstname ?></small>
	</h3>
	{!! Form::open(route('admin.users.update', $user->id)) !!}
		<div class="row">

			<div class="col-md-6">
				{!! Form::text('email', 'email')->defaultvalue($user->email) !!}
				{!! Form::text('Nom', 'lastname')->defaultvalue($user->lastname) !!}
				{!! Form::text('Prenom', 'firstname')->defaultvalue($user->firstname) !!}
        <strong>Paramètres</strong>
        <div class="container">
          {!! Form::check('utilisateur actif','active')->defaultvalue($user->active) !!}
        </div>

			</div>

			<div class="col-md-6">
        @if (empty($user->password))
          <div class="alert alert-danger">Aucun mot de passe n'a été défini</div>
        @else
        <div class="alert alert-info">Entrez un mot de passe seulement pour le modifier</div>
        @endif
				{!! Form::password('Mot de passe', 'password_1') !!}
				{!! Form::password('Répetez le mot de passe', 'password_2') !!}
        {!! Form::select('Droits applicatif','rightvalue',$rights,$user->rightvalue) !!}
			</div>

		</div>
		<hr>
		{!! Form::submit('enregistrer') !!}
		{!! Button::btnIco('Liste des Utilisateurs', 'list', route('admin.users')) !!}
	{!! Form::close() !!}

</div>
@endsection