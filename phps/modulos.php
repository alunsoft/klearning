<?php include("session.php");
if (!isset($_SESSION['id_usuario'])) {
   header('Location: login.php');
}else {
  $q_modulos = "SELECT id_tema, nombre,ejemplo,icono,color FROM tema WHERE estado = 1";
  $e_modulos = $mysqli->query($q_modulos); ?>
  <div class="x_title">
    <h2>Tus Modulos</h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <div class="row">
      <?php while ($a_modulos = $e_modulos->fetch_array(MYSQLI_ASSOC)) { ?>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12" onclick="fn_loadContent('x_panel_princiapl', 'phps/submodulos.php','id_tema=<?php echo $a_modulos['id_tema']; ?>')">
          <div class="tile-stats modulo modulo-<?php echo $a_modulos['color']; ?>" data-class="modulo-<?php echo $a_modulos['color']; ?>">
            <div class="icon"><i class="fa <?php echo $a_modulos['icono']; ?> text-<?php echo $a_modulos['color']; ?>"></i></div>
            <div class="count">0</div>
            <h3><?php echo $a_modulos['ejemplo']; ?></h3>
            <p><?php echo $a_modulos['nombre']; ?></p>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"id="contentSubModulo">
        
      </div>
    </div>
  </div>
<?php } ?>