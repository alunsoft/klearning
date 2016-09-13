<?php include("session.php");
$q_ini = "CALL IsUserPasswordValid('".$_POST['usuario_iniciar']."','".$_POST['clave_iniciar']."');";
$e_ini = mysql_query($q_ini);
$n_ini = mysql_num_rows($e_ini);
if ($n_ini > 0) {
	$a_ini = mysql_fetch_array($e_ini);
	$_SESSION["id_usuario"] = $a_ini['id_usuario'];
	$_SESSION["nombre_usuario"] = $a_ini['Nombre'];
	echo 1;
} else {
	echo 0;
}
?>