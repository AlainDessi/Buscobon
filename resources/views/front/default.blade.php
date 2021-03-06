<!DOCTYPE html>
<html>
<head>
  <title><?= $title ?></title>
  <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
  <style>

    html,body {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: Lato;
      color: #a0a0a0;
    }
    p { font-size: 20px; color: #666; }
    h1 { font-size: 70px; font-weight: bold; margin: 8px 0; }
    h2 { font-size: 40px; margin: 8px 0; }
    h3 { font-size: 30px; margin: 8px 0; }

    .container {
      width: 1024px;
      margin: 0 auto;
      height: 100%;
      text-align: center;
      position: relative;
    }
    .box {
      display: table;
      width: 100%;
      height: 100%;
    }
    .box-content {
      display: table-cell;
      height: 100%;
      vertical-align: middle;
    }
    .version {
      display: block;
      position: absolute;
      bottom: 36px;
      width: 100%;
      text-align: center;
    }

  </style>
</head>
<body>

{{-- Contenu de la page- --}}
@yield('content')

</body>
</html>