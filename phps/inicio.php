<?php include("session.php"); $mysqli->close(); ?>
	<div class="row animated flipInY ">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2 class="text-center">¿Porqué aprender Kakchiquel?</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="col-md-5 col-sm-6 col-xs-12">
						<p class="text-center text-justify">
							El que cada vez más personas estén  reencontrándose e identificándose con su cultura, es un logro de las comunidades lingüísticas, pero el camino por recorrer es largo.   La educación bilingüe intercultural, aún no recibe suficiente atención. La falta de material didáctico hace que sea un problema el aprendizaje de este idioma, a tal necesidad nace K-LEARNING
						</p>
					</div>
					<div class="col-md-7 col-sm-6 col-xs-12">
						<iframe width="100%" height="230" src="https://www.youtube.com/embed/ZcPA-wZYVTY" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
            
	<div class="row animated flipInY ">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2 class="text-center">Tus avances</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="col-md-6 col-sm-6 col-xs-12">            
						<img src="images/graficas.png" alt="grafica de avances">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<p class="text-gustify">
							Toma el control de tu aprendizaje mediante del idioma Kakchiquel a tu propio ritmo con nuestro curso en linea. Al mismo tiempo que afinas tu pronuciaciòn con los ejercicio interactivos que te ofrecemos
						</p>
						<br>
						<h2>Domina el idioma Kakcquiel de forma sencilla</h2>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row animated flipInY ">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2 class="text-center">Aprende Kakchiquel de forma interactiva, de manera gratuita</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="col-md-6 col-sm-6 col-xs-12" id="informacion">
						<div class="program_card card_nanodegree" >
							<div class="card_content">
								<h3 class="text-center text-justify">Nuestros Modulos</h3>
								<p>
									Los modulos que trabajaremos en K-LEARNING estan pensados espeficamente para un aprendizaje rápido 
									y fácil para los estudiantes y personlas interesadas en aprender el idioma Kakchiquel
								</p>
							</div>
							<?php if (isset($_SESSION['id_usuario'])) { ?>
								<a href="phps/logout.php" class="btn btn-primary btn-lg">Expora nuestros programas</a>
							<?php }else{ ?>
								<a href="#" onclick="fn_menu('Ütz Awäch', 'phps/modulos.php')" class="btn btn-primary btn-lg">Expora nuestros programas</a>
							<?php } ?>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<?php if (!isset($_SESSION['id_usuario'])) { ?>
							<h2 class="text-center">Registrate y aprende en poco tiempo</h2>
							<form class="form-horizontal" style="display: block;">
								<div class="form-group">
									<div class="col-sm-12">
										<input type="email" class="form-control" id="nombre" placeholder="Ingrese un Nombre">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input type="email" class="form-control" id="email" placeholder="Correo Electrònico">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12"> 
										<input type="password" class="form-control" id="pwd" placeholder="Ingrese Contraseña">
									</div>
								</div>
								<div class="form-group"> 
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" class="btn btn-info btn-lg">Registrar</button>
									</div>
								</div>
							</form>
						<?php }else{ ?>
							<div class="thumbnail">
								<img src="images/modulos.png" alt="...">
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row animated flipInY ">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2 id="subtitulo">Tecnologias útlizadas</h2>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img src="images/boostrap.png" alt="...">
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img width="100%" height="100%"  z-index:1 src="images/html.png" alt="...">
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img src="images/javaScript.png" alt="...">
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img  class="img-circle" src="images/jquery-logo.jpg" alt="...">
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img src="images/PHP-MYSQL-TUTORIAL.png" alt="...">
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img src="images/PHP-logo.svg.png" alt="...">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /page content -->