<?php include("session.php");
if (!isset($_SESSION['id_usuario'])) {
   header('Location: ../login.php');
}else {
	$q_actu = "UPDATE usuario 
				SET nombre = '".$_POST['nombre']."'
				,email = '".$_POST['correo']."'
				WHERE id_usuario = ".$_SESSION['id_usuario'];
	$e_actu = $mysqli->query($q_actu);
	$_SESSION["nombre_usuario"] = $_POST['nombre'];
}