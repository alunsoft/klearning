<?php include("session.php");
if (!isset($_SESSION['id_usuario'])) {
   header('Location: ../login.php');
}else {
  $q_usuario = "SELECT nick,nombre,email FROM usuario WHERE id_usuario = ".$_SESSION['id_usuario'];
  $e_usuario = $mysqli->query($q_usuario);
  $a_usuario = $e_usuario->fetch_array(MYSQLI_ASSOC); ?>
    <form id="formModal" class="form-horizontal calender" role="form">
      <div class="form-group">
        <label class="col-sm-3 control-label">Usuario</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="nick" name="nick" readonly="" value="<?php echo $a_usuario['nick'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Nombre</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $a_usuario['nombre'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Correo</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="correo" name="correo" value="<?php echo $a_usuario['email'] ?>">
        </div>
      </div>
    </form>
<?php } ?>