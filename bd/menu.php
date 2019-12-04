<?php 
function Menu($tipo){
  if($tipo == "adm"){
    print'
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Events4You</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastrar
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Evento</a></li>
                <li><a href="#">Tipos de Evento</a></li>
                <li class="divider"></li>
                <li><a href="#">Patrocinador</a></li>
                <li><a href="#">Organizador</a></li>
                <li class="divider"></li>
                <li><a href="#">Palestrante</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Relatórios
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Palestrantes</a></li>
                <li class="divider"></li>
                <li><a href="#">Usuários</a></li>
                <li><a href="#">Listas de Presença</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" action="/action_page.php">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" name="search">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <i class="glyphicon glyphicon-search"></i>
                </button>
              </div>
            </div>
          </form>
          <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="logoff.php">
                  <span class="glyphicon glyphicon-log-in">
                  </span> Logoff 
                </a></li>
            </ul>
        </div>
      </nav>
      ';
    }
    if($tipo == "user"){
      print'
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Events4You</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown">
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Relatórios
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Palestrantes</a></li>
                <li class="divider"></li>
                <li><a href="#">Usuários</a></li>
                <li><a href="#">Listas de Presença</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" action="/action_page.php">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" name="search">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <i class="glyphicon glyphicon-search"></i>
                </button>
              </div>
            </div>
          </form>
          <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="logoff.php">
                  <span class="glyphicon glyphicon-log-in">
                  </span> Logoff 
                </a></li>
            </ul>
        </div>
      </nav>
      ';
    }
  }
