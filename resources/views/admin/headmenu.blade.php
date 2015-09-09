<!-- Static navbar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Buscobon</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      {!! Menu::get('menuleft')->addClass('head-menu') !!}
      <ul id="user-menu" class="nav navbar-nav navbar-right">
        <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"expanded="false"><i class="fa fa-user"></i> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Préferences</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{route('logout')}}">Déconnexion</a></li>
          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div><!--/.container-fluid -->
</nav>