<?php
include("BDConfig.php");

$user = $_POST['User'];
$pass = sha1($_POST['Pass']);

$QcAd = $linkBD -> query("SELECT * FROM AMS_Adminusers where AliUser = '$user' and PassUser = '$pass'");
$QcUs = $linkBD -> query("SELECT * FROM AMS_Usuarios where AliUser = '$user' and PassUser = '$pass'");

if ($QcAd->num_rows > 0) {
 $row = $QcAd->fetch_assoc();
 if ($Pass = $row['PassUser']) {
   $NUser = utf8_encode($row['NomUser']);
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $NUser;
    $_SESSION['tipUsr'] = true;
    $_SESSION['intervalo']  = 10;
    $_SESSION['inicio'] = time();


header("Location: AMSMenu.php");
}
 } else if ($QcUs->num_rows > 0) {

   $row = $QcUs->fetch_assoc();
   if ($Pass = $row['PassUser']) {
     $NUser = utf8_encode($row['NomUser']);
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $NUser;
      $_SESSION['tipUsr'] = false;
      $_SESSION['intervalo']  = 5;
      $_SESSION['inicio'] = time();

header("Location: AMSMenu.php");
 }
}else{
  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Usuario o Contraseña Incorrectos');
    window.location.href='http://10.20.60.158/AMS';
    </script>");
   exit();
 }

 ?>
