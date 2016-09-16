<?php include("session.php");
if (!isset($_SESSION['id_usuario'])) {
   header('Location: ../login.php');
}else { 
  $q_tema = "SELECT l.nombre leccion, tl.nombre tipo, m.nombre modulo,m.icono,m.color
			FROM leccion l
			INNER JOIN modulo m ON m.id_modulo = l.id_modulo
			INNER JOIN tipo_leccion tl ON tl.id_tipo_leccion = l.id_tipo_leccion
			WHERE l.id_leccion = ".$_POST['id_leccion'];
  $e_tema = $mysqli->query($q_tema);
  $a_tema = $e_tema->fetch_array(MYSQLI_ASSOC);

  $q_pregunta = "SELECT p.id_pregunta,p.pregunta,tp.id_tipo_pregunta,tp.descripcion
				FROM pregunta p
				INNER JOIN tipo_pregunta tp ON tp.id_tipo_pregunta = p.id_tipo_pregunta
				WHERE p.id_leccion = ".$_POST['id_leccion'];
	$e_pregunta = $mysqli->query($q_pregunta);
  ?>
  <script>
  	array_pregunta = "";
  	<?php $acount = 0;
  	while ($a_pregunta = $e_pregunta->fetch_array(MYSQLI_ASSOC)) { 
  		if ($acount == 0){ echo "coma = '';"; }else{ echo "coma = ',';"; } ?>
  		array_pregunta += coma + "<?php echo $a_pregunta['id_pregunta'].'|'.$a_pregunta['pregunta'].'|'.$a_pregunta['descripcion'].'|'.$a_pregunta['id_tipo_pregunta']; ?>"; 
  	<?php $acount++; 
  	} ?>
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
		Test
    </div>
  </div>
<?php } ?>