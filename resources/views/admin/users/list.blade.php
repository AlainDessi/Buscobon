<?php
/**
 * Template administration listes des chambres
 *
 * PHP
 *
 * @author  alain DESSI <alain.dessi@laposte.net>
 * @link    www.alain-dessi.com
 */
?>
@extends('admin/default')

@section('title')
  <title>Liste des Utilisateurs</title>
@endsection

@section('main_content')
<div class="container">
   <div class="col-md-6 title">
     <h3><i class="fa fa-users"></i> Liste des Utilisateurs</h3>
   </div>
   <div class="col-md-6 text-right button">
      {!! Button::btnIco('ajouter un utilisateur', 'add', route('admin.users.create')) !!}
   </div>
</div>
<div class="container">
  <hr>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>email</th>
        <th>nom de l'utilisateur</th>
        <th>Droits applicatifs</th>
        <th>Actif</th>
        <th>...</th>
      </tr>
    </thead>
    @foreach ($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->firstname . ' ' . $user->lastname}}</td>
        <td>{{ Auth::rightName($user->rightvalue) }}</td>
        <td>{!! Table::IcoCheck($user->active) !!}</td>
        <td>
          {!! Button::btnIco('Modifier','edit', route('admin.users.edit', $user->id))->extra_small() !!}
          {!! Button::btnIco('Effacer','delete', route('admin.users.delete', $user->id))->extra_small() !!}
        </td>
      </tr>
    @endforeach
  </table>

</div>
@endsection