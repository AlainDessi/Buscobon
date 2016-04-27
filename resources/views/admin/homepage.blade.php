@extends('admin/default')

@section('title')
  <title>Daschboard</title>
@endsection

@section('main_content')
<div class="container">
  <h1>Bienvenue sur Buscobon</h1>
  <hr>
  <?php var_dump($_SESSION) ?>
</div>
@endsection
