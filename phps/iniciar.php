<?php include("session.php");
$q_ini = "CALL IsUserPasswordValid('".$_POST['usuario_iniciar']."','".$_POST['clave_iniciar']."');";
$e_ini = $mysqli->query($q_ini);
$n_ini = $e_ini->num_rows;
if ($n_ini > 0) {
	$a_ini = $e_ini->fetch_array(MYSQLI_ASSOC);
	$_SESSION["id_usuario"] = $a_ini['id_usuario'];
	$_SESSION["nombre_usuario"] = $a_ini['Nombre'];
	$_SESSION["id_rol"] = $a_ini['id_rol'];
	$_SESSION["rol"] = $a_ini['rol'];
	echo 1;
} else {
	echo 0;
}
$mysqli->close();
?>