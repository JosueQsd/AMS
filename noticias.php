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

<nav class="navbar navbar-expand-md navbar-dark" style = "background-color: #292c80;">
  <a class="navbar-brand" href="#">AMS-SOFTWARE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="http://10.20.60.158:8080/AMS/index.php">Pagina Principal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Noticias</a>
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


<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3>Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>


<div id="popup1" class="overlay">
  <div class="loginpopup">
    <form action="Login.php" method = "Post">
      <center>
      <label>Login AMS</label>
    </center>
      <label for="User">Usuario:</label>
      <input type="text" class="form-control" id = "User" placeholder="Ingrese su usuario" name="User"/>
      <label for="Pass">Contraseña:</label>
      <input type="password" class="form-control" id = "Pass"  placeholder="Ingrese su contraseña" name="Pass"/>
      <br />
      <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
      <a href="" class="btn btn-primary">Cerrar</a>
      <br />
    </form>
  </div>
</div>

<div id="popup2" class="overlay">
  <div class="loginpopup2">
    <form action="RegU.php" method = "Post">
      <center>
      <label>Registro AMS</label>
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
      <button type="submit" class="btn btn-primary">Registrarse</button>
      <a href="" class="btn btn-primary">Cerrar</a>
      <br />
    </form>
  </div>
</div>


</body>
</html>
