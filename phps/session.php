<?php session_start();

// DB connect 
$server = 'MYSQL5016.SmarterASP.NET';
$user = 'a0fa2b_kaq';
$pasw = '*Pr1t5*h2';
$db = 'db_a0fa2b_kaq';
//$enlace =  mysql_connect('MYSQL5016.SmarterASP.NET', 'a0fa2b_kaq', '*Pr1t5*h2') or die('No pudo conectarse: ' . mysql_error());
//echo 'Conectado satisfactoriamente';
//mysql_select_db("db_a0fa2b_kaq", $enlace) or die('Error al conectar a la DB: ' . mysql_error());
//db_a0fa2b_kaq
$mysqli = new mysqli($server, $user, $pasw, $db);
if ($mysqli->connect_errno) {
    echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>