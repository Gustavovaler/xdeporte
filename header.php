<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <script src="js/header.js"></script>
  <script type="text/javascript">
    if (isMobile()) {

       location.href="m.xdeporte.online";
    }
  ;</script>
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/header.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php
      session_start();
      
       if (isset ($_SESSION['usuario'])) { ?>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="noticias.php">Noticias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="nosotros.php">Nosotros</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="novedades.php">Novedades</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Deportes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="listado_eventos.php?deporte=Running">Running</a>
          <a class="dropdown-item" href="listado_eventos.php?deporte=Tenis">Tenis</a>
          <a class="dropdown-item" href="listado_eventos.php?deporte=Golf">Golf</a>
          <a class="dropdown-item" href="listado_eventos.php?deporte=Paddle">Paddle</a>
          <a class="dropdown-item" href="listado_eventos.php?deporte=Otro">Otro</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Sugerir deporte</a>
        </div>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="publicar.php">Publica tu evento</a>
      </li> 
       
      
           <li class="nav-item">
        <a class="nav-link" href="">| Bienvenido <b><?php echo $_SESSION['usuario']; ?></b></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="logout.php">| Salir</a>
      </li>


        <?php          
        } else{ ?>

          <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="noticias.php">Noticias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="nosotros.php">Nosotros</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="novedades.php">Novedades</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Deportes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="listado_eventos.php?deporte=Running">Running</a>
          <a class="dropdown-item" href="listado_eventos.php?deporte=Tenis">Tenis</a>
          <a class="dropdown-item" href="listado_eventos.php?deporte=Golf">Golf</a>
          <a class="dropdown-item" href="listado_eventos.php?deporte=Paddle">Paddle</a>
          <a class="dropdown-item" href="listado_eventos.php?deporte=Otros">Otros</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Sugerir deporte</a>
        </div>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="publicar.php">Publica tu evento</a>
      </li> 

          <li class="nav-item">
        <a class="nav-link" href="registro.php">| Registrarse</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">| Loguearse</a>
      </li>
      <?php

        }
       ?>
       
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>