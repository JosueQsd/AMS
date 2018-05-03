<?php
include('../BDConfig.php');

if ($_SESSION['loggedin'] == true){

if ($_SESSION['tipUsr'] == 1){
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
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-dark" style= "background-color: #292c80;">
    <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle"><i class="material-icons">view_headline</i></a>
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
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                    Plataforma Usuario
                    </a>
                </li>
                <li>
                    <a href="#">Roles de Usuarios</a>
                </li>
                <li>
                    <a href="#">Información de Activos</a>
                </li>
                <li>
                    <a href="#">Financiamiento de Activos</a>
                </li>
                <li>
                    <a href="#">Configuracion de Diseño</a>
                </li>
                <li>
                    <a href="#">Control de Proyectos</a>
                </li>
                <li>
                    <a href="http://10.20.60.158:8080/AMS/logout.php">Cerrar Sesión</a>
                </li>
            </ul>
        </div>
<img src = "../resources/2.jpg" />
        <div id="page-content-wrapper">
            <div class="container-fluid">
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
