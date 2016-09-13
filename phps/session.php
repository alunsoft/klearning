<?php session_start();

// DB connect 
$enlace =  mysql_connect('MYSQL5016.SmarterASP.NET', 'a0fa2b_kaq', '*Pr1t5*h2') or die('No pudo conectarse: ' . mysql_error());
//echo 'Conectado satisfactoriamente';
mysql_select_db("db_a0fa2b_kaq") or die('Error al conectar a la DB: ' . mysql_error());
//db_a0fa2b_kaq
?>