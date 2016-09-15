<?php include("session.php");
if (!isset($_SESSION['id_usuario'])) {
   header('Location: ../login.php');
}else { ?>
	<h3 class="animated fadeInUp">hola mundo</h3>
<?php } ?>