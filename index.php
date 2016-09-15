<?php include("phps/session.php");
if (!isset($_SESSION['id_usuario'])) {
   header('Location: login.php');
}else { ?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- Meta, title, CSS, favicons, etc. -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>K-Learning</title>
      <!-- Bootstrap -->
      <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Font Awesome -->
      <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <!-- NProgress -->
      <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
      <!-- iCheck -->
      <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
      <!-- bootstrap-wysiwyg -->
      <link href="vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
      <!-- Select2 -->
      <link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet">
      <!-- Animate -->
      <link href="vendors/animate.css/animate.css" rel="stylesheet">
      <!-- Custom Theme Style -->
      <link href="build/css/custom.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">

      <style>
        .modulo:hover{
          color:white;
          cursor: pointer;
        }
        .modulo-primary:hover{
          background-color: #5bc0de;
        }
        .modulo-info:hover{
          background-color: #337ab7;
        }
        .modulo-success:hover{
          background-color: #5cb85c;
        }
        .modulo-warning:hover{
          background-color: #f0ad4e;
        }
      </style>
    </head>

    <body class="nav-md">
      <div class="container body">
        <div class="main_container">
          <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
              <div class="navbar nav_title" style="border: 0;">
                <a href="index.php" class="site_title"><i class="fa fa-book"></i> <span>K-Learning</span></a>
              </div>

              <div class="clearfix"></div>

              <!-- menu profile quick info -->
              <div class="profile">
                <div class="profile_pic">
                  <img src="images/user.png" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                  <span>Bienvenido,</span>
                  <h2><?php echo $_SESSION['nombre_usuario']; ?></h2>
                </div>
              </div>
              <!-- /menu profile quick info -->

              <br />

              <!-- sidebar menu -->
              <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <h3><?php echo $_SESSION["rol"]; ?></h3>
                  <ul class="nav side-menu">
                    <li class="active">
                      <a onclick="fn_menu('', 'phps/nosotros.php')">
                        <i class="fa fa-child"></i> Nosotros
                      </a>
                    </li>
                    <li>
                      <a onclick="fn_menu('Ütz Awäch', 'phps/modulos.php')">
                        <i class="fa fa-cubes"></i> Modulos
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- /sidebar menu -->
            </div>
          </div>

          <!-- top navigation -->
          <div class="top_nav">
            <div class="nav_menu">
              <nav>
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                  <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <img src="images/user.png" alt=""><?php echo $_SESSION['nombre_usuario']; ?>
                      <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li><a href="javascript:fn_openModal('Perfil', 'formModal', 'phps/actualizarusuario.php', 'phps/perfil.php');"> Perfil</a></li>
                      <li><a href="phps/logout.php"><i class="fa fa-sign-out pull-right"></i> Salir</a></li>
                    </ul>
                  </li>

                </ul>
              </nav>
            </div>
          </div>
          <!-- /top navigation -->

          <!-- page content -->
          <div class="right_col" role="main">
            <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3 id="x_panel_titulo"></h3>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="row" >
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel" id="x_panel_princiapl"></div>
                </div>
              </div>

            </div>
          </div>
          <!-- /page content -->

          <!-- footer content -->
          <footer>
            <div class="pull-right">
              K-Learning - Kakchiquel a tu alcance
            </div>
            <div class="clearfix"></div>
          </footer>
          <!-- /footer content -->
        </div>
      </div>

    <div id="globalModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalTitle">--</h4>
          </div>
          <div class="modal-body">
            <div id="bodyModal" style="padding: 5px 20px;">
              
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose btn-globalModal" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary antosubmit btn-globalModal" id="saveInputModal" onclick="fn_saveModal()">Guardar</button>
            <center><div align=center class="loader" id="loaderGlobalModal" style="width: 30px;height: 30px;display: none;"></div></center>
          </div>
        </div>
      </div>
    </div>

      <!-- jQuery -->
      <script src="vendors/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap -->
      <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- FastClick -->
      <script src="vendors/fastclick/lib/fastclick.js"></script>
      <!-- NProgress -->
      <script src="vendors/nprogress/nprogress.js"></script>
      <!-- bootstrap-progressbar -->
      <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
      <!-- iCheck -->
      <script src="vendors/iCheck/icheck.min.js"></script>
      <!-- bootstrap-daterangepicker -->
      <script src="js/moment/moment.min.js"></script>
      <script src="js/datepicker/daterangepicker.js"></script>
      <!-- bootstrap-wysiwyg -->
      <script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
      <script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
      <script src="vendors/google-code-prettify/src/prettify.js"></script>
      <!-- jQuery Tags Input -->
      <script src="vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
      <!-- Switchery -->
      <script src="vendors/switchery/dist/switchery.min.js"></script>
      <!-- Select2 -->
      <script src="vendors/select2/dist/js/select2.full.min.js"></script>
      <!-- Parsley -->
      <script src="vendors/parsleyjs/dist/parsley.min.js"></script>
      <!-- Autosize -->
      <script src="vendors/autosize/dist/autosize.min.js"></script>
      <!-- jQuery autocomplete -->
      <script src="vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
      <!-- starrr -->
      <script src="vendors/starrr/dist/starrr.js"></script>

      <!-- Custom Theme Scripts -->
      <script src="build/js/custom.min.js"></script>
      <script src="js/function.js"></script>
      <script>
        $(document).ready(function(){
          $(".modulo").mouseover(function(){
            getClass = $(this).data("class");
            $("." + getClass + " > h3").css("color","white");
          });
          $(".modulo").mouseout(function(){
            getClass = $(this).data("class");
            $("." + getClass + " > h3").css("color","#BAB8B8");
          });
        });
        fn_menu('', 'phps/nosotros.php');
      </script>

    </body>
  </html>
<?php } ?>