<?php include("session.php");
$_SESSION = array();
$mysqli->close();
header('Location: ../login.php'); ?>