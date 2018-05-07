<?php
include('../BDConfig.php');

if ($_SESSION['loggedin'] == true){

if ($_SESSION['tipUsr'] == 3){
  $usuario = $_SESSION['username'];
  $segundos = time();
  $tiempo_transcurrido = $segundos;
  $tiempo_maximo = $_SESSION['inicio']  + ( $_SESSION['intervalo'] * 60 ) ;
  if($tiempo_transcurrido > $tiempo_maximo){
  header('location: ../index.php');
  }else{
  $_SESSION['inicio'] = time();
  }
?>
<html>
<head>
<title>AMS-SOFTWARE</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/simple-sidebar.css" rel="stylesheet">

<style>

.letrasbody{
  color: #fff;
}

ul{
  color : rgba(255, 255, 255, 0.5);
}

body{
  background-image: url("http://10.20.60.158:8080/AMS/Resources/Fondo.jpg");
  background-repeat: no-repeat;
  background-size: 100%;
  background-position: center center;
  background-attachment: fixed;}
}

</style>


</head>

<body>
<div id="wrapper" class = "sticky-top">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                    Plataforma Administrador
                    </a>
                </li>
                <li>
                    <a data-toggle="collapse" href="#usuarios"><i class="material-icons">people</i> Roles de Usuarios</a>
        <div id="usuarios" class="collapse">
        <ul>
          <li><a data-toggle="tab" href="#menu1"><i class="material-icons">supervisor_account</i> Administradores</a></li>
          <li><a href="#section2"><i class="material-icons">person</i> Especialistas</a></li>
          <li><a href="#section3"><i class="material-icons">perm_identity</i>Usuarios </a></li>
        </ul>
      </div>
                </li>
                <li>
                    <a href="#"><i class="material-icons">assignment</i> Información de Activos</a>
                </li>
                <li>
                    <a href="#"><i class="material-icons">monetization_on</i> Financiamiento</a>
                </li>
                <li>
                    <a href="#"><i class="material-icons">style</i> Configuracion de Diseño</a>
                </li>
                <li>
                    <a href="#"><i class="material-icons">domain</i> Control de Proyectos</a>
                </li>
                <li>
                    <a href="http://10.20.60.158:8080/AMS/logout.php"><i class="material-icons">lock</i> Cerrar Sesión</a>
                </li>
            </ul>
        </div>

          <nav class="navbar navbar-expand-md navbar-dark sticky-top" style= "background-color: #292c80;">
            <a href="#menu-toggle" class="btn" style = "color: #fff;" id="menu-toggle"><i class="material-icons">view_headline</i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Bienvenido <?php echo "$usuario"; ?></a>
                </li>
              </ul>
              <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                  <li class="nav-item nav-right mr-md-2"><a class="navbar-brand" href="http://10.20.60.158:8080/AMS/index.php">AMS-SOFTWARE</a></li>
                </ul>
            </div>
          </nav>

        <div id="page-content-wrapper">
            <div class="container-fluid">
              <div class="row letrasbody">
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
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- Menu Toggle Script -->

        <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        </script>
</body>
</html>

<?php
}else{
  echo ("<script LANGUAGE='JavaScript'>
    window.location.href='http://10.20.60.158:8080/AMS';
    </script>");
  exit();
}
}else{
  echo ("<script LANGUAGE='JavaScript'>
    window.location.href='http://10.20.60.158:8080/AMS';
    </script>");
  exit();
}
?>
