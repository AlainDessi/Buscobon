@extends('admin/default');

@section('main_content')
<div class="container">
  <h1>Test Form</h1>
  <hr>
  {!! Form::open(route('admin.post.edit','12'), 'post') !!}
    {!! Form::text('email','email')->defaultValue('test de valeur par default')->readonly() !!}
    {!! Form::password('password','password')->placeholder('your password')->disabled() !!}
    {!! Form::email('email','email')->placeholder('your email') !!}
    {!! Form::date('date','date')->placeholder('jj/mm/yyyy') !!}
    {!! Form::textarea('contenu','content')->defaultValue('test de commentaires') !!}
    {!! Form::check('test check','check') !!}
    <hr>
    {!! Form::submit('valider') !!}
  {!! Form::close() !!}
</div>
<a href="{{ route('logout') }}">Se deconencter</a>
@endsection
