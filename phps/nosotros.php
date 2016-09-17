<?php include("session.php");
if (!isset($_SESSION['id_usuario'])) {
   header('Location: ../login.php');
}else { ?>
	<div class="x_title">
		<h2>Team IronMan</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<p>
			Somos un equipo de estudiantes de élite de la Universidad de Occidente extensión Montesquieu,comprometidos con la educación y la enseñanza.
		</p>
		<p>
			Nuestro principal objetivo es facilitar el aprendizaje de un idioma nativo de Guatemala por medio de material de apoyo especializado.Nuestro público objetivo, son todas las personas que deseen tener una base sólida del idioma kakchikel, ya sea por comprensión básica del mismo o para especializarse posteriormente en el idioma.
		</p>
		<p>
			Conoce un poco mas sobre nosotros, nuestro equipo y el proyecto, visita nuestro <a href="http://progravii.blogspot.com/" target="blank"><i class="fa fa-users"></i> Blog</a>.
		</p>
	</div>

	<div class="clearfix"></div>
	<div class="animated flipInX col-md-4 col-sm-6 col-xs-12 profile_details">
		<div class="well profile_view">
			<div class="col-sm-12">
				<h4 class="brief"><i>Lider de Grupo</i></h4>
				<div class="left col-xs-7">
					<h2>Ashby Guardado</h2>
					<p><strong>Rol: </strong> Project Manager / Back End </p>
				</div>
				<div class="right col-xs-5 text-center">
					<img src="images/ashby.jpg" alt="" class="img-circle img-responsive">
				</div>
			</div>
		</div>
	</div>

	<div class="animated flipInX col-md-4 col-sm-6 col-xs-12 profile_details">
		<div class="well profile_view">
			<div class="col-sm-12">
				<h4 class="brief"><i>Colaborador</i></h4>
				<div class="left col-xs-7">
					<h2>Julio Vivas</h2>
					<p><strong>Rol: </strong> Data Base Administrator </p> 
				</div>
				<div class="right col-xs-5 text-center">
					<img src="images/julio.jpg" alt="" class="img-circle img-responsive">
				</div>
			</div>
		</div>
	</div>

	<div class="animated flipInX col-md-4 col-sm-6 col-xs-12 profile_details">
		<div class="well profile_view">
			<div class="col-sm-12">
				<h4 class="brief"><i>Colaborador</i></h4>
				<div class="left col-xs-7">
					<h2>Estuardo Velasquez</h2>
					<p><strong>Rol: </strong> Front End </p>
				</div>
				<div class="right col-xs-5 text-center">
					<img src="images/estuardo.jpg" alt="" class="img-circle img-responsive">
				</div>
			</div>
		</div>
	</div>

	<div class="animated flipInX col-md-4 col-sm-4 col-xs-12 profile_details">
		<div class="well profile_view">
			<div class="col-sm-12">
				<h4 class="brief"><i>Colaborador</i></h4>
				<div class="left col-xs-7">
					<h2>Erick Ruiz</h2>
					<p><strong>Rol: </strong> Data Base Administrator </p> 
				</div>
				<div class="right col-xs-5 text-center">
					<img src="images/erick.jpg" alt="" class="img-circle img-responsive">
				</div>
			</div>
		</div>
	</div>

	<div class="animated flipInX col-md-4 col-sm-4 col-xs-12 profile_details">
		<div class="well profile_view">
			<div class="col-sm-12">
				<h4 class="brief"><i>Colaborador</i></h4>
				<div class="left col-xs-7">
					<h2>José Reyes</h2>
					<p><strong>Rol: </strong> Front End </p> 
				</div>
				<div class="right col-xs-5 text-center">
				<img src="images/jose.jpg" alt="" class="img-circle img-responsive">
				</div>
			</div>
		</div>
	</div>
<?php }
$mysqli->close(); ?>