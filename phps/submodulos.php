<?php include("session.php");
if (!isset($_SESSION['id_usuario'])) {
   header('Location: login.php');
}else {
  $q_tema = "SELECT nombre,ejemplo,icono,color FROM tema WHERE id_tema = ".$_POST['id_tema'];
  $e_tema = $mysqli->query($q_tema);
  $a_tema = $e_tema->fetch_array(MYSQLI_ASSOC);
  ?>
  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa <?php echo $a_tema['icono']; ?>"></i> <?php echo $a_tema['nombre']; ?> <small><?php echo $a_tema['ejemplo']; ?></small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <div class="" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Home</a>
          </li>
          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Profile</a>
          </li>
          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
          </li>
        </ul>
        <div id="myTabContent" class="tab-content">
          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
            <p>Lección 1</p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
            <p>Lección 2</p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
            <p>Lección 3</p>
          </div>
        </div>
      </div>

    </div>
  </div>
<?php } ?>