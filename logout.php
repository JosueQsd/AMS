<?php
include("BDConfig.php");

$_SESSION['loggedin'] = false;

header("location: index.php");
?>
