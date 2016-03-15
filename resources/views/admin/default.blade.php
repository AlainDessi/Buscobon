<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @yield('title')

  {{-- google fonts --}}
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  {{-- Bootstrap --}}
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
  {{-- font-awesome --}}
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

   @if(\Core\Config::get('dev'))
      <link rel="stylesheet" type="text/css" href="/css/admin.theme.css">
      <link rel="stylesheet" type="text/css" href="/css/jquery.modal.css">
    @else
      <link rel="stylesheet" type="text/css" href="/css/admin.theme.min.css">
    @endif
</head>
<body>
  {{-- Header Menu --}}
  @include('admin/headmenu')

  {{-- affichage des erreurs ou succès --}}
  @if(Session::hasMsg())
    <div id="msg-container" class="container">
      {!! Session::printMsg() !!}
    </div>
  @endif

  {{-- Contenu de la page- --}}
  @yield('main_content')

  {{-- Loading Javascript CDN --}}
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

  {{-- Developpement Mode --}}
  @if(\Core\Config::get('dev'))
    <script type="text/javascript" src="/js/jquery.modal.js"></script>
    <script type="text/javascript" src="/js/admin.functions.js"></script>
  {{-- Production Mode --}}
  @else
    <script type="text/javascript" src="/js/admin.functions.min.js"></script>
  @endif
</body>
</html>