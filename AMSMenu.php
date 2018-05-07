<html>
<head>
<script src = "js/Menus.js"></script>
</head>

<?php
include("BDConfig.php");


if ($_SESSION['loggedin'] == true){

if ($_SESSION['tipUsr'] == 3){

header('location: AMSZ/MenuAdmin.php');

}else if($_SESSION['tipUsr'] == 1){

header('location: AMSX/MenuUsuario.php');

}else if($_SESSION['tipUsr'] == 2){

header('location: AMSY/MenuSpecial.php');
}

}else{
  echo ("<script LANGUAGE='JavaScript'>
    window.location.href='http://10.20.60.158:8080/AMS';
    </script>");
  exit();
}

 ?>
</body>

</html>
