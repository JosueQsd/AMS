<!DOCTYPE html>
<html lang="es">
<head>
  <title>AMS-SOFTWARE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <link rel="stylesheet" type="text/css" href="CSS/style.css" media="screen" />
      <script src = "JS/slider.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark" style= "background-color: #292c80;">
  <a class="navbar-brand" href="#">AMS-SOFTWARE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Pagina Principal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://10.20.60.158:8080/AMS/noticias.php">Noticias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacto</a>
      </li>
    </ul>
    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
        <li class="nav-item nav-right mr-md-2"><a class="nav-link" href="#popup1"><i class="material-icons">perm_identity</i> Iniciar Sesión</a></li>
        <li class="nav-item nav-right mr-md-2"><a class="nav-link" href="#popup2"><i class="material-icons">receipt</i> Registrarse</a></li>
      </ul>
  </div>
</nav>



<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Resources/1.jpg" alt="Imagen 1">
      <div class="carousel-caption">
   <h3>AMS-SOFTWARE</h3>
   <p>Active Management Solution</p>
   <p>Control de activos al alcance de sus manos</p>
 </div>
    </div>
    <div class="carousel-item">
      <img src="Resources/2.jpg" alt="Imagen 2">
      <div class="carousel-caption">

 </div>
    </div>
    <div class="carousel-item">
      <img src="Resources/3.jpg" alt="Imagen 3">
      <div class="carousel-caption">

 </div>
    </div>
    <div class="carousel-item">
      <img src="Resources/4.jpg" alt="Imagen 4">
      <div class="carousel-caption">

 </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<div id="popup1" class="overlay">
  <div class="loginpopup">
    <form action="Login.php" method = "Post">
      <center>
      <label style = "margin-left: 100px;">Login AMS</label><a href="" style = "margin-left: 80px; color: #fff;"><i class="material-icons">clear</i></a>
    </center>
      <label for="User">Alias:</label>
      <input type="text" class="form-control" id = "User" placeholder="Ingrese su usuario" name="User" required/>
      <label for="Pass">Contraseña:</label>
      <input type="password" class="form-control" id = "Pass"  placeholder="Ingrese su contraseña" name="Pass" required/>
      <br />
      <center>
      <button type="submit" class="btn btn-light">Iniciar Sesión</button>
    </center>
      <br />
    </form>
  </div>
</div>


<div id="popup2" class="overlay">
  <div class="loginpopup2">
    <form action="RegU.php" method = "Post">
      <center>
      <label style = "margin-left: 90px;">Registro AMS</label><a href="" style = "margin-left: 60px; color: #fff;"><i class="material-icons">clear</i></a>
    </center>
      <label for="User">Numero de Cedula:</label>
      <input type="text" class="form-control" id = "SerialNumberr" placeholder="Ingrese su # de Cedula" name="SerialNumber" required/>
      <label for="User">Nombre Completo:</label>
      <input type="text" class="form-control" id = "NomUser" placeholder="Ingrese su nombre completo" name="NomUser" required/>
      <label for="User">Alias:</label>
      <input type="text" class="form-control" id = "User" placeholder="Ingrese su Alias(Login)" name="User" required/>
      <label for="Pass">Contraseña:</label>
      <input type="password" class="form-control" id = "Pass"  placeholder="Ingrese su contraseña" name="Pass" required/>
      <label for="Pass">Correo:</label>
      <input type="text" class="form-control" id = "mail"  placeholder="Ingrese su correo" name="mail" required/>
      <label for="Pass">Codigo Empresarial</label>
      <input type="password" class="form-control" id = "CodEmp"  placeholder="Ingrese el codigo privado empresarial" name="CodEmp" required/>
      <br />
      <center>
      <button type="submit" class="btn btn-light">Registrarse</button>
    </center>
      <br />
    </form>
  </div>
</div>


</body>
</html>
