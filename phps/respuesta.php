<?php include("session.php");
if (!isset($_SESSION['id_usuario'])) {
   header('Location: ../login.php');
}else { 
	if (isset($_POST['respCorrecta'])) {
		$q_ins = "INSERT INTO respuesta_usuario (id_leccion_usuario,id_respuesta,id_estado_respuesta,texto_respuesta)
				VALUES (".$_POST['leccionUsuario'].",".$_POST['respCorrecta'].",1,'')";
		$e_ins = $mysqli->query($q_ins);

		$q_upd = "UPDATE leccion_usuario
					SET id_estado_leccion = 1
					WHERE id_leccion_usuario = ".$_POST['leccionUsuario'];
		$e_upd = $mysqli->query($q_upd);
	}
	$q_resp = "SELECT r.id_respuesta, r.id_tipo_respuesta, r.respuesta, tr.descripcion tipo_respuesta
			FROM respuesta r
			INNER JOIN tipo_respuesta tr ON tr.id_tipo_respuesta = r.id_tipo_respuesta
			WHERE r.id_pregunta = ".$_POST['preguntaid'];
	$e_resp = $mysqli->query($q_resp);
	echo "<h4>Ejemplos:</h4>";
	while ($a_resp = $e_resp->fetch_array(MYSQLI_ASSOC)) {
		echo "<p id='respueta_correcta' data-respuesta='".$a_resp['id_respuesta']."'>".$a_resp["respuesta"]."</p>";
	}
}
$mysqli->close(); ?>