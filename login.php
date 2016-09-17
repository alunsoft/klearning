<?php include("phps/session.php");
if (isset($_SESSION['id_usuario'])) {
   header('Location: index.php');
}else { ?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- Meta, title, CSS, favicons, etc. -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>K-Learning</title>

      <!-- Bootstrap -->
      <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Font Awesome -->
      <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <!-- NProgress -->
      <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
      <!-- Animate.css -->
      <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

      <!-- Custom Theme Style -->
      <link href="build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="login">
      <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
          <div class="animate form login_form">
            <section class="login_content">
              <form id="form_iniciar">
                <h1>K-Learning</h1>
                <div>
                  <input type="text" class="form-control" placeholder="Username" required="" autofocus name="usuario_iniciar" id="usuario_iniciar"/>
                </div>
                <div>
                  <input type="password" class="form-control" placeholder="Password" required="" name="clave_iniciar" id="clave_iniciar" />
                </div>
                <div>
                  <input type="button" value="Iniciar" id="button_iniciar" class="btn btn-default submit">
                  <!-- <a class="reset_pass" href="#">Olvidaste tu contraseña??</a> -->
                </div>
                <div id="alert_error" class="alert alert-danger alert-dismissible fade " style="position: absolute; width: 100%;">Error message</div>
                <div class="clearfix"></div>

                <div class="separator">
                  <p class="change_link">Quieres unirte?<br>
                    <a href="#signup" class="to_register btn btn-info" style="text-decoration: none;"> Crea una cuenta </a>
                  </p>
                  <div class="clearfix"></div>
                  <br />
                  <div>
                    <p>Kakchiquel a tu alcance</p>
                  </div>
                </div>
              </form>
            </section>
          </div>

          <div id="register" class="animate form registration_form">
            <section class="login_content">
              <form>
                <h1>Crear Cuenta</h1>
                <div>
                  <input type="text" class="form-control" placeholder="Nombre" name="nombre_r" id="nombre_r" required="" />
                </div>
                <div>
                  <input type="text" class="form-control" placeholder="Username" name="username_r" id="username_r" required="" />
                </div>
                <div>
                  <input type="email" class="form-control" placeholder="Email" name="email_r" id="email_r" required="" />
                </div>
                <div>
                  <input type="password" class="form-control" placeholder="Password" name="clave_r" id="clave_r" required="" />
                </div>
                <div>
                  <a class="btn btn-default submit" >Crear</a>
                </div>
                <div class="clearfix"></div>
                <div class="separator">
                  <p class="change_link">Ya tienes una cuenta?
                    <a href="#signin" class="to_register"> Iniciar </a>
                  </p>
                  <div class="clearfix"></div>
                  <br />
                  <div>
                    <h1><i class="fa fa-book"></i> K - Learning</h1>
                    <p>Kakchiquel a tu alcance</p>
                  </div>
                </div>
              </form>
            </section>
          </div>
        </div>
      </div>
    </body>
    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="js/function.js"></script>
    <script>
    $(document).ready(function(){
      $("#clave_iniciar").keyup(function(e){
        key = e.keyCode;
        clave = $("#clave_iniciar").val();
        usuario = $("#usuario_iniciar").val();
        if (key == 13) {
          if (clave.length != 0 && usuario.length != 0) {
            fn_iniciarSession('form_iniciar');
          }else{
            fn_errorLogin("alert_error","Debe llenar los campos.");
          }
        }
      });
      
      $("#button_iniciar").click(function(){
        clave = $("#clave_iniciar").val();
        usuario = $("#usuario_iniciar").val();
        if (clave.length != 0 && usuario.length != 0) {
          fn_iniciarSession('form_iniciar');
        }else{
          fn_errorLogin("alert_error","Debe llenar los campos.");
        }
      });
    });
    </script>
    <!-- /validator -->
  </html>
<?php } ?>