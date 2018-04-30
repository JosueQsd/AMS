<html>
<head>
<script src = "js/Menus.js"></script>
</head>

<?php
include("BDConfig.php");


if ($_SESSION['loggedin'] == true){

if ($_SESSION['tipUsr'] == 3){
  echo "Bienvenido Admin! " . $_SESSION['username'];
  $segundos = time();
  $tiempo_transcurrido = $segundos;
  $tiempo_maximo = $_SESSION['inicio']  + ( $_SESSION['intervalo'] * 60 ) ;
  if($tiempo_transcurrido > $tiempo_maximo){
  header('location: index.php');
  }else{
  $_SESSION['inicio'] = time();
  }
  $SESSION = true;
  if ($tiempo_transcurrido <= $tiempo_maximo){
?>
<body onload = "Admin ()">
<div id = "MenuAdmin">
</div>
<?php
}



}else if($_SESSION['tipUsr'] == 1){
  echo "Bienvenido Usuario! " . $_SESSION['username'];
  $segundos = time();
  $tiempo_transcurrido = $segundos;
  $tiempo_maximo = $_SESSION['inicio']  + ( $_SESSION['intervalo'] * 60 ) ;
  if($tiempo_transcurrido > $tiempo_maximo){
  header('location: index.php');
  }else{
  $_SESSION['inicio'] = time();
  }
  ?>
  <body onload = "User ()">
  <div id = "MenuUser">
  </div>
  <?php

}else if($_SESSION['tipUsr'] == 2){

  echo "Bienvenido Especialista! " . $_SESSION['username'];
  $segundos = time();
  $tiempo_transcurrido = $segundos;
  $tiempo_maximo = $_SESSION['inicio']  + ( $_SESSION['intervalo'] * 60 ) ;
  if($tiempo_transcurrido > $tiempo_maximo){
  header('location: index.php');
  }else{
  $_SESSION['inicio'] = time();
  }
  ?>
  <body onload = "Special ()">
  <div id = "MenuSpecial">
  </div>
  <?php
}

}else{
  echo ("<script LANGUAGE='JavaScript'>
    window.location.href='http://10.20.60.158/AMS';
    </script>");
  exit();
}

 ?>
</body>

</html>
