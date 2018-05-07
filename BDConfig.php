<?php
session_start();
$linkBD = new mysqli("10.20.60.158","AMSADMIN","AMS-4DM1N","AMSDB");

if ($linkBD->connect_error) {
 die("La conexion falló: " . $linkBD->connect_error);
}
 ?>
