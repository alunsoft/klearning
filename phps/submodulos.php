<?php include("session.php");
if (!isset($_SESSION['id_usuario'])) {
   header('Location: ../login.php');
}else {
  $q_tema = "SELECT nombre,ejemplo,icono,color FROM modulo WHERE id_modulo = ".$_POST['id_modulo'];
  $e_tema = $mysqli->query($q_tema);
  $a_tema = $e_tema->fetch_array(MYSQLI_ASSOC);

  $q_leccion = "SELECT l.id_leccion, l.id_tipo_leccion, tl.nombre tipo_leccion,l.nombre
              FROM tipo_leccion tl 
              INNER JOIN leccion l ON l.id_tipo_leccion = tl.id_tipo_leccion
              WHERE l.id_modulo = ".$_POST['id_modulo'];
  $e_leccion = $mysqli->query($q_leccion);
  ?>
  <div class="x_panel">
    <div class="x_title bg-<?php echo $a_tema['color']; ?>">
      <h2>
        <i class="fa <?php echo $a_tema['icono']; ?>">
        </i> <?php echo $a_tema['nombre']; ?> <small style="color:black;"><?php echo $a_tema['ejemplo']; ?></small>
      </h2>
      <ul class="nav navbar-right panel_toolbox nav-primary">
        <li><a class="close-link"  onclick="fn_menu('Ütz Awäch', 'phps/modulos.php')"><i class="fa fa-close"></i></a></li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="row" id="kl-content-lessons">
        <?php while ($a_leccion = $e_leccion->fetch_array(MYSQLI_ASSOC)) { ?>
          <a class="animated flipInY kl-btn-select btn btn-app col-xs-12 col-sm-6 col-md-4 col-lg-3" onclick="fn_loadQuestion('kl-content-question', 'phps/pregunta.php', 'id_leccion=<?php echo $a_leccion['id_leccion']; ?>')">
            <i class="fa <?php echo $a_tema['icono']; ?> text-<?php echo $a_tema['color']; ?>"></i> <?php echo $a_leccion['nombre']; ?>
          </a>
        <?php } ?>
      </div>
      <div class="row" id="kl-content-question"></div>
    </div>
  </div>
<?php } ?>