<?php
include("BDConfig.php");

$serial = $_POST['SerialNumber'];
$nomUser = UTF8_DECODE($_POST['NomUser']);
$user = UTF8_DECODE($_POST['User']);
$pass = sha1($_POST['Pass']);
$email = UTF8_DECODE($_POST['mail']);
$CodEmp = $_POST['CodEmp'];


$QcEx = $linkBD -> query("SELECT * FROM AMS_Proyectos where CodEmp = '$CodEmp'");

if ($QcEx->num_rows > 0) {
 $row = $QcEx->fetch_assoc();
 $proy = $row['IDProy'];
 $sql1 = "INSERT INTO AMS_GenActivos VALUES ('$serial','1','','$proy')";
 $sql2 = "INSERT INTO AMS_Usuarios  VALUES ('$serial', '$nomUser', '$user', '$pass', '$email', '$proy')";

 if ($linkBD->query($sql1) === TRUE && $linkBD -> query($sql2) === TRUE) {
   echo ("<script LANGUAGE='JavaScript'>
     window.alert('Registro con Éxito');
     window.location.href='http://10.20.60.158:8080/AMS';
     </script>");
    exit();
 }
}else{
  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Codigo Empresarial Incorrecto');
    window.location.href='http://10.20.60.158:8080/AMS';
    </script>");
   exit();
 }

 ?>
