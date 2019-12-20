<?php include('../fetchs.php');
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Fertisuelos | Gestión de fertilizantes</title>
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
                  <h5 class="breadcrumbs-title">Gestión de fertilizantes</h5>
                  <ol class="breadcrumbs">
                    <li><a href="../../index.php">Dashboard</a></li>
                    <li><a href="#">Fertilizantes</a></li>
                    <li class="active">Fertilizantes</li>
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
               <div class="container">
                 <div class="row">
                  <div class="col s12">
                    <p>Aquí puedes gestionar los fertilizantes.</p>
                  </div>
                  <div class="col s12">
                <div align="right">
                    <div class="row">
                        <div class="col s12 l12 m12">
                        <a href="#ayuda" class="modal-trigger"><i class="material-icons">help</i><span class="new badge blue" data-badge-caption="Ayuda "></span></a>
                        </div>
                    </div>
				    </div>
                    <table id="datos_fertilizantes" class="responsive-table display highlight bordered striped" cellspacing="0">
                     <thead>
                      <tr>
                       <th>Nombre</th>
                       <th>Tipo</th>
                       <th>Estado</th>
                       <th>Fabricante</th>
                       <th>Editar</th>
                       <th>Eliminar</th>
                      </tr>
                     </thead>
                    </table>
                  </div>
                </div>
              </div>
              </div>
              <br>
              <div class="divider"></div>
              
            </div>
            <!--INICIO DEL MODAL PARA LA GESTIÓN DE LOS FERTILIZANTES-->
<div id="elementos_modal" class="modal">
    <form method="post" id="form_elementos" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#!" class="modal-action modal-close red-text right btn-flat">Cerrar</a>
                <h5 class="modal-title">Agregar elemento</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col s12 m12 l6">
                        <label class="active" for="">Nombre</label>
                        <input id="Nombre_fertilizante" name="Nombre_fertilizante" type="text" data-length="20" maxlength="30" required>
                    </div>
                    <div class="col s12 m12 l6">
                         <label class="active" for="">Tipo</label>
                        <input type="text" name="Tipo_fertilizante" id="Tipo_fertilizante" class="validate" required />
                    </div>

                    <div class="col s12 m12 l12">
                        <label>Estado</label>
                    <select class="" name="Estado_fertilizante" id="Estado_fertilizante" required>
                        <option disabled selected value="NaN">Selecciona una categoría</option>
                        <option value="Solido">Solido</option>
                        <option value="Líquido">Líquido</option>
                    </select>
                    </div>

                    <div class="col s12 m12 l12">
                        <label class="active" for="">Fabricante</label>
                        <input type="text" name="Fabricante_fertilizante" id="Fabricante_fertilizante" class="validate" required />
                    </div>
                    <div class=" col s12 m12 l12">
                        <label class="active" for="">Composición Garantizada</label>
                        <input id="Composicion_garant" name="Composicion_garant" type="text" data-length="150" maxlength="150" required>
                    </div>                    
					<div class=" col s12 m12 l4">
                        <label class="active" for="">Composición General</label>
                        <input id="Composicion_fertilizante" name="Composicion_fertilizante" type="text" data-length="30" maxlength="30" required>
                    </div>             
                 <div class=" col s12 m12 l4">
                        <label class="active" for="">Valor</label>
                        <input id="Valor_fertilizante" name="Valor_fertilizante" type="number" data-length="20" maxlength="30" required>
                    </div>
                    <div class="col s12 m12 l4">
                    <label>Status</label>
                    <select class="" name="Status_fertilizante" id="Status_fertilizante" required> 
                        <option disabled selected value="NaN">Selecciona un número</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <input type="hidden" name="id_fertilizante" id="id_fertilizante" />
            <input type="hidden" name="operacion" id="operacion" />
            <input type="submit" name="accion" id="accion" class="center blue-text btn-flat" value="Add" />
        </div>
</form>
</div>
            <!--FIN DEL MODAL PARA LA GESTIÓN DE LOS FERTILIZANTES-->
              
                        <!-- MODAL DE AYUDA-->  
        <div id="ayuda" class="modal">
    <div class="modal-content">
      <h5>Ayuda en la gestión de fertilizantes</h5>
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
                    <td><h6 class="title">Permite editar un fertilizante</h6></td>
                    </tr>
                    <tr>
                    <td><a href="#"><i class="material-icons red-text center">delete</i></a></td>
                    <td><h6 class="title">Permite eliminar un fertilizante</h6></td>
                    </tr>
                    <tr>
                    <td><a id="add_button" class="btn-floating btn-large green modal-trigger"  href="#">
                <i class="material-icons">add</i></a></td>
                    <td><h6 class="title">Permite agregar un nuevo fertilizante</h6></td>
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
            <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
              <a id="add_button" class="btn-floating btn-large green modal-trigger"  href="#elementos_modal">
                <i class="material-icons">add</i>
              </a>
            </div>
            <!-- Floating Action Button -->
          </div>
          <!--end container-->
        </section>
        <!-- END CONTENT -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->   
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
    <!--Modelo de las fertilizantes-->
    <script type="text/javascript" language="javascript" src="../../model/m.fertilizantes/m.fertilizantes.js"></script>     
    <!--data-tables.js - Page Specific JS codes -->
    <script type="text/javascript" src="../../js/scripts/data-tables.js"></script>
    </div>
  </body>
</html>