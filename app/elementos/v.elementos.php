<?php //include('fetch-head.php');
session_start();
include("../../db/dbconnect.php"); 
            
             if(!isset($_SESSION["user_name"]))  
             {   
              $_SESSION["user_name"] = 'Invitado';
              $query_user = "SELECT * FROM user_details WHERE user_name = '".$_SESSION["user_name"]."'";  
              $result_user = mysqli_query($conexion, $query_user);
             }else{
                  $query_user = "SELECT * FROM user_details WHERE user_name = '".$_SESSION["user_name"]."'";  
                  $result_user = mysqli_query($conexion, $query_user);  
             }
            $estado = "";
            
               if($_SESSION["user_name"] == 'Invitado') {
                   $estado = "Iniciar";    
               }else{
                    $estado = "Salir";    
               }

include('../fetchs.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Fertil | Gestión de Elementos</title>
    <!-- Favicons-->
    <link rel="icon" href="../../images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="../../images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.html">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="../../css/themes/fixed-menu/materialize.css" type="text/css" rel="stylesheet">
    <link href="../../css/themes/fixed-menu/style.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="../../css/custom/custom.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="../../vendors/prism/prism.css" type="text/css" rel="stylesheet">
    <link href="../../vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="../../vendors/data-tables/css/jquery.dataTables.min.css">
    <link href="../../vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
  </head>
  <body style="overflow-x: hidden;">
    <!-- Start Page Loading -->
      <div id="loader"></div>
      <div class="main animate-bottom" style="display:none;">
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START HEADER -->
    <?php include("../top-bar-sub.php");?>
    <!-- END HEADER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START MAIN -->
    <div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">
        <!-- START LEFT SIDEBAR NAV-->
        <?php include("../left-sidebar.php")?>
        <!-- END LEFT SIDEBAR NAV-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTENT -->
        <section id="content">
          <!--breadcrumbs start-->
          <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey lighten-2 hide-on-large-only">
              <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
            <div class="container">
              <div class="row">
                <div class="col s10 m6 l6">
                  <h5 class="breadcrumbs-title">Gestión de elementos</h5>
                  <ol class="breadcrumbs">
                    <li><a href="../../index.php">Dashboard</a></li>
                    <li><a href="#">Fertilizantes</a></li>
                    <li class="active">Gestión de elementos</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!--breadcrumbs end-->
          <!--start container-->
          <div class="container">
            <div class="section">
              <div class="divider"></div>
                
              <!--DataTables example-->
              <div id="table-datatables">
                <div class="row">
                  <div class="col s12">
                    <p>Aquí puedes ver y gestionar los elementos.</p>
                  </div>
                <div align="right">
                    <div class="row">
                        <div class="col s12 l12 m12">
                        <a href="#ayuda" class="modal-trigger"><i class="material-icons">help</i><span class="new badge blue" data-badge-caption="Ayuda "></span></a>
                        </div>
                    </div>
				    </div>    
                  <div class="col s12">
                    <table id="datos_elementos" class="responsive-table display highlight bordered striped" cellspacing="0">
                     <thead>
                      <tr>
                       <th>Nombre elemento</th>
                       <th>Descripción</th>
                       <th>Categoría</th>
                       <th>Editar</th>
                       <th>Eliminar</th>
                      </tr>  
                     </thead>
                    </table>
                  </div>
                </div>
              </div>
              <br>
              <div class="divider"></div>
              
            </div>
            <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
              <a class="btn-floating btn-large modal-trigger" href="#elementos_modal">
                <i class="material-icons green">add</i>
              </a>
            </div>
            <!-- Floating Action Button -->
          </div>
          <!--end container-->
        </section>
        <!-- END CONTENT -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!--INICIO MODAL PRINCIPAL QUE ME GESTIONA LOS ELEMENTOS-->
      <div id="elementos_modal" class="modal">
      <form method="post" id="form_elementos" enctype="multipart/form-data">
       <div class="modal-content">
        <div class="modal-header">
        <a href="#!" class="modal-action modal-close red-text right btn-flat">Cerrar</a>
         <h5 class="modal-title">Agregar elemento</h5>
        </div>
        <div class="modal-body">
        <div class="row">
          <div class="input-field col s12">
            <input id="Nombre_elemento" name="Nombre_elemento"   type="text" data-length="20" maxlength="30">
            <label class="active" for="">Nombre_elemento</label>
          </div>
            
    
         <div class="input-field col s6">
            <input type="text" name="Descripcion_elemento" id="Descripcion_elemento" class="validate" />          
            <label class="active" for="">Descripcion_elemento</label>
            </div>
                      
               <div class="col s6">
            <select class="browser-default" name="Categoria_elemento" id="Categoria_elemento">
                <option disabled selected value="NaN">Selecciona una categoría</option>
                <option value="Mayor">Mayor</option>
                <option value="Secundario">Secundario</option>
                <option value="Menor">Menor</option>
                <label>Categoría</label>
            </select>
                </div>
    
          </div>
            </div>

        </div>

        <div class="modal-footer">
         <input type="hidden" name="id_elemento" id="id_elemento" />
         <input type="hidden" name="operacion" id="operacion" />
         <input type="submit" name="accion" id="accion" class="center blue-text btn-flat" value="Add" />
        </div>
 
      </form>
    </div>
      <!--FIN MODAL PRINCIPAL QUE ME GESTIONA LOS ELEMENTOS-->
             
        <!-- MODAL AYUDA-->  
        <div id="ayuda" class="modal">
    <div class="modal-content">
      <h5>Ayuda en la gestión de elementos</h5>
      <hr><br>
        <div class="row">
        <div class="col l12 m12 s12">
            <table>
                <thead>
                    <tr>
                    <th>Botón</th>
                    <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td><a href="#"><i class="material-icons black-text center">mode_edit</i></a></td>
                    <td><h6 class="title">Permite editar un elemento</h6></td>
                    </tr>
                    <tr>
                    <td><a href="#"><i class="material-icons red-text center">delete</i></a></td>
                    <td><h6 class="title">Permite eliminar un elemento</h6></td>
                    </tr>
                    <tr>
                    <td><a id="add_button" class="btn-floating btn-large green modal-trigger"  href="#">
                    <i class="material-icons">add</i></a></td>
                    <td><h6 class="title">Permite agregar un nuevo elemento</h6></td>
                    </tr>
                </tbody>
            </table>
                
            
            </div>
        </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Gracias</a>
    </div>
  </div>    
        <!-- START RIGHT SIDEBAR NAV-->
        
        <!-- END RIGHT SIDEBAR NAV-->
      </div>
      <!-- END WRAPPER -->
    </div>
    <!-- END MAIN -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START FOOTER -->
    <footer class="page-footer light-green darken-4">
      <div class="footer-copyright">
        <div class="container">
          <span>Derechos ©
            <script type="text/javascript">
              document.write(new Date().getFullYear());
            </script> <a class="grey-text text-lighten-2" href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">SENNOVA</a> C.G.A.O  SENA - Vélez Santander</span>
          <span class="right hide-on-small-only"> Diseño <a class="grey-text text-lighten-2" href="#">SENNOVA</a></span>
        </div>
      </div>
    </footer>
    <!-- END FOOTER -->
    <!-- ================================================
    Scripts
    ================================================ -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="../../vendors/jquery-3.2.1.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <!--prism-->
    <script type="text/javascript" src="../../vendors/prism/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="../../vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <script src="../../vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../../js/plugins.js"></script>
    <!-- inicialización de JQueries-->
    <script type="text/javascript" src="../../js/inicializadores-materialize.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="../../js/custom-script.js"></script>
    <!--Modelo de los elementos-->
    <script type="text/javascript" language="javascript" src="../../model/m.elementos/m.elementos.js"></script>
    <!--data-tables.js - Page Specific JS codes -->
    <script type="text/javascript" src="../../js/scripts/data-tables.js"></script>
    </div>
  </body>
</html>