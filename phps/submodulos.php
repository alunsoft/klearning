<?php include("session.php");
if (!isset($_SESSION['id_usuario'])) {
   header('Location: login.php');
}else {
  $q_tema = "SELECT nombre,ejemplo,icono,color FROM tema WHERE id_tema = ".$_POST['id_tema'];
  $e_tema = $mysqli->query($q_tema);
  $a_tema = $e_tema->fetch_array(MYSQLI_ASSOC);
  ?>
  <div class="x_panel">
    <div class="x_title bg-<?php echo $a_tema['color']; ?>">
      <h2><i class="fa <?php echo $a_tema['icono']; ?>"></i> <?php echo $a_tema['nombre']; ?> <small style="color:black;"><?php echo $a_tema['ejemplo']; ?></small></h2>
      <ul class="nav navbar-right panel_toolbox nav-primary">
        <li><a class="close-link"  onclick="fn_menu('Ütz Awäch', 'phps/modulos.php')"><i class="fa fa-close"></i></a></li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <a class="btn btn-app col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <i class="fa <?php echo $a_tema['icono']; ?> text-<?php echo $a_tema['color']; ?>"></i> Lección 1
        </a>
        <a class="btn btn-app col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <i class="fa <?php echo $a_tema['icono']; ?> text-<?php echo $a_tema['color']; ?>"></i> Lección 2
        </a>
        <a class="btn btn-app col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <i class="fa <?php echo $a_tema['icono']; ?> text-<?php echo $a_tema['color']; ?>"></i> Lección 3
        </a>
        <a class="btn btn-app col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <i class="fa <?php echo $a_tema['icono']; ?> text-<?php echo $a_tema['color']; ?>"></i> Lección 4
        </a>
    </div>
  </div>
<?php } ?>