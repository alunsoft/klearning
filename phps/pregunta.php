<?php include("session.php");
if (!isset($_SESSION['id_usuario'])) {
   header('Location: ../login.php');
}else { 

  $q_tema = "SELECT l.nombre leccion, tl.nombre tipo, m.nombre modulo,m.icono,m.color,l.id_modulo
			FROM leccion l
			INNER JOIN modulo m ON m.id_modulo = l.id_modulo
			INNER JOIN tipo_leccion tl ON tl.id_tipo_leccion = l.id_tipo_leccion
			WHERE l.id_leccion = ".$_POST['id_leccion'];
  $e_tema = $mysqli->query($q_tema);
  $a_tema = $e_tema->fetch_array(MYSQLI_ASSOC);
  $aModulo = $a_tema['id_modulo'];
  $q_pregunta = "SELECT p.id_pregunta,p.pregunta,tp.id_tipo_pregunta,tp.descripcion,p.instruccion
				FROM pregunta p
				INNER JOIN tipo_pregunta tp ON tp.id_tipo_pregunta = p.id_tipo_pregunta
				WHERE p.id_leccion = ".$_POST['id_leccion'];
	$e_pregunta = $mysqli->query($q_pregunta);

	$q_lecc = "CALL createLeccionUsuario('".$_SESSION['id_usuario']."','".$_POST['id_leccion']."');";
	  $e_lecc = $mysqli->query($q_lecc);
	  $a_lecc = $e_lecc->fetch_array(MYSQLI_ASSOC);
	  $createLeccionUsuario = $a_lecc['id_leccion'];
  ?>
  <script>
  	array_pregunta = "";
  	<?php 
  	$acount = 0;
  	while ($a_pregunta = $e_pregunta->fetch_array(MYSQLI_ASSOC)) { 
  		if ($acount == 0){ $coma0 = ''; }else{  $coma0 = ','; } ?>
  		array_pregunta = array_pregunta+"<?php echo $coma0.''.$acount.'|'.$a_pregunta['id_pregunta'].'|'.$a_pregunta['pregunta'].'|'.$a_pregunta['instruccion'].'|'.$a_pregunta['id_tipo_pregunta'].'|'.$aModulo; ?>"; 
  		<?php 
  		$acount++; 
  	} ?>
  		fn_leccionPreguntas(array_pregunta, "no", "<?php echo $createLeccionUsuario; ?>");
  	
  </script>
  <div class="x_panel">
    <div class="x_title bg-<?php echo $a_tema['color']; ?>">
      <h2>
        <i class="fa <?php echo $a_tema['icono']; ?>">
        </i> <?php echo $a_tema['leccion']; ?> <small style="color:black;"><?php echo $a_tema['modulo']; ?></small>
      </h2>
      <ul class="nav navbar-right panel_toolbox nav-primary">
        <li><a class="close-link"  onclick="fn_menu('Ütz Awäch', 'phps/modulos.php')"><i class="fa fa-close"></i></a></li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
    	<h3 id="mev_instruccion">...</h3>
		<hr>
		<h1 id="mev_pregunta">--</h1>
		<p id="mev_respuesta">...</p>
		<button class="btn btn-success btn-lg" data-modulo="<?php echo $aModulo; ?>" id="boton_continuar">Continuar</button>
    </div>
  </div>
<?php }
$mysqli->close(); ?>